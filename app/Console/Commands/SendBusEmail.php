<?php

namespace App\Console\Commands;

use App\Attendee;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendBusEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mango:send-bus';

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
        $targetUsers = Attendee::where('rsvp', 1)
                ->whereIn('school', [
			'Embry-Riddle - Daytona Beach',
			'Florida Institute of Technology',
			'Florida Polytechnic University',
			'Florida State University',
			'Stetson University',
			'Tallahassee Community College',
			'University of Central Florida',
			'University of Florida',
			'University of South Florida',
		])->get();

        foreach($targetUsers as $attendee) {

            $attendee_data = [
                'first_name' => $attendee['first_name'],
                'last_name' => $attendee['last_name'],
                'email' => $attendee['email']
            ];

            Mail::send('emails.bus', ['attendee' => $attendee_data], function($m) use ($attendee_data) {
                $m->from('team@mangohacks.com', 'MangoHacks Team');

                $m->to($attendee_data['email'], $attendee_data['first_name'].' '.$attendee_data['last_name'])
                    ->subject('MangoHacks NorthFlo Bus Info!');
            });
        }
    }
}
