<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
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
}
