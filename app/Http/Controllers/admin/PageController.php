<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class PageController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index(){

		$data = DB::table("pages")->get();
		return view("admin.pages.index", compact('data'));
	}



	public function create(){

		return view("admin.pages.create");
	}

	public function insert(Request $r){

		DB::table('pages')->insert([
			'name' => $r->name,
			'slug' => str_replace(' ', '-', strtolower($r->name)),
			'details' => $r->details,
			'status' => $r->status,
			'date' => date('d-m-Y h:i'),
			'admin_id' => Auth()->user()->id,
			'seo_title' => $r->seo_title,
			'seo_description' => $r->seo_description,
			'seo_tag' => $r->seo_tag,
			'location' => $r->location,
			'order_by' => $r->order_by,


		]);

		$notification=array(
			'messege'=>'Page Add Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);
	}


	public function delete($id){

		DB::table("pages")->where('id',$id)->delete();
		$notification=array(
			'messege'=>'Page Delete Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);


	}


	public function edit($id){

		$data = DB::table("pages")->where('id',$id)->first();
		return view("admin.pages.edit", compact('data'));


	}


		public function update(Request $r,$id){

		DB::table('pages')->where('id',$id)->update([
			'name' => $r->name,
			'slug' => str_replace(' ', '-', strtolower($r->name)),
			'details' => $r->details,
			'status' => $r->status,
			'admin_id' => Auth()->user()->id,
			'seo_title' => $r->seo_title,
			'seo_description' => $r->seo_description,
			'seo_tag' => $r->seo_tag,
			'location' => $r->location,
			'order_by' => $r->order_by,

		]);

		$notification=array(
			'messege'=>'Page Update Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);
	}


}


