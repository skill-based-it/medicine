<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Image;
use Hash;

class ProfileController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index($id){
		$data = DB::table("users")->where("id",Auth()->user()->id)->first();
		return view("admin.profile.index",compact('data'));
	}


	public function update(Request $r,$id)
	{
		DB::table("users")->update([
			'name'         => $r->name,
			'email'        => $r->email,
			'password'     => Hash::make($r->password),
			'set_password' => $r->password,
		]);


		$notification=array(
			'messege'=>'Profile Update Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 

	}




}
