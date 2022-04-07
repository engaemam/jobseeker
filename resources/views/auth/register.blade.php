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
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="section-title">
                            <h3>Register An Account</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                <input type="text" name="name" required="required" class="form-control" placeholder="Username">
                            </div>
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

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
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" name="password_confirmation" required="required" class="form-control " placeholder="Password Confirmation">
                                </div>                               
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    
                                @endif
                            
                        </div>                      
                    <div class="login-btn">
                       <input type="submit" value="Register">
                    </div>
                     </form>
</div>

                </div>
         </div>
   </div>
  <div class="clearfix"> </div>
 </div>
</div>

@include('front.footer')
    
@endsection         