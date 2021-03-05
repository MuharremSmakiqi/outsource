@extends('layouts.app-mini')
@section('content') 
<!-- Pending Requests Card Example -->
    @php
    $profile_complited = DB::table('abouts')
    ->where('user_id', '=', Auth::user()->id)
    ->first()
    @endphp
    @if (is_null($profile_complited)) 
    
        <link href="/assets/wizard/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/assets/wizard/css/gsdk-bootstrap-wizard.css" rel="stylesheet" /> 
        <link href="/assets/wizard/css/demo.css" rel="stylesheet" />   
        <div class="container" style="margin-top: -4%">
            <div class="row">
            <div class="col-sm-8 col-sm-offset-2"> 
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="green" id="wizard">
                    <form action="{{ route('complet-profile.store') }}" method="POST" name="profile" enctype="multipart/form-data">
                        @csrf
                            <div class="wizard-header">
                                <h3>
                                <b>COMPLETE</b> YOUR PROFILE <br>
                                <p>This information client will see on your profile.</p>
                                </h3>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#location" data-toggle="tab">ABOUT</a></li>
                                    <li><a href="#type" data-toggle="tab">SKILLS</a></li>
                                    <li><a href="#facilities" data-toggle="tab" id="btnGetValue">EDUCATION</a></li>
                                    <li><a href="#description" data-toggle="tab">WORK</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="location">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text">Let’s start with some basic details</h4>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                            <br>
                                             <input required name="country" type="text" class="form-control"  placeholder="Country where you live in:">
                                            {{-- <select required name="country" class="form-control">
                                            <option hidden value="" hidden>Country where you live in:</option>
                                                    <option  disabled> ... </option> 
                                                @foreach ($countries as $c )
                                                <option value="{{$c->country}}">{{$c->country}}</option>
                                                @endforeach
                                                    <option  disabled> ... </option> 
                                            </select> --}}
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group"> <br>
                                            <input required name="city" type="text" class="form-control" id="exampleInputEmail1" placeholder="City where you live?">
                                        </div>
                                    </div>
                               
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group"> 
                                            <select required  name="monthly" class="form-control">
                                                <option hidden value="" hidden>Net monthly salary expectation:</option>
                                                <option  disabled> ... </option> 
                                                <option value="0 - 500">€0 - €500</option>
                                                <option value="500 - 1000">€501 - €1000</option>
                                                <option value="1001 - 1500"> €1001 -€1500</option>
                                                <option value="1501 - 2000">€1501 - €2000 </option>
                                                <option value="2001">€2001 and Above</option> 
                                                <option  disabled> ... </option> 
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group"> 
                                            <div class="input-group">
                                                <input required  name="phone" type="number" class="form-control" placeholder="Phone number: 0044123456">
                                                <span class="input-group-addon"><i class="fas fa-phone-square"></i></span>
                                                <input type="hidden" name="gender" value="NotDefined">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group"> 
                                            <div class="input-group">
                                                <input required  name="lastPosition" type="text" class="form-control" placeholder="Current or last position employed">
                                                <span class="input-group-addon"><i class="fas fa-briefcase"></i></span>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="col-sm-5 ">
                                        <div class="form-group"> 
                                                <select required  name="available" class="form-control">
                                                    <option hidden value="" hidden>When can you start?</option>
                                                    <option  disabled> ... </option> 
                                                    <option value="immediately">immediately</option>
                                                    <option value="1 weeks notice"> 1 weeks notice</option>
                                                    <option value="2 weeks notice"> 2 weeks notice</option>
                                                    <option value="1 months notice"> 1 months notice</option>
                                                    <option value="more than a months notice"> more than a months notice</option> 
                                                    <option  disabled> ... </option> 
                                                </select>
                                        </div>
                                    </div>    
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group"> 
                                                <select required  name="english" class="form-control">
                                                    <option hidden value="" hidden>English Proficiency</option>
                                                    <option  disabled> ... </option> 
                                                    <option value="basic">Basic</option>
                                                    <option value="conversational"> Conversational </option>
                                                    <option value="fluent"> Fluent </option>
                                                    <option value="native"> Native </option> 
                                                    <option  disabled> ... </option> 
                                                </select>
                                        </div>
                                    </div>    
                                    <div class="col-sm-5">
                                        <div class="form-group">  
                                                <div class="input-group">
                                                <input required  name="otherLanguages" type="text" class="form-control" placeholder="Other languages I speak fluently">
                                                <span class="input-group-addon"><i class="fas fa-language"></i></span>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">  
                                            <div class="form-group"> 
                                                <textarea required  name="bio" rows="7" 
                                                placeholder="Professional Overview. Please Highlight your top skills, experience, and interests. This is one of the first things clients will see on your profile." 
                                                class="form-control"></textarea>
                                                
                                                <small>Characters left <span class="badge badge-danger" id="myspan" style="background-color: red">3000</span></small>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="tab-pane" id="type"> 
                                    <div class="row " id="general-content">                                          
                                        <div class="container ml-5">   
                                            <div class="row">
                                            <div class="col-md-4 pt-4">Add main service you offer <small class="text-danger">(One)</small>
                                                <select required name="servicesM" class="form-control div-toggle" data-target=".my-info-1" id="select_id">
                                                    <option disabled="" selected="">- Choose -</option>
                                                    <option value="Desktop Dev" data-show=".conten1">1. Desktop Dev</option>
                                                    <option value="Web Frontend / Backend Dev" data-show=".conten2">2. Web Frontend / Backend Dev</option> 
                                                    <option value="Mobile Dev" data-show=".conten3">3. Mobile Dev</option>
                                                    <option value="Database" data-show=".conten4">4. Database </option>
                                                    <option value="Creativity & 3D Design" data-show=".conten5">5. Creativity & 3D Design</option>
                                                    <option value="IT & Networking" data-show=".conten6">6. IT & Networking</option> 
                                                    <option value="Financial and Accounting" data-show=".conten7">7. Financial & Accounting</option> 
                                                    <option value="Admin" data-show=".conten8">8.Admin</option> 
                                                    <option value="contenOther" data-show=".contenOther">9.Other</option> 
                                                    <option disabled="" >...</option>
                                                </select>    
                                            </div>
                                            <div class="col-md-4 pt-4" name="options" id="options">Add other skills <small class="text-danger">(Multiple) </small>
                                                    <select  name="services" class="form-control div-toggle" data-target=".my-info-1" id="select_id2">
                                                        <option disabled="" selected="">- Choose -</option>
                                                        <option value="general" data-show=".conten1">1. Desktop</option>
                                                        <option value="web" data-show=".conten2">2. Web </option>
                                                        <option value="mobile" data-show=".conten3">3. Mobile </option>
                                                        <option value="database" data-show=".conten4">4. Database </option>
                                                        <option value="design" data-show=".conten5">5. Creativity & 3D Design</option>
                                                        <option value="it" data-show=".conten6" >6. IT & Networking</option> 
                                                        <option value="Financial" data-show=".conten7">7. Financial & Accounting</option> 
                                                        <option value="Admin" data-show=".conten8">8.Admin</option> 
                                                        <option value="contenOther" data-show=".contenOther">9.Other</option> 
                                                        <option disabled="" >...</option>
                                                    </select>  
                                            </div>
                                            <div class="col-md-4 pt-4">Overall Experience Level   
                                                <select required  name="level" class="form-control div-toggle" >
                                                    <option disabled="" selected="">- Choose -</option>
                                                    <option value="Junior">Junior</option>
                                                    <option value="Mid">Mid</option>
                                                    <option value="Senior">Senior</option>
                                                    <option value="Expert">Expert</option> 
                                                    <option disabled="" >...</option>
                                                </select>   
                                            </div>
                                                <div class="col-md-12 d-flex justify-content-center pt-3"> 
                                                     <button type="button" class="btn btn-primary btn-sm resetService"><i class="fas fa-undo"></i></button>
                                                </div>
                                            </div>
                                            <hr> 
                                            <p class="pt-2"></p>
                                            {{-- This filed holds other skills that are not in the list --}} 
                                            <div id="00" class="contenOther hide">
                                            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Other <small> (Skills)</small></h6>
                                            <a  class="btn OtherDev">
                                                <i class="fas fa-trash-alt text-danger fa-1x"></i>  
                                            </a> 
                                            </div> 
                                            <div class="row col-md-offset-0 py-5 pr-4">   
                                                 <input required name="otherSkills" type="text" class="form-control" id="otherSkills00" placeholder="Add skills that are not listed. Please devide each skill by comma">  
                                            </div>  
                                            </div>  

                                            <div id="1" class="conten1 hide"> 
                                            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">1. General <small> (General / Desktop)</small> </h6> 
                                            <a  class="btn generalDev">
                                                <i class="fas fa-trash-alt text-danger fa-1x"></i>  
                                            </a> 
                                            </div> 
                                            <div class="row col-md-offset-2 mt-3"> 
                                                @foreach ($general->chunk(4) as $languages )  
                                                <div id="col-md-3 " > 
                                                @foreach ($languages as $lang)
                                                <label class="customcheck">{{$lang->name}}
                                                    <input type="checkbox" value="{{$lang->name}}" name="wpmm[]"/>
                                                    <span class="checkmark"></span>
                                                    </label>  
                                                @endforeach
                                                </div>  
                                                <div  style="padding-left: 155px"></div>
                                                @endforeach           
                                            </div>  
                                            </div>  
                                              
                                        <div id="2" class="conten2 hide"> 
                                        <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">2. Web <small>(Frontend &|| Backend)</small></h6> 
                                            <a  class="btn webDev">
                                                <i class="fas fa-trash-alt text-danger fa-1x"></i>  
                                            </a> 
                                        </div> 
                                        <div class="row col-md-offset-2  mt-3">
                                            @foreach ($web->chunk(10) as $languages )  
                                            <div  >
                                                @foreach ($languages as $lang)
                                                    <label class="customcheck">{{$lang->name}}
                                                    <input value="{{$lang->name}}" type="checkbox" name="wpmm[]"/>
                                                    <span class="checkmark"></span>
                                                    </label>   
                                                @endforeach
                                            </div>  
                                            <div  style="padding-left: 120px"></div>  
                                            @endforeach  
                                        </div>  
                                        </div>  
                                        <div id="3" class="conten3 hide">
                                              <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">3. Mobile <small>(Native / Cross-platform)</small> </h6> 
                                            <a  class="btn mobileDev">
                                                <i class="fas fa-trash-alt text-danger fa-1x"></i>  
                                            </a>
                                        </div>  
                                        <div class="row col-md-offset-2  mt-3">  
                                            @foreach ($mobile->chunk(3) as $languages )  
                                            <div  > 
                                            @foreach ($languages as $lang)
                                                    <label class="customcheck">{{$lang->name}}
                                                    <input value="{{$lang->name}}" type="checkbox" name="wpmm[]"/>
                                                    <span class="checkmark"></span>
                                                    </label>   
                                                @endforeach  
                                            </div>   
                                            <div  style="padding-left: 110px"></div>
                                            @endforeach        
                                        </div> 
                                        </div> 
                                        <div id="4" class="conten4 hide">
                                              <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">4. Database <small>(Database SQL OR NoSQL)</small></h6> 
                                            <a  class="btn databaseDev">
                                                <i class="fas fa-trash-alt text-danger fa-1x"></i>  
                                            </a>  
                                        </div>  
                                        <div class="row col-md-offset-2  mt-3"> 
                                            @foreach ($database->chunk(5) as $languages )   
                                            <div  >  
                                                @foreach ($languages as $lang)
                                                    <label class="customcheck">{{$lang->name}}
                                                    <input value="{{$lang->name}}" type="checkbox" name="wpmm[]"/>
                                                    <span class="checkmark"></span>
                                                    </label>   
                                                @endforeach  
                                            </div>   
                                            <div  style="padding-left: 110px"></div>
                                            @endforeach       
                                        </div>  
                                        </div> 
                                        <div id="5" class="conten5 hide">
                                        <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">5. Creativity & 3D Design </h6> 
                                            <a  class="btn 3dDev">
                                                <i class="fas fa-trash-alt text-danger fa-1x"></i>  
                                            </a>  
                                        </div>  
                                        <div class="row col-md-offset-2  mt-3">  
                                            @foreach ($design->chunk(5) as $languages ) 
                                            <div  > 
                                                @foreach ($languages as $lang)
                                                    <label class="customcheck">{{$lang->name}}
                                                    <input value="{{$lang->name}}" type="checkbox" name="wpmm[]"/>
                                                    <span class="checkmark"></span>
                                                    </label>   
                                                @endforeach  
                                            </div>   
                                            <div  style="padding-left: 80px"></div>
                                            @endforeach            
                                        </div>  
                                        </div>  
                                        <div id="6" class="conten6 hide">
                                        <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">6. IT & Networking <small>(Networking)</small></h6> 
                                            <a  class="btn itDev">
                                                <i class="fas fa-trash-alt text-danger fa-1x"></i>  
                                            </a>
                                        </div>  
                                        <div class="row col-md-offset-2  mt-3">  
                                            @foreach ($it->chunk(2) as $languages ) 
                                                <div  > 
                                                    @foreach ($languages as $lang)
                                                    <label class="customcheck">{{$lang->name}}
                                                    <input value="{{$lang->name}}" type="checkbox" name="wpmm[]"/>
                                                    <span class="checkmark"></span>
                                                    </label>   
                                                @endforeach  
                                                </div>   
                                                <div  style="padding-left: 50px"></div>
                                                @endforeach       
                                        </div>  
                                        </div> 
                                        <div id="8" class="conten8 hide">
                                        <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">8. Administration <small>(Admin)</small></h6> 
                                            <a  class="btn itDev">
                                                <i class="fas fa-trash-alt text-danger fa-1x"></i>  
                                            </a>
                                        </div>  
                                        <div class="row col-md-offset-2  mt-3 mr-4">   
                                            <div class="alert alert-primary" role="alert">
                                               Please only select the skills/programs that you are at 'expert' level
                                            </div>
                                            @foreach ($adminc->chunk(9) as $languages ) 
                                                <div > 
                                                    @foreach ($languages as $lang) 
                                                        <label class="customcheck">{{$lang->name}}
                                                        <input value="{{$lang->name}}" type="checkbox" name="wpmm[]"/>
                                                        <span class="checkmark"></span>
                                                        </label>     
                                                @endforeach    
                                                        </div>  
                                                <div  style="padding-left: 65px"></div>
                                                @endforeach  
                                            <div class=" col-md-12   py-3  ">   
                                                <label for="">If you selected content writing</label>
                                                 <input name="typingSkills" type="text" class="form-control" id="typingSkills" placeholder="Typing skills [please indicate the WPM] you can achieve">   
                                            </div>      
                                            <div class=" col-md-12   pb-5  ">    
                                                <input name="otherAdminSkills" type="text" class="form-control" id="otherAdminSkills" placeholder="Others [please list only programs you are ‘expert’ in] ">  
                                            </div>      
                                        </div>  
                                        </div> 
                                    </div>  
                                    </div> 
                                </div>
                                <div class="tab-pane" id="facilities">
                                    <h4 class="info-text">Education, Please start with the most recent.</h4>
                                    <div class="row" >
                                        <div class="col-sm-4 ">
                                        <div class="form-group"> 
                                            <div class="input-group">
                                                <input name="university" type="text" class="form-control" placeholder="School / University">
                                                <span class="input-group-addon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group"> 
                                            <div class="input-group">
                                                <input name="areaofstudy"  type="text" class="form-control" placeholder="Area of study / Research">
                                                <span class="input-group-addon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group"> 
                                            <div class="input-group">
                                                <input name="degree"  type="text" class="form-control" placeholder="Degree / Title">
                                                <span class="input-group-addon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-group mt-3"> 
                                        <select name="monthES" class="form-control">
                                            <option disabled="" selected="">From Month</option>
                                            <option value="01">01</option> 
                                            <option value="02">02</option> 
                                            <option value="03">03</option> 
                                            <option value="04">04</option> 
                                            <option value="05">05</option> 
                                            <option value="06">06</option> 
                                            <option value="07">07</option> 
                                            <option value="08">08</option> 
                                            <option value="09">09</option> 
                                            <option value="10">10</option> 
                                            <option value="11">11</option> 
                                            <option value="12">12</option> 
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-group mt-3"> 
                                        <input name="yearES"  type="number" class="form-control" placeholder="From Year" >
                                    </div>
                                    </div>
                                    <div class="col-md-3 ">
                                    <div class="form-group mt-3"> 
                                        <select name="monthEE" class="form-control" id="myMonth">
                                            <option disabled="" selected="">To Month</option>
                                            <option value="01">01</option> 
                                            <option value="02">02</option> 
                                            <option value="03">03</option> 
                                            <option value="04">04</option> 
                                            <option value="05">05</option> 
                                            <option value="06">06</option> 
                                            <option value="07">07</option> 
                                            <option value="08">08</option> 
                                            <option value="09">09</option> 
                                            <option value="10">10</option> 
                                            <option value="11">11</option> 
                                            <option value="12">12</option> 
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-group mt-3"> 
                                        <input name="yearEE" type="number" class="form-control" placeholder="To Year" id="myYear">
                                    </div>
                                    </div> 
                                    <div class="col-md-12">
                                    <div class="form-group mt-3"> 
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <label class="customcheck" for="myCheckbox">Currently enrolled here.
                                                <input type="checkbox" value="Current" name="workhereE"  id="myCheckbox"/>
                                                <span class="checkmark"></span>
                                            </label> 
                                        </div>
                                        <div class="col-md-4"></div> 
                                    </div>
                                    </div>  
                                    </div> 
                                </div>
                                <div class="tab-pane" id="description">
                                <h4 class="info-text">Working experience, Please start with the most recent.</h4>
                                    <div class="row">
                                        <div class="col-sm-4 ">
                                        <div class="form-group"> 
                                            <div class="input-group">
                                                <input name="company"  type="text" class="form-control" placeholder="Company Name">
                                                <span class="input-group-addon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group"> 
                                            <div class="input-group">
                                                <input name="wcountry"  type="text" class="form-control" placeholder="Country">
                                                <span class="input-group-addon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group"> 
                                            <div class="input-group">
                                                <input name="roletitle"  type="text" class="form-control" placeholder="Role Title">
                                                <span class="input-group-addon"></span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-3 pt-3">
                                        <div class="form-group"> 
                                            <select name="monthWS" class="form-control">
                                                <option disabled="" selected="">From Month</option>
                                                <option value="01">01</option> 
                                                <option value="02">02</option> 
                                                <option value="03">03</option> 
                                                <option value="04">04</option> 
                                                <option value="05">05</option> 
                                                <option value="06">06</option> 
                                                <option value="07">07</option> 
                                                <option value="08">08</option> 
                                                <option value="09">09</option> 
                                                <option value="10">10</option> 
                                                <option value="11">11</option> 
                                                <option value="12">12</option> 
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-3 pt-3">
                                        <div class="form-group"> 
                                            <input name="yearWS"  type="number" class="form-control" placeholder="From Year" >
                                        </div>
                                        </div>
                                        <div class="col-md-3 pt-3">
                                        <div class="form-group"> 
                                            <select name="monthWE" class="form-control" id="myMonthW">
                                                <option disabled="" selected="">To Month</option>
                                                <option value="01">01</option> 
                                                <option value="02">02</option> 
                                                <option value="03">03</option> 
                                                <option value="04">04</option> 
                                                <option value="05">05</option> 
                                                <option value="06">06</option> 
                                                <option value="07">07</option> 
                                                <option value="08">08</option> 
                                                <option value="09">09</option> 
                                                <option value="10">10</option> 
                                                <option value="11">11</option> 
                                                <option value="12">12</option> 
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-3 pt-3">
                                        <div class="form-group"> 
                                            <input name="yearWE" type="number" class="form-control" placeholder="To Year" id="myYearW">
                                        </div>
                                        </div> 
                                        <div class="col-md-12">
                                        <div class="form-group mt-3"> 
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                 <label class="customcheck" for="myCheckboxE">I currently work here
                                                    <input type="checkbox" value="Current" name="workhereW"  id="myCheckboxE"/>
                                                    <span class="checkmark"></span>
                                                </label>  
                                            </div>
                                            <div class="col-md-4"></div> 
                                        </div>
                                        </div> 
                                    </div>
                                    <div class="col-lg-12 text-center mt-5"> 
                                            {{-- <button type="button" class="btn btn-success btn-mb " name="addWork"  id="addWork">
                                                <i class="fas fa-plus"></i>
                                            </button>  --}}
                                    </div> 
                                </div>
                            </div>
                        {{-- </form> --}}
                            <div class="wizard-footer">
                                    <div class="pull-left ">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                    </div>
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' name='next' value='Next' id="btnGetValue2"/>
                                    </div>
                                    <div class="pull-right">
                                       <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Finish' /> 
                                    </div>
                                    <div class="clearfix"></div>
                            </div> 
                        </form>
                    </div>
                </div> 
            </div>
            </div> 
        </div> 
        <script src="/assets/wizard/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="/assets/wizard/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/assets/wizard/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>  
        <script src="/assets/wizard/js/gsdk-bootstrap-wizard.js"></script> 
        <script src="/assets/wizard/js/jquery.validate.min.js"></script>
        <script src="/assets/wizard/js/myJS.js"></script>  
    @else
    <div class="shadow-lg p-3 mb-5 bg-white rounded ">
        <div class="card-body">
            <div class="text-center">
               <div class="card mb-4 py-3 border-bottom-info">
                <div class="card-body pt-5 pb-5">
                  Your profile is already completed. 
                  <div class="text-center mt-5">
                      <a href="/user" class="btn btn-primary">Take me to dashboard</a>
                  </div>
                </div>
              </div>
            </div>
        </div> 
        <div style="height: 450px"></div>
    </div>
    @endif

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".generalDev").click(function(){
    $(".conten1").hide();
    $("#select_id2").prop('selectedIndex',0);
  }); 
  $(".webDev").click(function(){
     $(".conten2").hide(); 
     $("#select_id2").prop('selectedIndex',0);
  });
  $(".mobileDev").click(function(){
     $(".conten3").hide(); 
     $("#select_id2").prop('selectedIndex',0);
  });
  $(".databaseDev").click(function(){
     $(".conten4").hide(); 
     $("#select_id2").prop('selectedIndex',0);
  });
  $(".3dDev").click(function(){
     $(".conten5").hide(); 
     $("#select_id2").prop('selectedIndex',0);
  });
  $(".itDev").click(function(){
     $(".conten6").hide(); 
     $("#select_id2").prop('selectedIndex',0);
  });
  $(".OtherDev").click(function(){
     $(".contenOther").hide(); 
     $("#select_id2").prop('selectedIndex',0);
  });
  $(".resetService").click(function(){ 
     $("#select_id").prop('selectedIndex',0);
  });
 
  

  $('#select_id').on('change', function()
    {
        if (this.value === "Desktop Dev") {
             $(".conten1").show();
        }
        else if ((this.value === 'Web Frontend / Backend Dev') || (this.value === 'Web Frontend Dev') || (this.value === 'Web Backend Dev')){
             $(".conten2").show();
        }   
        else if (this.value === "Mobile Dev"){
             $(".conten3").show();
        }   
        else if (this.value === "Database"){
             $(".conten4").show();
        }   
        else if (this.value === "Creativity & 3D Design"){
             $(".conten5").show();
        }   
        else if (this.value === "IT & Networking"){
             $(".conten6").show();
        }   
        else if (this.value === "Financial and Accounting"){
             $(".conten7").show();
        }   
        else if (this.value === "Admin"){
             $(".conten8").show();
        }   
        else {
            
        }
    });

  $('#select_id2').on('change', function()
    {
        if (this.value === "general") {
             $(".conten1").show();
        }
        else if (this.value === "web"){
             $(".conten2").show();
        }   
        else if (this.value === "mobile"){
             $(".conten3").show();
        }   
        else if (this.value === "database"){
             $(".conten4").show();
        }   
        else if (this.value === "design"){
             $(".conten5").show();
        }   
        else if (this.value === "it"){
             $(".conten6").show();  
        }   
        else if (this.value === "Financial"){
             $(".conten7").show();
        }   
        else if (this.value === "Admin"){
             $(".conten8").show();
        }   
        else if (this.value === "contenOther"){
             $(".contenOther").show(); 
        }   
        else {
            
        }
    });
  
}); 
</script>