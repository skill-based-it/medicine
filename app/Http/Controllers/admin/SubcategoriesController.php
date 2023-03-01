<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class SubcategoriesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index(){

		$data = DB::table("subcategories")
		->join('categories','categories.id','subcategories.cat_id')
		->select('subcategories.*','categories.name as cat_name')
		->get();
		return view("admin.subcategories.index", compact('data'));
	}



	public function create(){

		$categories = DB::table("categories")->where('status',1)->get();
		return view("admin.subcategories.create", compact('categories'));
	}

	public function insert(Request $r){

		DB::table('subcategories')->insert([
			'cat_id' => $r->cat_id,
			'name' => $r->name,
			'slug' => str_replace(' ', '-', strtolower($r->name)),
			'status' => $r->status,
			'date' => date('d-m-Y h:i'),
			'admin_id' => Auth()->user()->id,
			'seo_title' => $r->seo_title,
			'seo_description' => $r->seo_description,
			'seo_tag' => $r->seo_tag,
			'order_by' => $r->order_by,

		]);

		$notification=array(
			'messege'=>'Subcategories Add Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);
	}


	public function delete($id){

		DB::table("subcategories")->where('id',$id)->delete();
		$notification=array(
			'messege'=>'Subcategories Delete Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);


	}


	public function edit($id){

		$categories = DB::table("categories")->where('status',1)->get();
		$data = DB::table("subcategories")->where('id',$id)->first();
		return view("admin.subcategories.edit", compact('data','categories'));


	}


	public function update(Request $r,$id){

		DB::table('subcategories')->where('id',$id)->update([
			'cat_id' => $r->cat_id,
			'name' => $r->name,
			'slug' => str_replace(' ', '-', strtolower($r->name)),
			'status' => $r->status,
			'admin_id' => Auth()->user()->id,
			'seo_title' => $r->seo_title,
			'seo_description' => $r->seo_description,
			'seo_tag' => $r->seo_tag,
			'order_by' => $r->order_by,

		]);

		$notification=array(
			'messege'=>'Subcategories Update Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);
	}
}
