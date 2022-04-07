@extends('front.master')
@section('title')
Seeking|Home
@endsection

@section('content')
@include('front.header')
<div class="container">
    <div class="single">  
        <div class="col-sm-10 follow_left">
            <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/a2.jpg" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">30 <span>Jul</span></div>
				<h6 class="title"><a href="#">Lorem Ipsum</a></h6>
				<span class="meta">Northland, New Zealand</span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p>Lorem</p>
                <hr>
                <a href="#" class="btn btn-default pull-left" data-toggle="modal" data-target="#applyModal">Apply for this Job</a>
	
	            
				</div>
				<div class="clearfix"> </div>
		    </div>
		</div>
	</div>
</div>		    

@include('front.footer')
@endsection  