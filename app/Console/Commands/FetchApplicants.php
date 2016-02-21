<?php

namespace App\Console\Commands;

use App\Attendee;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class FetchApplicants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mango:fetch-applicants';

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
    public function handle(Client $client)
    {
        $res = $client->get('https://api.typeform.com/v0/form/MsmTv9?key='.env('TYPEFORM_KEY').'&completed=true');
        $data = json_decode($res->getBody()->getContents(), true);

        $responses = $data['responses'];
        $stats = $data['stats'];

        if(Attendee::all()->count() == $stats['responses']['completed']) {
            $this->info('No new records');
            return;
        }

        foreach($responses as $response) {
            $registration_date = $response['metadata']['date_submit'];
            $answers = $response['answers'];

            if(Attendee::where('email', $answers['email_16601195'])->get()->isEmpty()) {
                $attendee = new Attendee();
                $attendee['first_name'] = $answers['textfield_16601091'];
                $attendee['last_name'] = $answers['textfield_16601110'];
                $attendee['email'] = $answers['email_16601195'];
                $attendee['age'] = $answers['number_16601256'];
                $attendee['gender'] = ($answers['list_16602185_choice'] == 'Man') ? 'Male' : $answers['list_16602185_choice'];
                $attendee['ethnicity'] = $answers['list_16602304_choice'];
                $attendee['origin'] = $answers['textfield_16602396'];
                $attendee['school'] = $answers['dropdown_16604389'];
                $attendee['year'] = $answers['list_16604397_choice'];
                $attendee['major'] = $answers['textfield_16604436'];
                $attendee['hackathons'] = $answers['list_16604487_choice'];
                $attendee['heard_source'] = $answers['textfield_16604493'];
                $attendee['shirt_size'] = $answers['dropdown_16604598'];
                $attendee['linkedin_url'] = ($answers['website_16604511'] == 'http://') ? '' : $answers['website_16604511'];
                $attendee['github_url'] = ($answers['website_16604513'] == 'http://') ? '' : $answers['website_16604513'];
                $attendee['website_url'] = ($answers['website_16604516'] == 'http://') ? '' : $answers['website_16604516'];
                $attendee['resume_url'] = ($answers['website_16604558'] == 'http://') ? '' : $answers['website_16604558'];
                $attendee['alergies'] = $answers['textfield_16604607'];
                $attendee['food_special'] = $answers['textfield_16604612'];
                $attendee['gif'] = ($answers['website_16604647'] == 'http://') ? '' : $answers['website_16604647'];
                $attendee['registration_date'] = $registration_date;
                $attendee['confirmations_sent'] = 0;
                $attendee->save();
            }
        }
    }
}
