@extends('front.master')
@section('title')
Seeking|Post Job
@endsection
@section('content')
@include('front.header')

<div class="container">
    <div class="single">  
	   <div class="form-container">
                    @if (session()->has('message'))
                    <div class="alert alert-success" align="center">
                    {{ session()->get('message') }} 
                    </div>
                    @endif      

                    <h2>Post Job</h2>
        <form action="{{route('job.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Job Title</label>
                <div class="col-md-9">
                    <input type="text" name="title" path="lastName" id="lastName" class="form-control input-sm"/>
                </div>
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Salary</label>
                <div class="col-md-9">
                    <input type="text" name="salary" required path="lastName" id="lastName" class="form-control input-sm"/>
                </div>
                @if ($errors->has('salary'))
                    <span class="help-block">
                        <strong>{{ $errors->first('salary') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>
                <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Location</label>
                <div class="col-md-9">
                    <input type="text" name="location" required path="lastName" id="lastName" class="form-control input-sm"/>
                </div>
                @if ($errors->has('location'))
                    <span class="help-block">
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Job Type</label>
                <div class="col-md-9">
                    <select path="type" name="type" required id="country" class="form-control input-sm">
                        <option value="">-- Select Type --</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>

                    </select>
                    
                </div>
                @if ($errors->has('type'))
                    <span class="help-block">
                        <strong>{{ $errors->first('type') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Work Experience</label>
                <div class="col-md-9">
                    <select path="country" name="experience" id="country" required class="form-control input-sm">
                        <option value="">-- Select --</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option> 
                        <option value="4">4</option> 
                        <option value="5">5</option> 
                        <option value="6">6</option> 
                        <option value="7">7</option> 
                        <option value="8">8</option> 
                        <option value="9">9</option> 
                        <option value="10">10</option> 
                        <option value="11">11</option>
                        <option value="12">12</option>  
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>      
                    </select>
                    
                </div>
                @if ($errors->has('experience'))
                    <span class="help-block">
                        <strong>{{ $errors->first('experience') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>      
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Details</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" value="" name="details" required> </textarea>
                    
                </div>
                @if ($errors->has('details'))
                    <span class="help-block">
                        <strong>{{ $errors->first('details') }}</strong>
                    </span>
                                    
                @endif
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Requirements</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" value="" name="requirements" required > </textarea>
                    
                </div>
                @if ($errors->has('requirements'))
                    <span class="help-block">
                        <strong>{{ $errors->first('requirements') }}</strong>
                    </span>
                                    
                @endif
            </div>
        </div> 
         			
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" value="Update Job" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
    </div>
 </div>
</div>
@include('front.footer')
@endsection  
