<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class MarvelController extends Controller
{

    private $public_key;
    private $private_key;
    private $ts;
    private $client;
    private $query_params;
    private $query;
    private $hash;
    public function __construct()
    {
        $this->public_key = "c58f157ace3b1831d60319007d44f93a";
        $this->private_key = "56287b53bf033bab98b43631032896efceed92a3";
        $this->ts = time();
        $this->hash = md5($this->ts . $this->private_key . $this->public_key);


        $this->client = new Client;

        $this->query_params = [
            'apikey' => $this->public_key,
            'ts' => $this->ts,
            'hash' => $this->hash
        ];
//convert array into query parameters
        $this->query = http_build_query($this->query_params);
    }


    public function characters(Request $request)
    {
        $name = $request->input('search');


//make the request
        $getresponse = Http::get('https://gateway.marvel.com/v1/public/characters?name='.$name.'&' . $this->query);

//convert the json string to an array
        $response = json_decode($getresponse);


        return view('comic', compact('response'));
    }

    public function charactersByName(Request $request) {
        $letter = $request->input('letter');
        if (!isset($letter)) {
            $letter = "a";
        }
        //make the request
        $getresponse = Http::get('https://gateway.marvel.com/v1/public/characters?nameStartsWith='.$letter.'&limit=100&' . $this->query);

//convert the json string to an array
        $alphabetResponse = json_decode($getresponse);
        return view('alphabet', compact('alphabetResponse'));
    }
}
