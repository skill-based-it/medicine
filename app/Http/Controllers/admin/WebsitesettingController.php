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












	public function addcontact(){

		$data = DB::table("contacts")
		->first();

		return view("admin.settings.addcontact", compact('data'));
	}


	public function updatecontact(Request $r,$id){

		$data = array();
		$data['top_title']        = $r->top_title;
		$data['support_info']     = $r->support_info;
		$data['access_point']     = $r->access_point;

		$logimage                 = $r->file('image');


		if ($logimage) {

			$image_one_name= hexdec(uniqid()).'.'.$logimage->getClientOriginalExtension();
			Image::make($logimage)->save('backend/logo/'.$image_one_name,50);
			$data['image']='backend/logo/'.$image_one_name;
		}


		DB::table('contacts')->where('id', $id)->update($data);


		$notification=array(
			'messege'=>'Contact Update Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);

	}
















	public function addservices(){

		$data = DB::table("services")
		->first();

		return view("admin.settings.addservices", compact('data'));
	}


	public function updateservices(Request $r,$id){

		$data = array();
		$data['top_title']        = $r->top_title;
		$data['sales_service']    = $r->sales_service;
		$data['services1']        = $r->services1;
		$data['services2']        = $r->services2;
		$logimage                 = $r->file('image');


		if ($logimage) {

			$image_one_name= hexdec(uniqid()).'.'.$logimage->getClientOriginalExtension();
			Image::make($logimage)->save('backend/logo/'.$image_one_name,50);
			$data['services_image']='backend/logo/'.$image_one_name;
		}


		DB::table('services')->where('id', $id)->update($data);


		$notification=array(
			'messege'=>'Services Update Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);

	}

    public function uploadcorporatebrouchere(Request $request)
    {
        $files = $request->file('files');

        if($files)
        {
            $pathImage = DB::table('corporate_broucheres')->where('id',1)->first();

            $path = base_path().'/backend/corporateBrouchere/'.$pathImage->file_name;

            if(file_exists($path))
            {
                unlink($path);
            }


            $imageName = rand().'.'.$files->getClientOriginalExtension();

            $files->move(base_path().'/backend/corporateBrouchere/',$imageName);

            DB::table('corporate_broucheres')->where('id',1)->update(['file_name'=>$imageName]);
        }

        $notification=array(
			'messege'=>'Corporate Broucher Upload Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);
    }










}
