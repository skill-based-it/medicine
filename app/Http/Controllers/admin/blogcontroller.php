<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Image;

class blogcontroller extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}



	public function index(){

		$data = DB::table("blogs")
		->get();
		return view("admin.blog.index", compact('data'));
	}



	public function create(){

		return view("admin.blog.create");
	}



	public function insert(Request $r){

		$data = array();
		$data['title']            = $r->title;
		$data['writer_name']      = $r->writer_name;
		$data['details']          = $r->details;
		$data['date']             = date('Y-m-d');


		$image                        = $r->file('image');

		if ($image) {

			$image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			Image::make($image)->save('backend/blogimage/'.$image_one_name,60);
			$data['image']='backend/blogimage/'.$image_one_name;
		}


		DB::table('blogs')->insert($data);


		$notification=array(
			'messege'=>'Blog Added Successfully Done',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);


	}



	public function delete($id){

		DB::table("blogs")->where('id',$id)->delete();

		$notification=array(
			'messege'=>'Blog Delete Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);


	}




	public function edit($id){

		$data = DB::table("blogs")->where('id',$id)->first();
		return view("admin.blog.edit", compact('data'));


	}


	public function update(Request $r,$id){

		$data = array();
		$data['title']            = $r->title;
		$data['writer_name']      = $r->writer_name;
		$data['details']          = $r->details;
		$data['date']             = date('Y-m-d');

		$old_image                    = $r->old_image;
		$image                        = $r->file('image');

		if ($image) {


			$image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			Image::make($image)->save('backend/blogimage/'.$image_one_name,60);
			$data['image']='backend/blogimage/'.$image_one_name;
		}


		DB::table('blogs')->where('id',$id)->update($data);
		

		$notification=array(
			'messege'=>'Blog Update Successfully Done',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);

	}

}
