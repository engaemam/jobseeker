@extends('front.master')
@section('title')
Seeking|Home
@endsection

@section('content')
@include('front.header')

<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Add Ministry</h2>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Ministry Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" path="lastName" id="lastName" class="form-control input-sm"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">address</label>
                <div class="col-md-9">
                    <input type="text" name="salary" path="lastName" id="lastName" class="form-control input-sm"/>
                </div>
            </div>
        </div>
             
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Ministry Admin</label>
                <div class="col-md-9">
                    <select path="country" name="user" id="country" required class="form-control input-sm">
                        <option value="">-- Select --</option>
                        <option value="0">0</option>
  
                    </select>
                    
                </div>
            </div>
        </div>      
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Details</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" value="" name="details" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>
                    
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Ministry Photo</label>
                <div class="col-md-9 sm_1">
                    <label class="btn-bs-file btn btn-sm btn-info">
                        <i class="fa fa-upload" aria-hidden="true"></i> Upload image
                        <input type="file" required name="img" />
                    </label>
                </div>
            </div>
        </div> 		
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" value="Save" class="btn btn-primary btn-sm">
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