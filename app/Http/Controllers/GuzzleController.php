<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Ixudra\Curl\Facades\Curl;


class GuzzleController extends Controller
{
    public function fetchRequest($auth,$token,$url){
        //get request
        if($auth == false) {
            $response = Curl::to(env('BASE_URL').$url)
                //->withHeader("Authorization: MSISDNPIN ".$auth)
                ->withResponseHeaders()
                ->returnResponseObject()
                //->withData($body)
                ->asJson()
                ->get();
        }else{
            $response = Curl::to(env('BASE_URL').$url)
                ->withHeader("Authorization: Bearer ".$token)
                ->withResponseHeaders()
                ->returnResponseObject()
                //->withData($body)
                ->asJson()
                ->get();
        }
        //Log::debug("response from get" ,[json_encode($response->content)]);
        return $response->content;
    }
    public function postrequest($auth,$token,$url,$body){
        if($auth == false) {
            $response = Curl::to(env('BASE_URL').$url)
                ->withHeader('Content-Type: application/json')
               // ->withHeader('Authorization: Bearer ' . $token)
                ->withResponseHeaders()
                ->returnResponseObject()
                ->withData($body)
                ->asJson()
                ->post();
        }else{
            $response = Curl::to(env('BASE_URL').$url)
                ->withHeader('Content-Type: application/json')
                ->withHeader('Authorization: Bearer ' . $token)
                ->withResponseHeaders()
                ->returnResponseObject()
                ->withData($body)
                ->asJson()
                ->post();
        }
        return $response->content;
    }


  
}
