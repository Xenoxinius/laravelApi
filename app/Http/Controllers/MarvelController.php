<?php

namespace App\Http\Controllers;

use Cassandra\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Cache;


class MarvelController extends Controller
{
    public function characters(Request $request)
    {
        $name = $request->input('search');
        if(!isset($name)) {
            $name = "Thor";
        }
        if ($name == "taloes") {
            $name = "storm";
        }
        $public_key = "c58f157ace3b1831d60319007d44f93a";
        $private_key = "56287b53bf033bab98b43631032896efceed92a3";
        $ts = time();
        $hash = md5($ts . $private_key . $public_key);


        $client = new Client;

        $query_params = [
            'apikey' => $public_key,
            'ts' => $ts,
            'hash' => $hash
        ];
//convert array into query parameters
        $query = http_build_query($query_params);

//make the request
        $getresponse = Http::get('https://gateway.marvel.com/v1/public/characters?name='.$name.'&' . $query);

//convert the json string to an array
        $response = json_decode($getresponse);


        return view('comic', compact('response'));
    }
}
