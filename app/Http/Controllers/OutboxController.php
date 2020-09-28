<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Ixudra\Curl\Facades\Curl;

class OutboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function postBulk(Request $request){
        $url = "/sms/sendExpressBulk";
        $auth = false;
        $token = null;
        $data = $request->all();

        
        $body = [
            "msisdn" => $data['msisdn'],
            "message" => $data['message'],
            "sender_id" => $data['code'],
            // "msisdn" => $data['msisdn'],
        ];


        $result = $this->postRequest($auth,$token,$url,$body);
        if( @$result->status == 200 ) {
            Session::flash('success', 'Message sent successfully');
            return redirect()->back();
        } else {
            return redirect()->back()->with('errors',@$result->response);
        }

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



    public function SendAllMembers(Request $request)
    {
        $subject = $request->subject;
        $message = $request->message;
        $data = $request->all();

        $user = Auth::user()->id;

        $members = \Illuminate\Support\Facades\DB::table('users')->select('users.*')->pluck('users.msisdn')
            ->toArray();
        $phone_numbers = array();
        foreach($members as $member)
        {
            $formated_phone = $this->formatPhoneNumber( $member);
            array_push($phone_numbers, $formated_phone);
        }

        if (count($phone_numbers) > 0){
            foreach($phone_numbers as $phone) {
                $AT = new AfricasTalking("RekodSupport", "ba9753ed6baa9becc5742be649c75a4f62fa86a08a730166c772bac7147efb09");
                try {
                    $phone = "+".$this->formatPhoneNumber( $phone);
                    $sms = $AT->sms();
                    //Use the services
                    $msg =" Subject:" . $data['subject'] . "\n message:" . $data['message'] . "\n Sender:" . "\n Sacco Administrator";
                    $result = $sms->send([
                        'to' =>  $phone,
                        'message' => $msg
                    ]);
                    print_r($result);
                    $options = [];

                    //send bulk sms
                    if ( $phone) {
                        $sms->send($result, $options);
                    }
                } catch (Exception $e) {
                    return redirect()->back()->with('error', "Error: " . $e->getMessage());
                }
//dd( $phone);
            }}
        Session::flash('success', 'Message sent successfully');
        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
