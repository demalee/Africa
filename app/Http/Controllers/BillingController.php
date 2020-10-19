<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Ixudra\Curl\Facades\Curl;
use App\Http\Controllers\GuzzleController as ApiRequest;
use Carbon\Carbon;

class BillingController extends Controller
{
    public function index(){
       $auth = false;
       $token = null;
       $url = "/billing/fetchNetworks";
       $apirequest = new ApiRequest();
       $result = $apirequest->fetchRequest($auth,$token,$url);
       $networks = @$result->response?:[];

       $_topUpHistory = $apirequest->fetchRequest($auth,$token,"/billing/fetchBillingHistory");
       $topUpHistory = @$_topUpHistory->response?:[];
       // dd($networks);
       return view('billing/index', compact('networks','topUpHistory'));
    }
    
    public function topUpUnits(Request $request){
        $url = "/billing/topUpUnits";
        $auth = false;
        $token = null;
        $data = $request->all();
        // dd($data);
        
        $body = [
            "network" => $data['network'],
            "amount" => $data['amount'],
            "company_id" => 1
        ];
       
        $apirequest = new ApiRequest();
        $result = $apirequest->postRequest($auth,$token,$url,$body);
        // dd($result);
        if( @$result->status == 200 ) {
            Session::flash('success', 'Message sent successfully');
            return redirect()->back();
        } else {
            return redirect()->back()->with('error',@$result->response);
        }

    }


}
