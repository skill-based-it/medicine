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

        $slider = DB::table('slider_informations')->where('status',1)->orderBy('index_no','ASC')->get();

        $data = DB::table('about_uses')->where('id',1)->first();

        return view("user.layouts.home",compact('product','blogs','slider','data'));
    }

    public function about(){

        $data = DB::table('about_uses')->where('id',1)->first();

        $aboutUsImages = DB::table('about_us_images')->where('about_us_id','1')->get();

        $values = DB::table('values')->where('id',1)->first();

        $valueBox = DB::table('value_details')->take(6)->orderBy('id','DESC')->get();

        $beliefSystem = DB::table('belief_systems')->where('id',1)->first();

        $founderMessage = DB::table('founder_messages')->where('id',1)->first();
        $chairmanMessage = DB::table('chairman_messages')->where('id',1)->first();
        $mdMessage = DB::table('md_messages')->where('id',1)->first();

    	 return view("user.layouts.about",compact('data','aboutUsImages','values','valueBox','beliefSystem','founderMessage','chairmanMessage','mdMessage'));
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
        $data = DB::table('about_uses')->where('id',1)->first();

        $carrers_info = DB::table('carrer_infos')->where('id',1)->first();

        $location = DB::table('opening_locations')->where('status',1)->get();
        $jobs = DB::table('opening_jobs')->where('status',1)->get();

        $openings = DB::table('publish_openings')->where('status',1)->get();

        $workplace = DB::table('work_places')->where('id',1)->first();

        $promisses = DB::table('carrer_promisses')->where('status',1)->get();

    	 return view("user.layouts.careers",compact('data','carrers_info','location','jobs','openings','workplace','promisses'));
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

    public function categoryprod($id)
    {
        $product = DB::table('products')->where('cat_id',$id)->get();
        return view('user.layouts.categoreyproduct',compact('product'));
    }

    public function messageSubmit(Request $request)
    {
        $data = array(
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'message'=>$request->message,
        );

        $insert = DB::table('customer_messages')->insert($data);

		return redirect()->back()->with('success','Your Message Is Successfully Sent');

    }


}


