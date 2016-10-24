<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\facades\Input;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Hash;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

	public function api(Request $request) //Api for the pastebin
    { 
		$filename = Input::get("filename"); // posted by the angular
		$filesize = Input::get("filesize"); // posted by the angular
		$parts = pathinfo($filename);
		$file_ext = $parts['extension']; //Returns "jpg"
		
		$api_dev_key 			= 'ee936d40c6a1973386a99b9872acb20d'; // your api_developer_key
		$api_paste_code 		= $filesize; // your paste text
		$api_paste_private 		= '0'; // 0=public 1=unlisted 2=private
		$api_paste_name			= $filename; // name or title of your paste
		$api_paste_expire_date 		= '10M';
		$api_paste_format 		= 'text';
		$api_user_key 			= ''; // if an invalid api_user_key or no key is used, the paste will be create as a guest
		$api_paste_name			= urlencode($api_paste_name);
		$api_paste_code			= urlencode($api_paste_code);


		$url 				= 'http://pastebin.com/api/api_post.php';
		$ch 				= curl_init($url);

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_option=paste&api_user_key='.$api_user_key.'&api_paste_private='.$api_paste_private.'&api_paste_name='.$api_paste_name.'&api_paste_expire_date='.$api_paste_expire_date.'&api_paste_format='.$api_paste_format.'&api_dev_key='.$api_dev_key.'&api_paste_code='.$api_paste_code.'');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_NOBODY, 0);

		$response  			= curl_exec($ch);
		echo $response; 
    }
}
