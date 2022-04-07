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
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" name="password" required="required" class="form-control " placeholder="Password">
                                </div>  
                              @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="textbox-wrap">
                            
                        <a href="" data-toggle="modal"  data-target="#forgot">forgot password</a>
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

<div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Forgot password</h4>
      </div>
      <div class="modal-body">
         <form action="{{ route('password.email')}}" method="post">
            {{csrf_field()}}
             <div class="form-group">
                <div class="col-md-12">
                <label class="mm" for="name">Email: </label>
                
                   <input class="form-control" id="mo"  name="email" type="text">        
                 </div>
             </div>
             <div class="clearfix"> </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Reset Password</button>
            </div>
            
         </form>
      </div>
      
    </div>
  </div>
</div>



@include('front.footer')
    
@endsection         

