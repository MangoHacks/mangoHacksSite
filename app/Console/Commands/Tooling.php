<?php

namespace App\Console\Commands;

use App\Attendee;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Mailgun\Mailgun;

class Tooling extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mango:tools';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
	$this->info(count($this->getConfirmed()));        
	$this->info(count($this->getApplicants()));        
	$this->info(count($this->getNotified()));        
    }

    private function getHashFor($id) {
        $hashed_id = urlencode(simple_encrypt($id));
        return $hashed_id;
    }

    private function getApplicants() {
    	return Attendee::all()->toArray(); 
    }

    private function getNotified() {
    	return Attendee::whereIn('confirmations_sent', [1,2])->get();
    }

    private function getConfirmed() {
        $attendees = Attendee::where('rsvp', 1)->get();
        return $attendees->toArray();
    }

    private function getBounces() {
        # Instantiate the client.
        $mgClient = new Mailgun(env('MAILGUN_SECRET'));
        $domain = env('MAILGUN_DOMAIN');

        # Issue the call to the client.
        return $mgClient->get("$domain/bounces");
    }
}
