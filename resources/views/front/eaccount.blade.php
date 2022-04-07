@extends('front.master')
@section('title')
Seeking|Home
@endsection

@section('content')
@include('front.header')

<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Account Info</h2>
        <form action="{{route('account.update')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Mobile Number</label>
                <div class="col-md-9">
                    <input type="text" name="phone" value="{{$account->phone}}" path="lastName" id="lastName" class="form-control input-sm"/>
                </div>
                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                                    
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="sex">Sex</label>
                <div class="col-md-9" class="form-control input-sm">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="sex" checked=""> Male
				        </label>
				        <label for="radio-02"  class="label_radio">
				            <input type="radio" name="sex"> Female
				        </label>
	                </div>
                    @if ($errors->has('sex'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sex') }}</strong>
                    </span>
                                    
                @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Date of birth</label>
                <div class="col-md-9">
                    <input type="date" name="dob" path="dob" id="dob" class="form-control input-sm"/>
                </div>
                @if ($errors->has('dob'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Country</label>
                <div class="col-md-9">
                    <select path="country" name="country" value="{{$account->country}}" required id="country" class="form-control input-sm">
                        <option value="">Select Country</option>
                        <option value="Egypt">Egypt</option>
                        <option value="Dubai">Dubai</option>
                        <option value="Italy">Italy</option>
                        <option value="Saudi Arabia">Saudi Arabia</option> 
                    </select>
                    
                </div>
                @if ($errors->has('country'))
                    <span class="help-block">
                        <strong>{{ $errors->first('country') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Work Experience</label>
                <div class="col-md-9">
                    <select path="country" name="experience" value="{{$account->experience}}" required id="country" required class="form-control input-sm">
                        <option value="">Select</option>
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
                <label class="col-md-3 control-lable" for="country">Education</label>
                <div class="col-md-9">
                    <select path="country" name="education" required id="country" class="form-control input-sm">
                        <option value="">Select</option>
                        <option value="Bsc">Bsc</option>
                        <option value="BTech">BTech</option>
                        <option value="Mca">Mca</option>
                        <option value="BCA">BCA</option>
                        <option value="Diploma">Diploma</option> 
                    </select>
               </div>
                @if ($errors->has('education'))
                    <span class="help-block">
                        <strong>{{ $errors->first('education') }}</strong>
                    </span>
                                    
                @endif               
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Graduation Year</label>
                <div class="col-md-9">
                    <select path="country" name="gy" value="{{$account->gy}}" required id="country" class="form-control input-sm">
                        <option value="">Select</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option> 
                    </select>
               </div>
                @if ($errors->has('gy'))
                    <span class="help-block">
                        <strong>{{ $errors->first('gy') }}</strong>
                    </span>
                                    
                @endif               
            </div>
        </div>        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Likes</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" value="{{$account->likes}}" name="likes" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>
                    
                </div>
                @if ($errors->has('likes'))
                    <span class="help-block">
                        <strong>{{ $errors->first('likes') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Dislikes</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" value="{{$account->dislikes}}" name="dislikes" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>
                    
                </div>
                @if ($errors->has('dislikes'))
                    <span class="help-block">
                        <strong>{{ $errors->first('dislikes') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Summary</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" value="{{$account->summary}}" name="summary" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>
                    
                </div>
                @if ($errors->has('summary'))
                    <span class="help-block">
                        <strong>{{ $errors->first('summary') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>  
        <div class="row">  
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Profile Picture</label>
                <div class="col-md-9 sm_1">
                    <label class="btn-bs-file btn btn-sm btn-info">
		                <i class="fa fa-upload" aria-hidden="true"></i> Upload image
		                <input type="file" required name="img" />
		            </label>
                </div>
                @if ($errors->has('img'))
                    <span class="help-block">
                        <strong>{{ $errors->first('img') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>   

        <div class="row">  
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Resume</label>
                <div class="col-md-9 sm_1">
                    <label class="btn-bs-file btn btn-sm btn-info">
		                <i class="fa fa-upload" aria-hidden="true"></i> Upload file
		                <input type="file" required name="resume" />
		            </label>
                </div>
                @if ($errors->has('resume'))
                    <span class="help-block">
                        <strong>{{ $errors->first('resume') }}</strong>
                    </span>
                                    
                @endif                
            </div>
        </div>  		
        <input type="hidden" name="aid" value="{{$account->id}}">	
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" value="Update Account" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
    </div>
 </div>
</div>
@include('front.footer')
    <style type="text/css">
.btn-bs-file{
    position:relative;
}
.btn-bs-file input[type="file"]{
    position: absolute;
    top: -9999999;
    filter: alpha(opacity=0);
    opacity: 0;
    width:0;
    height:0;
    outline: none;
    cursor: inherit;
}
</style>
@endsection  