@extends('front.master')
@section('title')
Seeking|Result
@endsection

@section('content')
@include('front.header')

<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
		    <form action="{{route('jobs.search')}}" method="post">
		    {{ csrf_field() }}
			 <input type="text" class="text" name="search" placeholder=" Enter Keyword(s)" required >
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
			 </form>
			</p>
           </div>
		</div>
   </div> 
</div>	

<div class="container">
    <div class="single">  
      <div class="col-sm-10 follow_left">
			<h3>Search Results</h3>
             <div class="follow_jobs">
			    @foreach($jobs as $job)
                <a href="{{url('/job',['id'=>$job->id])}}">
                    <img src="images/f1.jpg" alt="" class="img-circle img-responsive">
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

		    </div>
		</div>

		<div class="clearfix"> </div>
	</div>
</div>


@include('front.footer')
@endsection  