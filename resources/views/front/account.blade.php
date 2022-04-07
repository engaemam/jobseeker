@extends('front.master')
@section('title')
Seeking|Home
@endsection
@section('content')
@include('front.header')
<div class="container" style="margin:100px;">
	<div class="row">
       	  <div class="col-md-6 testimonial">
       	  <h4>{{Auth::user()->name}} Account</h4>
       	  <?php $accountg=$account->first();?>
            <img src="/upload/account/{{$accountg->img}}" class="img-circle" height="100px"> 
			<div class="author">

				<p>{{$accountg->summary}}</p>
				<h4 style="text-decoration:underline">GY & Country:</h4> <p>{{$accountg->gy}}, Country:{{$accountg->country}}</p><br>

				<h4 style="text-decoration:underline">Likes:</h4>  <p>{{$accountg->likes}}</p><br>
				<h4 style="text-decoration:underline">Dislikes:</h4>  <p>{{$accountg->dislikes}}</p><br>
				<h4 style="text-decoration:underline">Phone:</h4>  <p>{{$accountg->phone}}</p><br>
			 <a href="{{url('/resume',['id'=>$accountg->resume])}}" class="btn btn-default pull-left" target="_blank">View Resume</a>

			</div>
		  </div>
	</div>
</div>
@include('front.footer')
@endsection  