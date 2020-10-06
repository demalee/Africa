<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Ixudra\Curl\Facades\Curl;
use App\Http\Controllers\GuzzleController as ApiRequest;
use Carbon\Carbon;

class UserController extends Controller
{

    public function fetchSystemUsers(){
       $auth = false;
       $token = null;
       $url = "/users/fetchUsers";
       $apirequest = new ApiRequest();
       $result = $apirequest->fetchRequest($auth,$token,$url);
       $users = @$result->response?:[];
       return view('users/users', compact('users'));

    }

    public function createUsers(){
       $auth = false;
       $token = null;
       $url = "/users/fetchCompanies";
       $apirequest = new ApiRequest();
       $result = $apirequest->fetchRequest($auth,$token,$url);
       $companies = @$result->response?:[];
       return view('users/usercreate', compact('companies'));

    }

    public function postNewUser(Request $request){
        $url = "/users/createNewUser";
        $auth = false;
        $token = null;
        $data = $request->all();

        $body = [
            "name" => $data['name'],
            "other_names" => $data['other_names'],
            "email" => $data['email'],
            "phone" => $data['phone'],
            "company_id" => $data['company_id'],
            "role"=> $data['role'],
        ];

        $apirequest = new ApiRequest();
        $result = $apirequest->postRequest($auth,$token,$url,$body);

        if( @$result->status == 200 ) {
            Session::flash('success', 'User created successfully');
            return redirect()->back();
        } else {
            return redirect()->back()->with('error',@$result->response);
        }

    }
    
    public function companiesList(){
       $auth = false;
       $token = null;
       $url = "/users/fetchCompanies";
       $apirequest = new ApiRequest();
       $result = $apirequest->fetchRequest($auth,$token,$url);
       $companies = @$result->response?:[];
       return view('users/companies', compact('companies'));

    }

    
     public function postCompany(Request $request){
        $url = "/users/postCompany";
        $auth = false;
        $token = null;
        $data = $request->all();

        
        $body = [
            "company" => $data['company'],
            "company_sms_rate" => $data["company_sms_rate"]
        ];
        // dd($body);
        $apirequest = new ApiRequest();
        $result = $apirequest->postRequest($auth,$token,$url,$body);

        if( @$result->status == 200 ) {
            Session::flash('success', @$result->response);
            return redirect()->back();
        } else {
            return redirect()->back()->with('error',@$result->response);
        }
    }


    
     public function deletecompany($company_id){
       $auth = false;
       $token = null;
       $url = "/users/deleteCompany/".$company_id;
       $apirequest = new ApiRequest();
       $response = $apirequest->fetchRequest($auth,$token,$url);
       Session::flash('success', @$response->response);
       return redirect()->back();
    }



    public function companyDetails($company_id){
       $auth = false;
       $token = null;
       $url = "/users/companyDetails/".$company_id;
       $apirequest = new ApiRequest();
       $response = $apirequest->fetchRequest($auth,$token,$url);
       // dd($response);
       $company = @$response->response;
       $system_users = @$response->company_users;
       return view('users/company-details', compact('company','system_users'));
    }
}
