<?php

namespace App\Console\Commands;

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
        # Instantiate the client.
        $mgClient = new Mailgun(env('MAILGUN_SECRET'));
        $domain = env('MAILGUN_DOMAIN');

        # Issue the call to the client.
        $result = $mgClient->get("$domain/bounces");
        dd($result);
    }
}
