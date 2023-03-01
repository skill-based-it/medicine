<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class CategoriesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index(){

		$data = DB::table("categories")->get();
		return view("admin.categories.index", compact('data'));
	}



	public function create(){

		return view("admin.categories.create");
	}

	public function insert(Request $r){

		DB::table('categories')->insert([
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
			'messege'=>'Categories Add Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);
	}


	public function delete($id){

		try{
			$delete = DB::table("categories")->where('id',$id)->delete();
			$notification=array(
				'messege'=>'Categories Delete Successfull',
				'alert-type'=>'success'
			);
			return redirect()->back()->with($notification);
		}

		catch (\Illuminate\Database\QueryException $e) {
			$notification=array(
				'messege'   =>'This Category cannot be deleted! because it contains the another tables',
				'alert-type'=>'warning'
			);

			return redirect()->back()->with($notification); 
		}



		

		
		


	}


	public function edit($id){

		$data = DB::table("categories")->where('id',$id)->first();
		return view("admin.categories.edit", compact('data'));


	}


	public function update(Request $r,$id){

		DB::table('categories')->where('id',$id)->update([
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
			'messege'=>'Categories Update Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);
	}

}
