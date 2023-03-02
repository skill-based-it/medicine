<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $product = DB::table('products')->orderBy('id','DESC')->take(15)->get();
        $blogs = DB::table('blogs')->orderBy('id','DESC')->take(10)->get();
        return view("user.layouts.home",compact('product','blogs'));
    }

    public function about(){

    	 return view("user.layouts.about");
    }


    public function products(){
        $category = DB::table('categories')->where('status',1)->get();
        $subcategorey = DB::table('subcategories')->where('status',1)->get();
        $product = DB::table('products')->orderBy('id','DESC')->get();
    	 return view("user.layouts.products",compact('category','subcategorey','product'));
    }


    public function support(){

        $settings = DB::table('settings')->first();

    	 return view("user.layouts.support",compact('settings'));
    }


    public function careers(){

    	 return view("user.layouts.careers");
    }


    public function techoptimum(){

    	 return view("user.layouts.techoptimum");
    }


    public function contact(){

    	 return view("user.layouts.contact");
    }


    public function productdetails($product_code, $id){
        $data = DB::table('products')->where('id',$id)->first();
        $catName = DB::table('categories')->where('id',$data->cat_id)->first();
        return view("user.layouts.productdetails",compact('data','catName'));
    }

    public function pages($slug, $id)
    {
        $data = DB::table('pages')->where('id',$id)->first();
        return view('user.layouts.page_details',compact('data'));
    }

    public function categorey_product($cat_id, $sub_catid)
    {
        $category = DB::table('categories')->where('status',1)->get();
        $subcategorey = DB::table('subcategories')->where('status',1)->get();
        $product = DB::table('products')->where('subcat_id',$sub_catid)->get();
        return view('user.layouts.categorey_product',compact('category','subcategorey','cat_id','sub_catid','product'));

    }

    public function blogdetails($id)
    {
        $data = DB::table('blogs')->where('id',$id)->first();
        return view('user.layouts.blogdetails',compact('data'));
    }


}


