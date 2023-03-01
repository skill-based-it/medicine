<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Image;


class ProductsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}



	public function index(){


		$data = DB::table("products")
		->orderBy('products.id','DESC')
		->join('categories','categories.id','products.cat_id')
		->select("products.*",'categories.name')
		->get();
		return view("admin.products.index", compact('data'));
	}


	public function create(){

		return view("admin.products.create");
	}

	public function insert(Request $r){

		$data = array();
		$data['cat_id']                = $r->cat_id;
		$data['subcat_id']             = $r->subcat_id;
		$data['product_code']          = $r->product_code;
		$data['product_name']          = $r->product_name;
		$data['short_details']         = $r->short_details;
		$data['overview']              = $r->overview;
		$data['features']              = $r->features;
		$data['technology']            = $r->technology;
		$data['assay']                 = $r->assay;
		$data['seo_title']            = $r->seo_title;
		$data['seo_tag']              = $r->seo_tag;
		$data['seo_description']      = $r->seo_description;
		$data['faq']                 = $r->faq;
		$data['date']                 = date('Y-m-d');


		$image                        = $r->file('image');

		if ($image) {

			$image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			Image::make($image)->save('backend/productimage/'.$image_one_name,60);
			$data['image']='backend/productimage/'.$image_one_name;
		}


		DB::table('products')->insert($data);



		$notification=array(
			'messege'=>'Products Added Successfully Done',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);


	}




	public function delete($id){

		DB::table("products")->where('id',$id)->delete();

		$notification=array(
			'messege'=>'Products Delete Successfull',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);


	}


	public function edit($id){

		$data = DB::table("products")->where('id',$id)->first();
		return view("admin.products.edit", compact('data'));


	}


	public function update(Request $r,$id){

		$data = array();
		$data['cat_id']                = $r->cat_id;
		$data['subcat_id']             = $r->subcat_id;
		$data['product_code']          = $r->product_code;
		$data['product_name']          = $r->product_name;
		$data['short_details']         = $r->short_details;
		$data['overview']              = $r->overview;
		$data['features']              = $r->features;
		$data['technology']            = $r->technology;
		$data['assay']                 = $r->assay;
		$data['faq']                 = $r->faq;
		$data['seo_title']            = $r->seo_title;
		$data['seo_tag']              = $r->seo_tag;
		$data['seo_description']      = $r->seo_description;
		$data['date']                 = date('Y-m-d');

		$old_image                    = $r->old_image;
		$image                        = $r->file('image');

		if ($image) {

			

			$image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			Image::make($image)->save('backend/productimage/'.$image_one_name,60);
			$data['image']='backend/productimage/'.$image_one_name;
		}


		DB::table('products')->where('id',$id)->update($data);
		

		$notification=array(
			'messege'=>'Products Update Successfully Done',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);

	}

	
	public function getsubcat($id){

		$data = DB::table("subcategories")->where('status',1)->where('cat_id',$id)->get();

		if($data)
		{
			foreach($data as $d)
			{
				echo "<option value='".$d->id."'>".$d->name."</option>";
			}
		}

	}


}
