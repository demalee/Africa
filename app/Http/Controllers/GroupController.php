<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Ixudra\Curl\Facades\Curl;
use App\Http\Controllers\GuzzleController as ApiRequest;
use Carbon\Carbon;

class GroupController extends Controller
{

    public function groups(){
       $auth = false;
       $token = null;
       $url = "/group/fetchGroups";
       $apirequest = new ApiRequest();
       $_groups = $apirequest->fetchRequest($auth,$token,$url);
       $groups = @$_groups->response?:[];
       return view('users/group', compact('groups'));
    }

  

    public function createGroup(Request $request){
        $url = "/group/createGroup";
        $auth = false;
        $token = null;
        $data = $request->all();

        
        $body = [
            "group" => $data['group']
        ];

        $apirequest = new ApiRequest();
        $result = $apirequest->postRequest($auth,$token,$url,$body);

        if( @$result->status == 200 ) {
            Session::flash('success', 'Group created successfully');
            return redirect()->back();
        } else {
            return redirect()->back()->with('error',@$result->response);
        }
    }

     public function uploadcontacts(){
       $auth = false;
       $token = null;
       $url = "/group/fetchGroups";
       $apirequest = new ApiRequest();
       $_groups = $apirequest->fetchRequest($auth,$token,$url);
       $groups = @$_groups->response?:[];
       return view('users/upload-contact', compact('groups'));
    }

    public function postcontacts(Request $request){
        $url = "/group/uploadContacts";
        $auth = false;
        $token = null;
        $data = $request->all();
        // dd($data);s
       	$contactcsv = @$data['contactfile'];
       	if(!isset($contactcsv)){
           return redirect()->back()->with('error','Invalid or Blank file, Please upload a file.');
        } else {
	        $contactfilename=$contactcsv->getClientOriginalName();
	        $contactcsv->move('contacts',$contactfilename);
	        $fp = file(public_path () . '/contacts/'.$contactfilename);
	        $fp = count($fp);        
	        // check if user has data in the csv file
	        if( $fp <= 1 ) {

	        return redirect()->back()->with('error','The file uploaded does not contain any Phone Numbers. Please check the file and try again.');
	        }


	       $response = Curl::to('http://localhost:8011/api/group/uploadContacts')
           ->withData( array( 'group' => $data['group'] ) )
           ->withFile( 'file', public_path () . '/contacts/'.$contactfilename )
           ->post();

	       $result = json_decode($response);
	       if( @$result->status == 200 ) {
	            Session::flash('success', @$result->response);
	            return redirect()->back();
	       } else {
	            return redirect()->back()->with('error',@$result->response);
	       }
	    }
    }


    public function groupcontacts($group_id){
       $auth = false;
       $token = null;
       $url = "/group/fetchGroupById/".$group_id;
       $apirequest = new ApiRequest();
       $_groups = $apirequest->fetchRequest($auth,$token,$url);
       $groupscontacts = @$_groups->response?:[];
       return view('group/group-contacts', compact('groupscontacts'));
    }

     public function deleteGroupById($group_id){
       $auth = false;
       $token = null;
       $url = "/group/deleteGroupById/".$group_id;
       $apirequest = new ApiRequest();
       $response = $apirequest->fetchRequest($auth,$token,$url);
       Session::flash('success', @$response->response);
       return redirect()->back();
    }

    public function deleteContactFromGroup($id,$group_id){
       $auth = false;
       $token = null;
       $url = "/group/deleteContactFromGroup/".$group_id."/".$id;
       $apirequest = new ApiRequest();
       $response = $apirequest->fetchRequest($auth,$token,$url);
       Session::flash('success', @$response->response);
       return redirect()->back();
    }


}
