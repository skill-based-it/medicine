<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index(){

        return view("user.layouts.home");
    }

    public function about(){

    	 return view("user.layouts.about");
    }

    
    public function products(){

    	 return view("user.layouts.products");
    }


    public function support(){

    	 return view("user.layouts.support");
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


    public function productdetails(){

        return view("user.layouts.productdetails");
    }


}


