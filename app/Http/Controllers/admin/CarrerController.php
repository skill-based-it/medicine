<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CarrerController extends Controller
{
    public function carrer_infos()
    {
        $data = DB::table('carrer_infos')->where('id',1)->first();
        return view('admin.carrer.carrer_infos',compact('data'));
    }

    public function carrerinfo_update(Request $request)
    {
        $data = array(
            'carrer_title'=>$request->carrer_title,
            'carrer_description'=>$request->carrer_description,
        );

        $update = DB::table('carrer_infos')->where('id',1)->update($data);

        $file = $request->file('image');

        if($file)
        {
            $pathImage = DB::table('carrer_infos')->where('id',1)->first();

            $path = base_path().'/backend/carrerInfoImage/'.$pathImage->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($file)
        {
            $imageName = rand().'.'.$file->getClientOriginalExtension();

            $file->move(base_path().'/backend/carrerInfoImage/',$imageName);

            DB::table('carrer_infos')->where('id',1)->update(['image'=>$imageName]);
        }

        $notification=array(
            'messege'=>'Carrer Information Update Done',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function createlocation()
    {
        return view('admin.carrer.create_location');
    }

    public function insertLocation(Request $request)
    {
        $data = array(
            'location_name'=>$request->location_name,
            'status'=>$request->status,
        );

        $insert = DB::table('opening_locations')->insert($data);

        $notification=array(
            'messege'=>'Location Created',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    public function manage_location()
    {
        $data = DB::table('opening_locations')->get();
        return view('admin.carrer.manage_location',compact('data'));
    }
    public function editlocations($id)
    {
        $data = DB::table('opening_locations')->where('id',$id)->first();
        return view('admin.carrer.editlocation',compact('data'));
    }

    public function updateLocation(Request $request,$id)
    {
        $data = array(
            'location_name'=>$request->location_name,
            'status'=>$request->status,
        );

        $insert = DB::table('opening_locations')->where('id',$id)->update($data);

        $notification=array(
            'messege'=>'Location Updated',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function deletelocation($id)
    {
        DB::table('opening_locations')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Location Deleted',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function opening_jobs()
    {
        return view('admin.carrer.create_jobs');
    }

    public function insertJobs(Request $request)
    {
        $data = array(
            'jobs_name'=>$request->jobs_name,
            'status'=>$request->status,
        );

        $insert = DB::table('opening_jobs')->insert($data);
        $notification=array(
            'messege'=>'Jobs Created',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }
    public function manage_jobs()
    {
        $data = DB::table('opening_jobs')->get();
        return view('admin.carrer.manage_jobs',compact('data'));
    }

    public function editjobs($id)
    {
        $data = DB::table('opening_jobs')->where('id',$id)->first();
        return view('admin.carrer.edit_jobs',compact('data'));
    }

    public function updateJobs(Request $request,$id)
    {
        $data = array(
            'jobs_name'=>$request->jobs_name,
            'status'=>$request->status,
        );

        $update = DB::table('opening_jobs')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Jobs Updated',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function deleteJobs($id)
    {
        DB::table('opening_jobs')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Jobs Deleted',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function publish_opening()
    {
        $location = DB::table('opening_locations')->where('status',1)->get();
        $jobs = DB::table('opening_jobs')->where('status',1)->get();
        return view('admin.carrer.publish_opening',compact('location','jobs'));
    }

    public function insertOpening(Request $request)
    {
        $data = array(
            'location_id'=>$request->location_id,
            'jobs_id'=>$request->jobs_id,
            'opening_title'=>$request->opening_title,
            'opening_description'=>$request->opening_description,
            'opening_amount'=>$request->opening_amount,
            'status'=>$request->status,
        );

        $insert = DB::table('publish_openings')->insert($data);

        $notification=array(
            'messege'=>'Opening Published',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function manageopening()
    {
        $data = DB::table('publish_openings')
                ->leftjoin('opening_locations','opening_locations.id','publish_openings.location_id')
                ->leftjoin('opening_jobs','opening_jobs.id','publish_openings.jobs_id')
                ->select('publish_openings.*','opening_locations.location_name','opening_jobs.jobs_name')
                ->get();
        return view('admin.carrer.manageopening',compact('data'));
    }

    public function editopenings($id)
    {
        $data = DB::table('publish_openings')->where('id',$id)->first();
        $location = DB::table('opening_locations')->where('status',1)->get();
        $jobs = DB::table('opening_jobs')->where('status',1)->get();
        return view('admin.carrer.editopening',compact('data','location','jobs'));
    }

    public function updateOpening(Request $request,$id)
    {
        $data = array(
            'location_id'=>$request->location_id,
            'jobs_id'=>$request->jobs_id,
            'opening_title'=>$request->opening_title,
            'opening_description'=>$request->opening_description,
            'opening_amount'=>$request->opening_amount,
            'status'=>$request->status,
        );

        $insert = DB::table('publish_openings')->where('id',$id)->update($data);

        $notification=array(
            'messege'=>'Opening Updated',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }

    public function deleteopening($id)
    {
        DB::table('publish_openings')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Opening Deleted',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function workplace()
    {
        $data = DB::table('work_places')->where('id',1)->first();
        $workimage = DB::table('work_place_images')->where('work_place_id',1)->get();
        return view('admin.carrer.workplace',compact('data','workimage'));
    }

    public function updateWorkplaceInfo(Request $request)
    {
        $data = array(
            'title'=>$request->title,
            'description'=>$request->description,
        );

        $update = DB::table('work_places')->where('id',1)->update($data);

        $files = $request->file('image');



        if($files)
        {
            $pathImage = DB::table('work_place_images')->where('work_place_id',1)->get();

            foreach($pathImage as $v)
            {
                $path = base_path().'/backend/workplaceImage/'.$v->images;

                if(file_exists($path))
                {
                    unlink($path);
                }
            }

            DB::table('work_place_images')->where('work_place_id',1)->delete();


            for ($i=0; $i < count($files) ; $i++)
            {
                $imageName[$i] = rand().'.'.$files[$i]->getClientOriginalExtension();

                $files[$i]->move(base_path().'/backend/workplaceImage/',$imageName[$i]);

                DB::table('work_place_images')->insert([
                    'work_place_id'=>1,
                    'images'=>$imageName[$i],
                ]);
            }
        }

        $notification=array(
            'messege'=>'Work Place INformation Updated',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }

    public function carrer_promisses()
    {
        return view('admin.carrer.carrer_promisses');
    }

    public function insertPromisses(Request $request)
    {
        $data = array(
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
            'icon'=>'0',
        );

        $insert = DB::table('carrer_promisses')->insertGetId($data);

        if($insert)
        {
            $file = $request->file('icon');

            if($file)
            {
                $imageName = rand().'.'.$file->getClientOriginalExtension();

                $file->move(base_path().'/backend/carrerPromisses/',$imageName);

                DB::table('carrer_promisses')->where('id',$insert)->update(['icon'=>$imageName]);
            }
        }

        $notification=array(
            'messege'=>'Promisses Upload Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }

    public function managepromisses(){
        $data = DB::table('carrer_promisses')->get();
        return view('admin.carrer.manage_promisses',compact('data'));
    }

    public function editPromisses($id)
    {
        $data = DB::table('carrer_promisses')->where('id',$id)->first();
        return view('admin.carrer.editpromisses',compact('data'));
    }

    public function updatepromisses(Request $request,$id)
    {
        $data = array(
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        );

        $update = DB::table('carrer_promisses')->where('id',$id)->update($data);

        $file = $request->file('icon');

        if($file)
        {
            $pathImage = DB::table('carrer_promisses')->where('id',$id)->first();
            $path = base_path().'/backend/carrerPromisses'.$pathImage->icon;
            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($file)
        {
            $imageName = rand().'.'.$file->getClientOriginalExtension();

            $file->move(base_path().'/backend/carrerPromisses/',$imageName);

            DB::table('carrer_promisses')->where('id',$id)->update(['icon'=>$imageName]);
        }

        $notification=array(
            'messege'=>'Promisses Update Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function deletepromisses($id)
    {
        $pathImage = DB::table('carrer_promisses')->where('id',$id)->first();
        $path = base_path().'/backend/carrerPromisses'.$pathImage->icon;
        if(file_exists($path))
        {
            unlink($path);
        }

        DB::table('carrer_promisses')->where('id',$id)->delete();

        $notification=array(
            'messege'=>'Promisses Delete Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function agent_review()
    {
        return view('admin.carrer.agent_review');
    }

    public function insertagent_review(Request $request)
    {
        $data = array(
            'description'=>$request->description,
            'agent_name'=>$request->agent_name,
            'designation'=>$request->designation,
            'location'=>$request->location,
            'image'=>'0',
            'status'=>$request->status
        );

        $insert = DB::table('agent_reviews')->insertGetId($data);

        if($insert)
        {
            $file = $request->file('image');

            if($file)
            {
                $imageName = rand().'.'.$file->getClientOriginalExtension();

                $file->move(base_path().'/backend/agentImage/',$imageName);

                DB::table('agent_reviews')->where('id',$insert)->update(['image'=>$imageName]);
            }

        }

        $notification=array(
            'messege'=>'Agent Review Create Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }

    public function manageagent_review()
    {
        $data = DB::table('agent_reviews')->get();
        return view('admin.carrer.manageagent_review',compact('data'));
    }

    public function editagentReviews($id)
    {
        $data = DB::table('agent_reviews')->where('id',$id)->first();
        return view('admin.carrer.editagent_reviews',compact('data'));
    }

    public function updateagent_review(Request $request,$id)
    {
        $data = array(
            'description'=>$request->description,
            'agent_name'=>$request->agent_name,
            'designation'=>$request->designation,
            'location'=>$request->location,
            'status'=>$request->status
        );

        $update = DB::table('agent_reviews')->where('id',$id)->update($data);

        $file = $request->file('image');

        if($file)
        {
            $pathImage = DB::table('agent_reviews')->where('id',$id)->first();

            $path = base_path().'/backend/agentImage/'.$pathImage->image;

            if(file_exists($path))
            {
                unlink($path);
            }

        }

        if($file)
        {
            $imageName = rand().'.'.$file->getClientOriginalExtension();

            $file->move(base_path().'/backend/agentImage/',$imageName);

            DB::table('agent_reviews')->where('id',$id)->update(['image'=>$imageName]);
        }


        $notification=array(
            'messege'=>'Agent Review Update Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);


    }

    public function deleteagent_review($id)
    {
        $pathImage = DB::table('agent_reviews')->where('id',$id)->first();

        $path = base_path().'/backend/agentImage/'.$pathImage->image;

        if(file_exists($path))
        {
            unlink($path);
        }

        $delete = DB::table('agent_reviews')->where('id',$id)->delete();

        $notification=array(
            'messege'=>'Agent Review Delete Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

}
