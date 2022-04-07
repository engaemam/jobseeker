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
@if($users->isEmpty())
<h4>No Users registered</h4>
@endif
@if($users->isNotEmpty())
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                    <th> Image</th>
                    <th> Name</th>
                    <th> Email</th>
                    <th>Delete</th>
                   </thead>
    <tbody>
     @foreach($users as $user)
    <tr>
    @if(!$user->account)
    <td> <img src="/images/default.png" height="75px" width="75px" class="img-circle img-responsive"></td>
    @endif
    @if($user->account)
    <td> <img src="/upload/account/{{$user->account->img}}" height="100px" width="100px" class="img-circle img-responsive"></td>
    @endif    
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><a style="margin:20px;" class="btn btn-danger btn-xs"  href="{{url('account/delete',['id'=>$user->id])}}" ><span class="glyphicon glyphicon-trash"></span></a></p></td>
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