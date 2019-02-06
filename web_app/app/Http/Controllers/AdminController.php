<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\donors;
use App\events;
use App\store;
use App\teachers;
use App\volunteer;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public static function showLogin(Request $request)
    {
    		//return view('');
    }
    public static function checkLogin(Request $request)
	{
				$username= $request->input('username');
				$pass= $request->input('password');
				$user = DB::table('users')->select('user_name','password')->where('user_name',$username)->get();
				//return $user;
				if(Hash::check($pass, $user[0]->password) && $user[0]->acct_status ==1)
					{
							$request->session()->put('email',$username);
							return redirect()->route('student_details');	
					}
				else
				{
					$request->session()->flash('error','Invalid Username & Password');
					return redirect()->route('login');

				}
	}

	public static function addItem(Request $request)
	{
			$i_name = $request->input('');
			$i_description = $request->input('');
			$i_count = $request->input('');
			$i_image = $request->input('');
			$i_price = $request->input('');
			$i_type = $request->input('');

			$store =  new store;
			$store->i_name = $i_name;
			$store->i_description = $i_description;
			$store->i_count = $i_count;
			$store->i_image = $i_image;
			$store->i_price = $i_price;
			$store->i_type = $i_type;
			$store->save();

			$request->session()->flash('error','Item added Successfully ...');
			//return view("");

	}
	public static function addEvent(Request $request)
	{	
			$e_name = $request->input('');
			$e_status = "upcomming"
			$e_description = $request->input('');
			$e_date = $request->input('');
			$e_amount = $request->input('');
			$e_head = $request->input('');
			$e_photo = $request->input('')
			
			$events =  new events;
			$events->e_name = $i_name;
			$events->e_description = $i_description;
			$events->e_date = $i_count;
			$events->e_amout = $i_image;
			$events->e_head = $i_price;
			$events->e_photo = $e_photo;
			$events->save();

			$request->session()->flash('error','Events added Successfully ...');
			//return view("");

	}

}
