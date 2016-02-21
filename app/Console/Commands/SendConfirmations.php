<?php

namespace App\Console\Commands;

use App\Attendee;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendConfirmations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mango:send-confirmations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send confirmation emails';

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
        $targetUsers = Attendee::where('rsvp', 0)
                ->where('checked_in', 0)
                ->where('confirmations_sent', 0)
                ->get();

        foreach($targetUsers as $attendee) {

            $id = $attendee['id'];
            $hashed_id = urlencode(simple_encrypt($id));
            $attendee_data = [
                'hashed_id' => $hashed_id,
                'first_name' => $attendee['first_name'],
                'last_name' => $attendee['last_name'],
                'email' => $attendee['email']
            ];

            Mail::send('emails.confirmation', ['attendee' => $attendee_data], function($m) use ($attendee_data) {
                $m->from('team@mangohacks.com', 'MangoHacks Team');

                $m->to($attendee_data['email'], $attendee_data['first_name'].' '.$attendee_data['last_name'])
                    ->subject('MangoHacks Decisions Are Out!');
            });

            $confs_sent = $attendee['confirmations_sent'];
            $attendee['confirmations_sent'] = $confs_sent + 1;
            $attendee->save();
        }


    }
}
