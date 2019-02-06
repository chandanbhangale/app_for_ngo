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

class HomeController extends Controller
{
		public static function showEvents(Request $request)
	{
		$events = DB::table('events')->get();


		//return view('events')->with('events',$events);
	}

	public static function showDonateForm(Request $request)
	{
		//return view('register');
	}

	public static function postDonateForm(Request $request)
	{
		$d_name  = $request->input('');
		$donation_type = $request->input('');
		$donar_type = $request->inout('');
		$d_pan  = $request->input('');
		$d_photo = $request->input('');

		$donors = new donors;
		$donors->d_name = $d_name;
		$donors->donation_type =$donation_type;
		$donors->d_type = $donor_type;
		$donors->d_pan = $d_pan;
		$d_photo->d_phot = $d_photo;
		$donors->save(); 
		//return view('');

	}

	public static function showVolunteer(Request $request)
	{
		//return view('');
	}

	public static function postVolunteer(Request $request)
	{
		$v_name  = $request->input('');
		$v_email = $request->input('');
		$v_contact = $request->inout('');
		$v_designation  = $request->input('');
		$v_details = $request->input('');

		$volunteer = new volunteer;
		$volunteer->v_name = $v_name;
		$volunteer->v_email =$v_email;
		$volunteer->v_contact = $v_contact;
		$volunteer->v_designation = $v_designation;
		$v_details->v_details = $v_details;
		$v_details->save();

		$request->session()->flash('error','You will be soon contacted by us ...');
		//return view("");

	}

	public static function showTeachers(Request $request)
	{
		//return view('');
	}

	public static function postTeachers(Request $request)
	{
		$t_name  = $request->input('');
		$t_email = $request->input('');
		$t_contact = $request->inout('');
		$t_designation  = $request->input('');
		$t_photo = $request->input('')

		$teachers = new teachers;
		$teachers->t_name = $t_name;
		$teachers->t_email =$t_email;
		$teachers->t_contact = $t_contact;
		$teachers->t_designation = $t_designation;
		$v_details->photo = $t_photo;
		$v_details->save();

		$request->session()->flash('error','You will be soon contacted by us ...');
		//return view("");

	}

	public static function showStore(Request $request)
	{
		$users = DB::table('store')->get();
		//return view('register')->with('users',$users);
	}    

}
