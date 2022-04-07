@extends('front.master')
@section('title')
Seeking|Ministry
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
	<div class="col-md-4">
	   	  <div class="col_3">
        <?php 
        $ministries=App\Ministry::all();
        $tjobs=App\Job::whereDate('created_at', '=', Carbon\Carbon::today()->toDateString())->get();
        ?>
	   	  	<h3>Todays Jobs</h3>
            @if($tjobs->isEmpty())
            <p style="font-size:12px; padding-left:10px;">No Jobs offered today</p>
            @endif
            @if($tjobs->isNotEmpty())
	   	  	<ul class="list_1">
            @foreach($tjobs as $tjob)
                <li><a href="{{url('/job',['id'=>$tjob->id])}}">{{$tjob->title}}</a></li>         
            @endforeach	   	  	
            </ul>
            @endif
	   	  </div>
	   	  <div class="col_3">
	   	  	<h3>Jobs by Ministry</h3>
             @if($ministries->isEmpty())
            <p style="font-size:12px; padding-left:10px;">No Jobs offered today</p>
            @endif
            @if($ministries->isNotEmpty())
	   	  	<ul class="list_2">
            @foreach($ministries as $ministry)
                <li><a href="{{url('/ministry',['id'=>$ministry->id])}}" style="font-size:14px; padding-left:10px;">{{$ministry->name}}</a></li>
            @endforeach   
	   	  	</ul>
            @endif
	   	  </div>
	 </div>
@if(!$ministry22)
<h4>No Ministries Added yet</h4>
@endif
@if($ministry22)

	   <div class="col-md-5 single_right">
	      <div class="but_list">
		    <div class="tab_grid">
			    <div class="jobs-item with-thumb">
			    	<img style="border:green 1px solid; border-radius: 8px; margin-bottom: 30px;" height="400px" width="300px" src="/upload/ministry/{{$ministry22->img}}" class="img-responsive" alt=""/>
			    	<div style="height:auto; width:500px; border:green 1px solid; border-radius: 4px; padding: 10px; background-color: skyblue;" >
				    <div class="jobs_right">
						<div class="date_desc"><h6 class="title"><a href="">{{$ministry22->name}}</a></h6>
						  <span class="meta">{{$ministry22->address}}</span>
						</div>
						<div class="clearfix"> </div><br>
						<h4>Details: </h4>
						<p class="description">{{$ministry22->details}} </p></div>
                    </div>
                    @if(Auth::user()['role']==2)
                       <a href="{{url('ministry/edit',['id'=>$ministry22->id])}}" style="margin:20px;" class="btn btn-default pull-left btn-xs" >Edit</a>
                       <a href="{{url('ministry/delete',['id'=>$ministry22->id])}}" style="margin:20px;" class="btn btn-default pull-left btn-xs" >Delete</a>
					@endif
					<div class="clearfix"> </div>
				</div>
			 </div>
			 </div>
		  </div>
 </div>
 @endif
</div>

@include('front.footer')
@endsection  