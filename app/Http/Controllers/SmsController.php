<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Ixudra\Curl\Facades\Curl;
use App\Http\Controllers\GuzzleController as ApiRequest;
use Carbon\Carbon;

class SmsController extends Controller
{

    public function viewSentTrxBulkSMS(){
       $auth = false;
       $token = null;
       $url = "/sms/fetchOutgoingTrxBulkSMS";
       $apirequest = new ApiRequest();
       $result = $apirequest->fetchRequest($auth,$token,$url);
       $outboxSMSs = @$result->response?:[];
       // dd($outboxSMSs);
       return view('sms/outbox-blast-trx', compact('outboxSMSs'));

    }

    public function viewIncomingSMS(){
       $auth = false;
       $token = null;
       $url = "/sms/fetchInboxSMS";
       $apirequest = new ApiRequest();
       $result = $apirequest->fetchRequest($auth,$token,$url);
       $inboxSMSs = @$result->response?:[];
       // dd($inboxSMSs);
       return view('sms/inbox', compact('inboxSMSs'));

    }


    public function viewSentBulkSMS(){
       $auth = false;
       $token = null;
       $url = "/sms/fetchOutgoingBulkSMS";
       $apirequest = new ApiRequest();
       $result = $apirequest->fetchRequest($auth,$token,$url);
       $outboxSMSs = @$result->response?:[];

       return view('sms/outbox-blast', compact('outboxSMSs'));

    }

    public function viewScheduledBulkSMS(){
       $auth = false;
       $token = null;
       $url = "/sms/fetchScheduledBulkSMS";
       $apirequest = new ApiRequest();
       $result = $apirequest->fetchRequest($auth,$token,$url);
       $outboxSMSs = @$result->response?:[];

       return view('sms/scheduled-blast', compact('outboxSMSs'));

    }

    



    public function bulkGroup(){
       $auth = false;
       $token = null;
       $url = "/senders/fetchSenderIds";
       $apirequest = new ApiRequest();
       $result = $apirequest->fetchRequest($auth,$token,$url);
       $senders = @$result->response?:[];

       $_groups = $apirequest->fetchRequest($auth,$token,"/group/fetchGroups");
       $groups = @$_groups->response?:[];


       return view('users/bulk-group', compact('senders','groups'));

    }

  

    public function postExpressBulk(Request $request){
        $url = "/sms/sendExpressBulk";
        $auth = false;
        $token = null;
        $data = $request->all();

        
        $body = [
            "msisdn" => @$data['msisdn'],
            "message" => @$data['message'],
            "sender_id" => @$data['code'],
            // "msisdn" => $data['msisdn'],
        ];

        $apirequest = new ApiRequest();
        $result = $apirequest->postRequest($auth,$token,$url,$body);

        if( @$result->status == 200 ) {
            Session::flash('success', 'Message sent successfully');
            return redirect()->back();
        } else {
            return redirect()->back()->with('error',@$result->response);
        }

    }

    public function postBulk(Request $request){
        $url = "/sms/sendBulk";
        $auth = false;
        $token = null;
        $data = $request->all();
        // dd($data);
        

        $date = str_replace('-', "", @$data['date']);
        $time = str_replace('-', "", @$data['time']);
        $scheduled_time = new Carbon($date.$time);

        $body = [
            "group_id" => @$data['group_id'],
            "message" => @$data['message'],
            "sender_id" => @$data['code'],
            "scheduled_time" => @$scheduled_time,
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
