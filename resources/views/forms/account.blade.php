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
        <form action="{{route('account.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Mobile Number</label>
                <div class="col-md-9">
                    <input type="text" name="phone" path="lastName" id="lastName" class="form-control input-sm"/>
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
                <input type="date" name="dob" path="dob" max="{{Carbon\Carbon::today()->format('Y-m-d')}}" id="dob" class="form-control input-sm"/>
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
                    <select path="country" name="country" required id="country" class="form-control input-sm">
                        <option value="">Select Country</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burma">Burma</option>
                        <option value="Burundi">Burundi</option>
                        
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curacao">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czechia">Czechia</option>

                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>

                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>

                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana ">Guyana </option>
                       
                        <option value="Haiti">Haiti</option>
                        <option value="Holy See">Holy See</option>
                        <option value="Honduras">Hondurasr</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        
                        
                        <option value="Iceland">Iceland</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>

                        <option value="Gabon">Gabon</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Guyana ">Guyana </option>
                       
 

                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, North">Korea, North</option>
                        <option value="Korea, South">Korea, South</option>
                        
                        
                        <option value="Kosovo">Kosovo</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>

                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>

                        <option value="Macau">Macau</option>
                        <option value="Macedonia ">Macedonia </option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>

                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>

                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Norway">Norway</option>
                        
                        <option value="Oman">Oman</option>
                        
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palestinian Territories">Palestinian Territories</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>

                        <option value="Qatar">Qatar</option>

                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>

                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Sint Maarten">Sint Maarten</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>

                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>

                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Tuvalu">Tuvalu</option>

                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>

                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>

                        <option value="Yemen">Yemen</option>
                        
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>

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
                    <select path="country" name="experience" required id="country" required class="form-control input-sm">
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
                        <option value="Bsc">High School Degree</option>
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
                    <select path="country" name="gy" required id="country" class="form-control input-sm">
                        <option value="">Select</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option> 
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option> 
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option> 
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
                   <textarea cols="77" rows="6" value="" name="likes" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>
                    
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
                   <textarea cols="77" rows="6" value="" name="dislikes" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>
                    
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
                   <textarea cols="77" rows="6" value="" name="summary" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>
                    
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
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" value="Save Info" class="btn btn-primary btn-sm">
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