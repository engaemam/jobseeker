<?php

namespace App\Http\Controllers;
use App\Http\Requests\JobRequest;
use Illuminate\Http\Request;
use App\Job;
use App\User;
use App\Ministry;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\auth;
use Carbon\Carbon;
use App\Application;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $jobs=Job::paginate(3);
        return view('front.jobs',compact(['jobs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $user_id=Auth::user()->ministry;
       $ministry_id=$user_id->id;
        $job=new Job();
        $job->title=$request->title;
        $job->details=$request->details;
        $job->location=$request->location;
        $job->requirements=$request->requirements;
        $job->salary=$request->salary; 
        $job->experience=$request->experience; 
        $job->ministry_id=$ministry_id; 
        $job->type=$request->type; 
        $job->save();
        return back()->with('message','Job Posted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job=Job::find($id);
        return view('front.job',compact(['job']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job=Job::find($id);
        return view('front.ejob',compact(['job']));

    }
    public function MyJobs()
    {
        $applications=Auth::user()->applications()->get();
         return view('front.userjobs',compact(['applications']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request)
    {
        $job=Job::find($request->jid);
        $job->title=$request->title;
        $job->details=$request->details;
        $job->location=$request->location;
        $job->requirements=$request->requirements;
        $job->salary=$request->salary; 
        $job->experience=$request->experience; 
        $job->type=$request->type; 
        $job->update();
        return view('front.job',compact(['job']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job=Job::find($id)->delete();
        return back()->with('success','Job successfully deleted');
    }
    public function Home()
    {   $jobs=Job::all()->random(3);
        $tjobs=Job::whereDate('created_at', '=', Carbon::today()->toDateString())->get();
     return view('welcome',compact(['jobs','tjobs']));
    }

    public function Apply($id)
    {   
        if(!Auth::user()){
       return redirect('/login');
        }
        $user_id=Auth::user()->id;
        $application=Application::where('user_id','=',$user_id)->where('job_id','=',$id)->get();
        $user=Auth::user();
        $account=$user->account()->get();
        if($application->isNotEmpty()){
           return back()->with('error',' you applied to this job before');
        }
        if($account->isEmpty()){
           return redirect('/account/create');
        }else{
            $app=new Application();
            $app->job_id=$id;
            $app->user_id=$user_id;
            $app->save();
             return back()->with('success',' You applied to this job successfully');

        }

    }

    public function search(Request $request)
    {   $jobs=Job::where('title','like','%'.$request->search.'%')->get();
        return view('front.search',compact(['jobs']));
    }
    public function posted(){
     $ministry=Auth::user()->ministry;
     //dd($ministry);
     $id=$ministry->id;
     $jobs=Job::where('ministry_id','=',$id)->get();
       // dd($jobs);
     return view('front.addedjobs',compact(['jobs','ministry']));
    }

    public function JobUsers($id){
        $job=Job::find($id);
        $applications=$job->applications()->get();


    return view('front.applicants',compact(['applications']));
    }



}
