<nav class="navbar navbar" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="{{route('home.index')}}"><img src="/images/logo1.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
	            <li><a href="{{ route('job.index') }}">Jobs</a></li>
	            @if(Auth::user()['role']==1)
		        <li><a href="{{url('/createjob')}}">Post Job</a></li>
		            
		        @endif
		        @if(Auth::user()['role']==2)
		         <li><a href="{{url('/createministry')}}">Add Ministry</a></li>
                  <li><a href="{{url('/accounts')}}">Manage Users</a></li>
		        @endif
		        <li class="dropdown">
		            <a href="" class="dropdown-toggle" data-toggle="dropdown">Ministries<b class="caret"></b></a>
		            <ul class="dropdown-menu">
		            @foreach(App\Ministry::all() as $ministry)
			            <li><a href="{{url('/ministry/show',['id'=>$ministry->id])}}">{{$ministry->name}}</a></li>
			            @endforeach
		            </ul>
		        </li>
                         @if(!Auth::user())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                        @if(Auth::user())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                @if(Auth::user()->account)
                                    <li>
                                        <a href="{{ url('/account/edit',['id'=>Auth::user()->id]) }}">
                                           Edit Account
                                        </a>
                                    </li>   
                                    @endif                             
                                    <li>
                                        <a href="{{ url('/account/show') }}">
                                          My Account
                                        </a>
                                    </li>
                                    @if(Auth::user()['role']==0)
                                    <li>
                                        <a href="{{ url('user/application') }}">
                                            Jobs Applied
                                        </a>
                                    </li>
                                    @endif
                                    @if(Auth::user()['role']==1)
                                    <li>
                                        <a href="{{ url('/posted') }}">
                                            Posted Jobs
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>