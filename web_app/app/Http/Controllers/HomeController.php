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
use Storage;
use Validator;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }
    public function donate() {
        return view('donate');
    }
    public function getinvolved() {
        return view('getinvolved');
    }
    public function gallery() {
        return view('gallery');
    }
    public function events() {
        return view('events');
    }
    public function about() {
        return view('about');
    }

    public static function showEvents(Request $request)
	{
		$events = DB::table('events')->get();


		//return view('events')->with('events',$events);
	}

	public static function showDonateForm(Request $request)
	{
		$events = DB::select(DB::raw("SELECT * FROM `events` WHERE e_status = 'upcoming' "));
	
		return view('donar')->with('events',$events);
	}

	public static function postDonateForm(Request $request)
	{
		$d_name  = $request->input('d_name');
		$d_email = $request->input('d_email');
		$d_mobile = $request->input('d_mobile');
		$d_amount = $request->input('d_amount');
		$d_pan  = $request->input('d_pan');
		$donar_type = $request->input('donar_type');
		$donation_type = $request->input('donation_type');
		$d_photo = $request->input('d_photo');
		$d_event = $request->input('event');
		$d_city = $request->input('d_city');
		$d_state = $request->input('d_state');

		  $destinationPath = 'donors';
		$donors = new donors;

		 		if($request->hasFile('d_photo'))
                      {
                            $rules = ['d_photo' => 'mimes:jpg,png,jpeg'];
                             $validator = Validator::make(Input::all() , $rules);
                            if ($validator->fails())
                             {
                              $request->session()->flash('error', 'Please Upload Only JPG or PNG type image. File size should be less than 1 mb.');
                             
                             }
                            $extension = $request->file('d_photo')->getClientOriginalExtension();
                            $filenametostore = 'photo'.$d_name.'.'.$extension;
                    
                            $path =  $request->file('d_photo')->storeAs($destinationPath, $filenametostore,'public_uploads');


                          
							
                           $donors->d_photo = $filenametostore;  
                          
                      }

		$donors->d_name = $d_name;
		$donors->d_email = $d_email;
		$donors->d_mobile = $d_mobile;
		$donors->d_amount = $d_amount;
		$donors->donation_type =$donation_type;
		$donors->d_type = $donar_type;
		$donors->d_pan = $d_pan;
		$donors->d_city = $d_city;
		$donors->d_state = $d_state;
		if($donation_type == "Event")
		$donors->e_id =$d_event;
		$donors->save(); 
		return redirect()->route('donate');

	}

	public static function showVolunteer(Request $request)
	{
		return view('volunteer');
	}

	public static function postVolunteer(Request $request)
	{
		$v_name  = $request->input('v_name');
		$v_email = $request->input('v_email');
		$v_contact = $request->input('v_mobile');
		$v_designation  = $request->input('v_designation');
		$v_age = $request->input('v_age');
		$v_city = $request->input('v_city');
		$v_state = $request->input('v_state');
		$v_details = $request->input('v_details');
		//return $v_details;
		$volunteer = new volunteer;
		$volunteer->v_name = $v_name;
		$volunteer->v_email =$v_email;
		$volunteer->v_contact = $v_contact;
		$volunteer->v_designation = $v_designation;
		$volunteer->v_age = $v_age;
		$volunteer->v_city =$v_city;
		$volunteer->v_state = $v_state;
		$volunteer->v_details = $v_details;
		$volunteer->save();

		$request->session()->flash('error','You will be soon contacted by us ...');
		return view("volunteer");

	}

	public static function showTeachers(Request $request)
	{
		return view('teachers');
	}

	public static function postTeachers(Request $request)
	{
		$t_name  = $request->input('t_name');
		$t_email = $request->input('t_email');
		$t_contact = $request->input('t_mobile');
		$t_designation  = $request->input('t_designation');
		$t_age = $request->input('t_age');
		$t_city = $request->input('t_city');
		$t_state = $request->input('t_state');
		$t_details = $request->input('t_details');
		$t_photo = $request->input('t_photo');
		$t_photo = $request->input('t_resume');
		//return $t_photo;
		$teachers = new teachers;
		  $destinationPath = 'teacher';
		  	 if($request->hasFile('t_photo'))
                      {
                            $rules = ['t_photo' => 'mimes:jpg,png,jpeg'];
                             $validator = Validator::make(Input::all() , $rules);
                            if ($validator->fails())
                             {
                              $request->session()->flash('error', 'Please Upload Only JPG or PNG type image. File size should be less than 1 mb.');
                             
                             }
                            $extension = $request->file('t_photo')->getClientOriginalExtension();
                            $filenametostore = 'photo'.$t_name.'.'.$extension;
                    
                            $path =  $request->file('t_photo')->storeAs($destinationPath, $filenametostore,'public_uploads');


                          	
							
                            $teachers->photo = $filenametostore;  
                          
                      }

                      else
                        {
                        	$request->session()->flash('error','file error');
                             return view('teachers');
                        }
             		 if($request->hasFile('t_resume'))
                      {
                            $rules = ['t_resume' => 'mimes:pdf|max:1024'];
                             $validator = Validator::make(Input::all() , $rules);
                            if ($validator->fails())
                             {
                              $request->session()->flash('error', 'Please Upload Only JPG or PNG type image. File size should be less than 1 mb.');
                             
                             }
                            $extension = $request->file('t_resume')->getClientOriginalExtension();
                            $filenametostore = 'resume'.$t_name.'.'.$extension;
                    
                            $path =  $request->file('t_resume')->storeAs($destinationPath, $filenametostore,'public_uploads');


                          	
							
                            $teachers->resume = $filenametostore;  
                          
                      }

                      else
                        {
                        	$request->session()->flash('error','file error');
                             return view('teachers');
                        }

             
             $teachers->t_name = $t_name;
			 $teachers->t_email =$t_email;
			 $teachers->t_contact = $t_contact;
			 $teachers->t_designation = $t_designation;
			 $teachers->t_age = $t_age;
			 $teachers->t_city = $t_city;
			 $teachers->t_state = $t_state;
			 $teachers->t_details = $t_details;
			 $teachers->save();
             $request->session()->flash('error','You will be soon contacted by us ...');


		
		return redirect()->route('teachers');

	}

	public static function showStore(Request $request)
	{
		$users = DB::table('store')->get();
		//return view('register')->with('users',$users);
	}    

}
