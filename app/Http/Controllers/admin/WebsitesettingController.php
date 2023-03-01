<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Image;


class WebsitesettingController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index(){

		$data = DB::table("settings")
		->first();

		return view("admin.settings.index", compact('data'));
	}


	public function update(Request $r,$id){

		$data = array();
		$data['website_name']        = $r->website_name;
		$data['address']             = $r->address;
		$data['email']               = $r->email;
		$data['phone']               = $r->phone;
		$data['fb']                  = $r->fb;
		$data['tw']                  = $r->tw;
		$data['in']                  = $r->in;
		$data['li']                  = $r->li;
		$data['te']                  = $r->te;
		$data['yo']                  = $r->yo;
		$data['meta_title']          = $r->meta_title;
		$data['meta_tag']            = $r->meta_tag;
		$data['meta_description']    = $r->meta_description;
		$data['comment_plugin']      = $r->comment_plugin;
		$data['copyright_text']      = $r->copyright_text;
		$data['developer_text']      = $r->developer_text;
		$data['maintenance_text']    = $r->maintenance_text;
		$data['maintenance_status']  = $r->maintenance_status;
		$data['about_us']            = $r->about_us;

		$logimage                    = $r->file('logo');
		$iconimage                   = $r->file('favicon');

		if ($logimage) {

			$image_one_name= hexdec(uniqid()).'.'.$logimage->getClientOriginalExtension();
			Image::make($logimage)->save('backend/logo/'.$image_one_name,50);
			$data['logo']='backend/logo/'.$image_one_name;
			
		}

		if ($iconimage) {

			$image_one_name= hexdec(uniqid()).'.'.$iconimage->getClientOriginalExtension();
			Image::make($iconimage)->save('backend/logo/'.$image_one_name,50);
			$data['favicon']='backend/logo/'.$image_one_name;
		}

		DB::table('settings')->where('id', $id)->update($data);



		$notification=array(
			'messege'=>'Website Setting Update Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);

	}




}
