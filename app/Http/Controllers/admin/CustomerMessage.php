<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CustomerMessage extends Controller
{
    public function index()
    {
        $data = DB::table('customer_messages')->orderBy('id','DESC')->get();
        return view('admin.customermessage.index',compact('data'));
    }

    public function deletemessage($id)
    {
        $delete = DB::table('customer_messages')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Customer Message Delete Done',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
