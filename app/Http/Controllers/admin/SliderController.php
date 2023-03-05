<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SliderController extends Controller
{
    public function index()
    {
        $data = DB::table('slider_informations')->get();
        return view('admin.slider.index',compact('data'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function insertSlider(Request $request)
    {
        // dd($request->all());
        $data = array(
            'index_no'=>$request->index_no,
            'title'=>$request->title,
            'button_link'=>$request->button_link,
            'button_name'=>$request->button_name,
            'vedio_link'=>$request->vedio_link,
            'status'=>$request->status,
            'image'=>'0',
        );

        $insert = DB::table('slider_informations')->insertGetId($data);

        if($insert)
        {
            $file = $request->file('image');

            if($file)
            {
                $imageName = rand().'.'.$file->getClientOriginalExtension();

                $file->move(base_path().'/backend/sliderImage/',$imageName);

                DB::table('slider_informations')->where('id',$insert)->update(['image'=>$imageName]);
            }

            $notification=array(
                'messege'=>'Slider Add  Done',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);

        }
        else
        {
            $notification=array(
                'messege'=>'Slider Add Failed',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function editSlider($id)
    {
        $data = DB::table('slider_informations')->where('id',$id)->first();
        return view('admin.slider.edit',compact('data'));
    }

    public function updateSlider(Request $request,$id){
        $data = array(
            'index_no'=>$request->index_no,
            'title'=>$request->title,
            'button_link'=>$request->button_link,
            'button_name'=>$request->button_name,
            'vedio_link'=>$request->vedio_link,
            'status'=>$request->status,
        );

        $update = DB::table('slider_informations')->where('id',$id)->update($data);

        $file = $request->file('image');

        if($file)
        {
            $pathImage = DB::table('slider_informations')->where('id',$id)->first();

            $path = base_path().'/backend/sliderImage/'.$pathImage->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($file)
        {
            $imageName = rand().'.'.$file->getClientOriginalExtension();

            $file->move(base_path().'/backend/sliderImage/',$imageName);

            DB::table('slider_informations')->where('id',$id)->update(['image'=>$imageName]);
        }


            $notification=array(
                'messege'=>'Slider Update Successfully',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);

    }

    public function deleteSlider($id)
    {
        $pathImage = DB::table('slider_informations')->where('id',$id)->first();

        $path = base_path().'/backend/sliderImage/'.$pathImage->image;

        if(file_exists($path))
        {
            unlink($path);
        }

        $delete = DB::table('slider_informations')->where('id',$id)->delete();

        $notification=array(
            'messege'=>'Slider Delete Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

}
