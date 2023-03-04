<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AboutUsController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


    public function create_aboutus()
    {
        $data = DB::table('about_uses')->where('id',1)->first();
        $images = DB::table('about_us_images')->where('about_us_id','1')->get();
        return view('admin.aboutus.create_aboutus',compact('data','images'));
    }

    public function aboutUsUpdateInfo(Request $request)
    {
        $data = array(
            'about_us_title'=>$request->about_us_title,
            'company_est'=>$request->company_est,
            'company_history'=>$request->company_history,
            'country_support'=>$request->country_support,
            'customers'=>$request->customers,
            'workforce'=>$request->workforce,
            'customer_support'=>$request->customer_support,
        );

        $update = DB::table('about_uses')->where('id',1)->update($data);

        $files = $request->file('image');

        if($files)
        {

            $pathImage = DB::table('about_us_images')->where('about_us_id','1')->get();

            foreach ($pathImage as $v)
            {
                $path = base_path().'/backend/aboutUsImage/'.$v->images;

                if(file_exists($path))
                {
                    unlink($path);
                }
            }

            DB::table('about_us_images')->where('about_us_id','1')->delete();


            for ($i=0; $i < count($files) ; $i++)
            {
                $imageName[$i] = rand().'.'.$files[$i]->getClientOriginalExtension();

                $files[$i]->move(base_path().'/backend/aboutUsImage/',$imageName[$i]);

                DB::table('about_us_images')->insert([
                    'about_us_id'=>'1',
                    'images'=>$imageName[$i],
                ]);
            }
        }

        $notification=array(
			'messege'=>'About Us Updated Done',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);
    }

    public function valuesInfo()
    {
        $data = DB::table('values')->where('id',1)->first();
        return view('admin.aboutus.values_info',compact('data'));
    }
    public function updateValuesInfo(Request $request)
    {
        $data = array(
            'title'=>$request->title,
            'description'=>$request->description,
        );

        $insert = DB::table('values')->where('id',1)->update($data);

        $files = $request->file('icon');

        if($files)
        {
            $pathImage = DB::table('values')->where('id',1)->first();

            $path = base_path().'/backend/valueIcon/'.$pathImage->icon;

            if(file_exists($path))
            {
                unlink($path);
            }

            $imageName = rand().'.'.$files->getClientOriginalExtension();

            $files->move(base_path().'/backend/valueIcon/',$imageName);

            DB::table('values')->where('id',1)->update([
                'icon'=>$imageName,
            ]);
        }

        $notification=array(
			'messege'=>'Values Data Updated Done',
			'alert-type'=>'success'
		);
		return redirect()->back()->with($notification);
    }

    public function createValueBox()
    {
        return view('admin.aboutus.create_value_box');
    }

    public function insertValueBox(Request $request)
    {
        $data = array(
            'values_title'=>$request->values_title,
            'values_description'=>$request->values_description,
            'image'=>'0',
        );

        $insert = DB::table('value_details')->insertGetId($data);

        if($insert)
        {
            $files = $request->file('image');

            if($files)
            {
                $imageName = rand().'.'.$files->getClientOriginalExtension();

                $files->move(base_path().'/backend/valueBoxIcon/',$imageName);

                DB::table('value_details')->where('id',$insert)->update(['image'=>$imageName]);
            }

            $notification=array(
                'messege'=>'Value Box Created Done',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
        else
        {
            $notification=array(
                'messege'=>'About Us Updated Failed',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function manageValueBox()
    {
        $data = DB::table('value_details')->get();
        return view('admin.aboutus.manage_value_box',compact('data'));
    }

    public function editValueBox($id)
    {
        $data = DB::table('value_details')->where('id',$id)->first();
        return view('admin.aboutus.edit_value_box',compact('data'));
    }

    public function updateValueBox(Request $request,$id)
    {
        $data = array(
            'values_title'=>$request->values_title,
            'values_description'=>$request->values_description,
        );

        $update = DB::table('value_details')->where('id',$id)->update($data);

        $files = $request->image;

        if($files)
        {
            $pathImage = DB::table('value_details')->where('id',$id)->first();

            $path = base_path().'/backend/valueBoxIcon/'.$pathImage->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($files)
        {
            $imageName = rand().'.'.$files->getClientOriginalExtension();

            $files->move(base_path().'/backend/valueBoxIcon/',$imageName);

            DB::table('value_details')->where('id',$id)->update(['image'=>$imageName]);
        }

            $notification=array(
                'messege'=>'Value Box Information Updated Done',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);

    }

    public function deleteValueBox($id)
    {
        $pathImage = DB::table('value_details')->where('id',$id)->first();

        $path = base_path().'/backend/valueBoxIcon/'.$pathImage->image;

        if(file_exists($path))
        {
            unlink($path);
        }

        $delete = DB::table('value_details')->where('id',$id)->delete();

        $notification=array(
            'messege'=>'Value Box Information Deleted Done',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function beliefSystem()
    {
        $data = DB::table('belief_systems')->where('id',1)->first();
        return view('admin.aboutus.belief_system',compact('data'));
    }

    public function updateBeliefSystem(Request $request)
    {
        $data = array(
            'belief_title'=>$request->belief_title,
            'description'=>$request->description,
            'mission'=>$request->mission,
            'vision'=>$request->vision,
        );

        $update = DB::table('belief_systems')->where('id',1)->update($data);

        $notification=array(
            'messege'=>'Belief System Update Done',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }

    public function founderMessage()
    {
        $data = DB::table('founder_messages')->where('id',1)->first();
        return view('admin.aboutus.founder_message',compact('data'));
    }

    public function updateFounderMessage(Request $request)
    {
        $update = DB::table('founder_messages')->where('id',1)->update(['message'=>$request->message]);

        $files = $request->file('founder_image');

        if($files)
        {
            $pathImage = DB::table('founder_messages')->where('id',1)->first();

            $path = base_path().'/backend/founderImage/'.$pathImage->founder_image;

            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($files)
        {
            $imageName = rand().'.'.$files->getClientOriginalExtension();

            $files->move(base_path().'/backend/founderImage/',$imageName);

            DB::table('founder_messages')->update(['founder_image'=>$imageName]);
        }

        $notification=array(
            'messege'=>'Founder Message Update Done',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);


    }

    public function chairmanMessage()
    {
        $data = DB::table('chairman_messages')->where('id',1)->first();
        return view('admin.aboutus.chairman_image',compact('data'));
    }

    public function updateChairmanMessage(Request $request)
    {
        $update = DB::table('chairman_messages')->where('id',1)->update(['message'=>$request->message]);

        $files = $request->file('chairman_image');

        if($files)
        {
            $pathImage = DB::table('chairman_messages')->where('id',1)->first();

            $path = base_path().'/backend/chairmanImage/'.$pathImage->chairman_image;

            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($files)
        {
            $imageName = rand().'.'.$files->getClientOriginalExtension();

            $files->move(base_path().'/backend/chairmanImage/',$imageName);

            DB::table('chairman_messages')->update(['chairman_image'=>$imageName]);
        }

        $notification=array(
            'messege'=>'Chairman Message Update Done',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function mdMessage()
    {
        $data = DB::table('md_messages')->where('id',1)->first();
        return view('admin.aboutus.md_message',compact('data'));
    }
    public function updateMdMessage(Request $request)
    {
        $update = DB::table('md_messages')->where('id',1)->update(['message'=>$request->message]);

        $files = $request->file('md_image');

        if($files)
        {
            $pathImage = DB::table('md_messages')->where('id',1)->first();

            $path = base_path().'/backend/mdImage/'.$pathImage->md_image;

            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($files)
        {
            $imageName = rand().'.'.$files->getClientOriginalExtension();

            $files->move(base_path().'/backend/mdImage/',$imageName);

            DB::table('md_messages')->update(['md_image'=>$imageName]);
        }

        $notification=array(
            'messege'=>'MD Message Update Done',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

}
