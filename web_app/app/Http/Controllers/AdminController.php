<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\donors;
use App\User;
use App\events;
use App\store;
use App\teachers;
use App\volunteer;
use Illuminate\Support\Facades\Mail;
use Storage;
use Validator;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function login(Request $request) {
        if($request->isMethod('get')) {
			if(session('id')) {
				return view('dashboard');
			}
			return view('login');
		}
		$username = request('username');
        $password = request('password');

        $user = User::where([['user_name','=',$username],['password','=',$password]])->first();

        if(isset($user)) {
            session(['id' => $user->id]);
            session(['username' => $user->user_name]);
            return view('dashboard');
		}
		else {
			return 'Invalid credentials';
		}
	}
	
	public function logout() {
        if(session('id')) {
            session()->flush();
            return redirect('/');
        }
	}
	
	public function events(Request $request) {
		if($request->isMethod('get')) {
			$events = events::all();
			return view('adminevents')->with('events',$events);
		}
		$e_name = $request->input('e_name');
		$e_status = "upcoming";
		$e_description = $request->input('e_details');
		$e_date = $request->input('e_date');
		$e_amount = $request->input('e_amount');
		$e_head = $request->input('e_head');
		$e_address = $request->input('e_addr');
		// $e_photo = $request->input('e_photo');
		$events =  new events;
		$destinationPath = 'events';
		if($request->hasFile('e_photo'))
				  {
						$rules = ['e_photo' => 'mimes:jpg,png,jpeg'];
						 $validator = Validator::make(Input::all() , $rules);
						if ($validator->fails())
						 {
						  $request->session()->flash('error', 'Please Upload Only JPG or PNG type image. File size should be less than 1 mb.');
						 
						 }
						$extension = $request->file('e_photo')->getClientOriginalExtension();
						$filenametostore = 'photo'.$e_name.'.'.$extension;
				
						$path =  $request->file('e_photo')->storeAs($destinationPath, $filenametostore,'public_uploads');


					  
						
					   $events->e_photo = $filenametostore;  
					  
				  }


		$events->e_name = $e_name;
		$events->e_status = $e_status;
		$events->e_description = $e_description;
		$events->e_date = $e_date;
		$events->e_amount = $e_amount;
		$events->e_head = $e_head;
		$events->e_address = $e_address;
		$events->save();

		// $request->session()->flash('error','Events added Successfully ...');
		return redirect('/admin/events');

	}

	public function addevents() {
		return view('addevents');
	}

	public function requests() {
		
	}

	public static function showAddItem(Request $request)
	{
		return view('addItem');
	}

	public static function addItem(Request $request)
	{
			$i_name = $request->input('i_name');
			$i_description = $request->input('i_details');
			$i_count = $request->input('i_count');
			$i_image = $request->input('i_photo');
			$i_price = $request->input('i_amount');
			$i_type = $request->input('i_type');

			$store =  new store;
			$destinationPath = 'Items';

			if($request->hasFile('i_photo'))
                      {
                            $rules = ['i_photo' => 'mimes:jpg,png,jpeg'];
                             $validator = Validator::make(Input::all() , $rules);
                            if ($validator->fails())
                             {
                              $request->session()->flash('error', 'Please Upload Only JPG or PNG type image. File size should be less than 1 mb.');
                             
                             }
                            $extension = $request->file('i_photo')->getClientOriginalExtension();
                            $filenametostore = 'photo'.$i_name.'.'.$extension;
                    
                            $path =  $request->file('i_photo')->storeAs($destinationPath, $filenametostore,'public_uploads');

                           $store->i_image = $filenametostore;  
                          
                      }




			$store->i_name = $i_name;
			$store->i_description = $i_description;
			$store->i_count = $i_count;
			$store->i_price = $i_price;
			$store->i_type = $i_type;
			$store->save();

			$request->session()->flash('error','Item added Successfully ...');
			return view("addItem");

	}

}
