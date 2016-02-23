<?php

namespace App\Http\Controllers;

use App\Attendee;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mailchimp;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request) {
        $fields = $request->all();
        $hash_id = $fields['h'];

        $id = (simple_decrypt($hash_id));

        $attendee = Attendee::where('id', $id)->first();

//        if($attendee['rsvp'] != 1) {
//            $attendee['rsvp'] = 1;
//            $attendee->save();
//        }

        return view('confirm', [
           'attendee' => $attendee
        ]);
    }

    public function postPreRegister(Request $request, Mailchimp $mailchimp) {
        $fields = $request->all();
        $email = $fields['email'];

        try {
            $mailchimp
                ->lists
                ->subscribe(
                    'a973d3a603',
                    ['email' => $email],
                    null,
                    'html',
                    false, false, true, true
                );

            return response()->json($this->getResponse("You rock! We'll let you know as soon as applications open."));
        }
        catch (\Mailchimp_List_AlreadySubscribed $e) {
            return response()->json($this->getResponse("We've got you! We'll let you know as soon as applications open."));
        } catch (\Mailchimp_Error $e) {
            return response()->json($this->getResponse("Hmm. Something went wrong. Try that again.", 'error'));
        }
    }

    private function getResponse($message, $type = 'success') {
        $response = [
            'type' => $type,
            'message' => $message
        ];

        return $response;
    }
}
