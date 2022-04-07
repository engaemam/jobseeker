@extends('front.master')
@section('title')
Seeking|Login
@endsection
@section('content')
@include('front.header')

<div class="container">
    <div class="single">  
	   <div class="col-md-4">
	   	  <div class="col_3">
	   	  	<h3>Todays Jobs</h3>
	   	  	<ul class="list_1">
	   	  		<li><a href="#">Department of Health - Western Australia</a></li>	
	   	  	</ul>
	   	  </div>
	   	  <div class="col_3">
	   	  	<h3>Jobs by Category</h3>
	   	  	<ul class="list_2">
	   	  		<li><a href="#">Railway Recruitment</a></li>						
	   	  	</ul>
	   	  </div>

	 </div>
	 <div class="col-md-5 single_right">
	 	   <div class="login-form-section">
                <div class="login-content">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="section-title">
                            <h3>LogIn to your Account</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-envelope"></i></span>
                                <input type="text" name="email" required="required" class="form-control" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" name="password" required="required" class="form-control " placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                        </div>

                    <div class="login-btn">
					   <input type="submit" value="Log in">
					</div>
                     </form>


                </div>
         </div>
   </div>
  <div class="clearfix"> </div>
 </div>
</div>

@include('front.footer')
    
@endsection         