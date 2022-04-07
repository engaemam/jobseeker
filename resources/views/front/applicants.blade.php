@extends('front.master')
@section('title')
Seeking|Home
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

<div class="container" style="padding:50px; margin:50px;" >
<div class="row"> 
    <div class="col-md-5 offset-md-2">
@if($applications->isEmpty())
<h4>No Applicants  for this job</h4>
@endif
@if($applications->isNotEmpty())
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>                   
                    <th> Name</th>
                    <th> Applicant Profile</th>
                   </thead>
    <tbody>
     @foreach($applications as $application)
    <tr>
    <td>{{App\user::find($application->user_id)->name}}</td>

    <td><a href="{{url('profile',['id'=>$application->user_id])}}" class="btn btn-default pull-left btn-sm" >Profile</a></td>
    
    </tr>
    @endforeach
    </tbody>
        
</table>

    <div class="clearfix"> </div>
    <div class="clearfix"> </div>


@endif
</div>
</div>
</div>

@include('front.footer')
@endsection  