@extends('front.master')
@section('title')
Seeking|Job Details
@endsection

@section('content')
@include('front.header')

<div class="container">
    <div class="single">  
        <div class="col-sm-10 follow_left">
                     @if (session()->has('success'))
                    <div class="alert alert-success" align="center">
                    {{ session()->get('success') }} 
                    </div>
                    @endif 

                    @if (session()->has('error'))
                    <div class="alert alert-danger" align="center">
                    {{ session()->get('error') }} 
                    </div>
                    @endif   
            <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="/upload/ministry/{{$job->ministry->img}}" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
			<div class="panel panel-default">
			 <div class="panel-body">
			 	<div class="date">{{$job->created_at->format('M') }} <span>{{$job->created_at->format('d') }}</span></div>
				<h6 class="title"><a href="">{{$job->title }}</a></h6>
				<span class="meta">{{$job->location }}</span>
				<h4 style="text-decoration:underline">+ Details: </h4>
				<p style="color:black; font-size:13px;">{{$job->details}}</p><br>
				<h4 style="text-decoration:underline">+ Requirements: </h4>
				<p style="color:black; font-size:13px;">{{$job->requirements}}</p><br>
				<p style="color:black; font-size:13px">+ Experience Needed: {{$job->experience}} Years</p><br>
				<p style="color:black; font-size:13px">+ Salary: $ {{$job->salary}}</p><br>
				<p style="color:black; font-size:13px">+ Type: {{$job->type}}</p><br>
                <hr>
                @if(Auth::user()['role']!=1 &&Auth::user()['role']!=2)
                <a href="{{url('job/apply',['id'=>$job->id])}}" class="btn btn-default pull-left" >Apply for this Job</a>
				@endif
	            
				</div>
			 </div>
			</div>		
				
				<div class="clearfix"> </div>
		    </div>
		</div>
	</div>
</div>		    

@include('front.footer')
@endsection  
