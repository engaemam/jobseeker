@extends('front.master')
@section('title')
Seeking|Home
@endsection
@section('content')
@include('front.header')

<div class="banner">
    <div class="container">
        <div id="search_wrapper">
         <div id="search_form" class="clearfix">
         <h1 style="color: green;">Job search</h1>
           <form action="{{route('jobs.search')}}" method="post">
        {{ csrf_field() }}
       <input type="text" class="text" name="search" placeholder=" Enter Keyword(s)" required >
       <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
       </form>
         </div>
       </div>
   </div> 
</div>  


<div class="container">

@if($jobs->isNotEmpty())
     <div class="single">  
       <div class="col-md-4">
          <div class="col_3">
            <h3>Todays Jobs</h3>
            <ul class="list_1">
              @if($tjobs->isEmpty())
              <p style="font-size:12px; padding-left:10px;">No Jobs offered today</p>
              @endif
            @foreach($tjobs as $tjob)
                <li><a href="{{url('/job',['id'=>$tjob->id])}}">{{$tjob->title}}</a></li>         
            @endforeach          
            </ul>
          </div>
          <div class="col_3">
            <h3>Jobs by Ministry</h3>
            <ul class="list_2">
            @foreach(App\Ministry::all() as $ministry)
                <li><a href="{{url('/ministry',['id'=>$ministry->id])}}">{{$ministry->name}}</a></li>
            @endforeach    
            </ul>
          </div>

     </div>
       <div class="col-md-8">
          <div class="follow_jobs">
          @foreach($jobs as $job)
                <a href="{{url('/job',['id'=>$job->id])}}">
                    <img src="/upload/ministry/{{$job->ministry->img}}" alt="" height="100px" width="100px" class="img-circle img-responsive">
                    <div class="title">
                        <h5>{{$job->title}}</h5>
                        <p>{{$job->ministry->name}}</p>
                    </div>
                    <div class="data">
                        <span class="city"><i class="fa fa-map-marker"></i>{{$job->location}}</span>
                        <span @if($job->type=='Full Time') class="type full-time" @endif @if($job->type=='Part Time') class="type part-time" @endif >
                        <i  class="fa fa-clock-o"></i>{{$job->type}}</span>
                        <span class="sallary"><i class="fa fa-dollar"></i>{{$job->salary}}</span>
                    </div>
                </a>
        @endforeach
            <div class="clearfix"> </div>
           </div>
       </div>
       <div class="clearfix"> </div>
     </div>
     @endif
</div>

@include('front.footer')
    
@endsection
