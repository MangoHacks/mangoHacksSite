<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class YelpController extends Controller
{
    public function show($latitude, $longitude, $term = '') {

        $term = (!empty($term)) ? $term : 'food';

        $stack = HandlerStack::create();
        $middleware = new Oauth1([
            'consumer_key'    => "dgpm40oFD1l5y5Xwj2Lqwg",
            'consumer_secret' => "3xwTZyDvmA-tYjVii-LTaunkEM8",
            'token'           => "f9SLHmB1PzWjr5236bHty8q8ywW4mFUI",
            'token_secret'    => "tOwiA_RvdEckLpBqZ-Rzbng297c"
        ]);
        $stack->push($middleware);

        $yelp_client = new Client([
            'handler' => $stack
        ]);

        $yelp_response = $yelp_client->get('http://api.yelp.com/v2/search/?term=restaurants&term='.$term.'&cll='.$latitude.','.$longitude.'&sort=0',
            ['auth' => 'oauth']);

        $yelp_data = json_decode($yelp_response->getBody());

        return response()->json($yelp_data);
    }
}
