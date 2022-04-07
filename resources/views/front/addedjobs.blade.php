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

<div class="container" style="padding:50px; margin:50px;">
@if($jobs->isEmpty())
<h4>No Jobs Offered by ministry</h4>
@endif
@if($jobs->isNotEmpty())
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th> Image</th>
                    <th> Title</th>
                     <th> Ministry</th>
                     <th> Location</th>
                     <th> Type</th>                     
                     <th> Salary</th>
                     <th> Applicants</th>
                      <th> Edit</th>
                       <th>Delete</th>
                   </thead>
    <tbody>
     @foreach($jobs as $job)
    <tr>
    <td> <img src="/upload/ministry/{{$ministry->img}}" height="100px" width="100px" class="img-circle img-responsive"></td>
    <td>{{$job->title}}</td>
    <td>{{$ministry->name}}</td>
    <td>{{$job->location}}</td>
    <td>{{$job->type}}</td>
    <td>$ {{$job->salary}}</td>
    <td><a href="{{url('job/users',['id'=>$job->id])}}" class="btn btn-default pull-left btn-sm" >Applicants</a></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a class="btn btn-primary btn-xs" href="{{url('job/edit',['id'=>$job->id])}}" ><span class="glyphicon glyphicon-pencil"></span></a></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><a class="btn btn-danger btn-xs"  href="{{url('job/delete',['id'=>$job->id])}}" ><span class="glyphicon glyphicon-trash"></span></a></p></td>
    </tr>
    @endforeach
    </tbody>
        
</table>

    <div class="clearfix"> </div>
    <div class="clearfix"> </div>


@endif
</div>


@include('front.footer')
@endsection  