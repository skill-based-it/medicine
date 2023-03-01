<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Image;

class TechoptimumController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index(){

		$data = DB::table("techoptimums")
		->first();

		return view("admin.techoptimum.index", compact('data'));
	}


	public function update(Request $r,$id){

		$data = array();
		$data['details']        = $r->details;

		$logimage                 = $r->file('image');


		if ($logimage) {

			$image_one_name= hexdec(uniqid()).'.'.$logimage->getClientOriginalExtension();
			Image::make($logimage)->save('backend/techoptimum/'.$image_one_name,50);
			$data['image']='backend/techoptimum/'.$image_one_name;
		}


		DB::table('techoptimums')->where('id', $id)->update($data);


		$notification=array(
			'messege'=>'Techoptimum Update Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);

	}











	public function index2(){

		$data = DB::table("techoptimumscats")
		->get();
		return view("admin.techoptimum.index2", compact('data'));
	}



	public function create2(){

		return view("admin.techoptimum.create2");
	}



	public function insert2(Request $r){

		$data = array();
		$data['title']            = $r->title;
		$data['details']          = $r->details;
		$data['date']             = date('Y-m-d');


		$image                        = $r->file('image');

		if ($image) {

			$image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			Image::make($image)->save('backend/techoptimum/'.$image_one_name,60);
			$data['image']='backend/techoptimum/'.$image_one_name;
		}


		DB::table('techoptimumscats')->insert($data);


		$notification=array(
			'messege'=>'Techoptimum Added Successfully Done',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);


	}



	public function delete2($id){

		DB::table("techoptimumscats")->where('id',$id)->delete();

		$notification=array(
			'messege'=>'Techoptimum Delete Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);


	}




	public function edit2($id){

		$data = DB::table("techoptimumscats")->where('id',$id)->first();
		return view("admin.techoptimum.edit2", compact('data'));


	}


	public function update2(Request $r,$id){

		$data = array();
		$data['title']            = $r->title;
		$data['details']          = $r->details;
		$data['date']             = date('Y-m-d');

		$old_image                    = $r->old_image;
		$image                        = $r->file('image');

		if ($image) {


			$image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			Image::make($image)->save('backend/techoptimum/'.$image_one_name,60);
			$data['image']='backend/techoptimum/'.$image_one_name;
		}


		DB::table('techoptimumscats')->where('id',$id)->update($data);
		

		$notification=array(
			'messege'=>'Techoptimum Update Successfully Done',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);

	}





























	public function index3(){

		$data = DB::table("techoptimumsbooks")
		->join('techoptimumscats','techoptimumscats.id','techoptimumsbooks.cat_id')
		->select("techoptimumsbooks.*",'techoptimumscats.title as titles')
		->get();
		return view("admin.techoptimum.index3", compact('data'));
	}



	public function create3(){

		return view("admin.techoptimum.create3");
	}



	public function insert3(Request $r){

		$data = array();
		$data['title']            = $r->title;
		$data['cat_id']           = $r->cat_id;
		$image                    = $r->file('image');
		$image2                   = $r->file('file');

		if ($image) {

			$image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			Image::make($image)->save('backend/techoptimum/'.$image_one_name,60);
			$data['image']='backend/techoptimum/'.$image_one_name;
		}


		if ($image2) {

			$image_name= date('dmy_H_s_i');
			$ext=strtolower($image2->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='backend/techoptimum/';
			$image_url=$upload_path.$image_full_name;
			$success=$image2->move($upload_path,$image_full_name);
			$data['file']=$image_url;

		}


		DB::table('techoptimumsbooks')->insert($data);


		$notification=array(
			'messege'=>'Techoptimum Book Added Successfully Done',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);


	}



	public function delete3($id){

		DB::table("techoptimumsbooks")->where('id',$id)->delete();

		$notification=array(
			'messege'=>'Techoptimum Book Delete Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);


	}




	public function edit3($id){

		$data = DB::table("techoptimumsbooks")->where('id',$id)->first();
		return view("admin.techoptimum.edit3", compact('data'));


	}


	public function update3(Request $r,$id){

		$data = array();
		$data['title']            = $r->title;
		$data['cat_id']          = $r->cat_id;

		$image                        = $r->file('image');

		if ($image) {


			$image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			Image::make($image)->save('backend/techoptimum/'.$image_one_name,60);
			$data['image']='backend/techoptimum/'.$image_one_name;
		}


		DB::table('techoptimumsbooks')->where('id',$id)->update($data);
		

		$notification=array(
			'messege'=>'Techoptimum Book Update Successfully Done',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);

	}





















}
