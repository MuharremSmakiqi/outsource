<!-- Modal -->
 <style>
     .mydiv {
            display: none;   
        }  
     .hide {
        display: none;
        }
     /* The customcheck */
    .customcheck {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 16px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .customcheck input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 5px;
    }

    /* On mouse-over, add a grey background color */
    .customcheck:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .customcheck input:checked ~ .checkmark {
        background-color: #336278;
        border-radius: 5px;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .customcheck input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .customcheck .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
 </style> 
<form action="{{ route('user.store') }}" method="POST" name="profile" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="skills-add" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add New Skills</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tab-pane" id="location">
        <div class="row">
         <div class="tab-pane" id="type"> 
        <div class="col-md-12 py-2" name="options" id="options">
            <select name="services" class="form-control div-toggle border border-success" data-target=".my-info-1">
                <option disabled="" selected="">- CHOOSE HERE - Or Go others</option>
                <option value="general"  data-show=".conten1">1. Programming Languages (General)</option>
                <option value="web" data-show=".conten2">2. Web </option>
                <option value="mobile" data-show=".conten3">3. Mobile </option>
                <option value="database" data-show=".conten4">4. Database </option>
                <option value="design" data-show=".conten5">5. Creativity & 3D Design</option>
                <option value="it" data-show=".conten6">6. IT & Networking</option> 
                <option disabled="" value="...">...</option>
            </select> 
        </div>  
        <div class="col-md-12 py-2 ">   
            <small class="text-left">Add other skills. Please devide each skill by comma. 
                In case you want to delete other skill, just erase from input field <a class="text-info">"Other skills"</a> and click <a class="text-success">Save Changes</a>.</small>  <hr>
            <small>Other skills:</small>
            <input name="otherSkills" type="text" class="form-control border border-warning mb-3" id="otherSkills00" value="{{$about->otherSkills}}">    
            @if ($about->otherAdminSkills != "")    
                    <small>Other Admin skills:</small>
                    <input name="otherAdminSkills" type="text" class="form-control border border-warning mb-3" id="otherAdminSkills" value="{{$about->otherAdminSkills}}">  
            @endif
            @if ($about->typingSkills != "")   
                    <small>Typing skills [please indicate the WPM] you can achieve:</small>
                    <input name="typingSkills" type="text" class="form-control border border-warning" id="typingSkills" value="{{$about->typingSkills}}">  
            @endif 
        </div>  
        <div class="row " id="general-content">                                     
            <div class="container ml-5">  
                <div id="1" class="conten1 " style="display: block"> 
                <div class="row">
                    <div class="col-md-10 mt-2">
                        <h5 class=" ">1. General <small> (General / Desktop)</small></h5>   
                        <input type="hidden" value="" name="level">
                    </div> 
                </div>
                <hr>
                <div class="row col-md-offset-2"> 
                    @foreach ($general->chunk(4) as $languages )  
                    <div id="col-md-3 " class=""> 
                    @foreach ($languages as $lang)
                        <label class="customcheck">{{$lang->name}}
                        <input type="checkbox" value="{{$lang->name}}" name="wpmm[]"/>
                        <span class="checkmark"></span>
                        </label>  
                    @endforeach
                    </div>  
                    <div class="" style="padding-left: 155px"></div>
                    @endforeach           
                </div>  
            </div>
                <div id="2" class="conten2 hide">
                <h4 class=" ">2. Web <small>(Frontend / Backend)</small></h4><hr>
                <div class="row col-md-offset-2">
                @foreach ($web->chunk(7) as $languages )  
                <div id="col-md-4" class="">
                        @foreach ($languages as $lang)
                        <label class="customcheck">{{$lang->name}}
                        <input value="{{$lang->name}}" type="checkbox" name="wpmm[]"/>
                        <span class="checkmark"></span>
                        </label>   
                    @endforeach
                </div>  
                <div class="" style="padding-left: 120px"></div>  
                @endforeach  
            </div>  
            </div>
                <div id="3" class="conten3 hide">
                <h4 class=" ">3. Mobile <small>(Native / Cross-platform)</small></h4><hr>
                <div class="row col-md-offset-2">  
                @foreach ($mobile->chunk(3) as $languages )  
                <div id="col-md-4" class=""> 
                    @foreach ($languages as $lang)
                        <label class="customcheck">{{$lang->name}}
                        <input value="{{$lang->name}}" type="checkbox" name="wpmm[]"/>
                        <span class="checkmark"></span>
                        </label>   
                    @endforeach  
                    </div>   
                    <div class="" style="padding-left: 110px"></div>
                    @endforeach        
            </div> 
            </div> 
                <div id="4" class="conten4 hide">
                <h4 class=" ">4. Database</h4><hr>
                <div class="row col-md-offset-2"> 
                @foreach ($database->chunk(5) as $languages )   
                <div id="col-md-4" class="">  
                    @foreach ($languages as $lang)
                        <label class="customcheck">{{$lang->name}}
                        <input value="{{$lang->name}}" type="checkbox" name="wpmm[]"/>
                        <span class="checkmark"></span>
                        </label>   
                    @endforeach  
                    </div>   
                    <div class="" style="padding-left: 110px"></div>
                    @endforeach       
            </div>  
            </div>
                <div id="5" class="conten5 hide">
                <h4 class=" ">5. Creativity & 3D Design</h4><hr>
                <div class="row col-md-offset-2">  
                @foreach ($design->chunk(5) as $languages ) 
                <div id="col-md-4" class=""> 
                    @foreach ($languages as $lang)
                        <label class="customcheck">{{$lang->name}}
                        <input value="{{$lang->name}}" type="checkbox" name="wpmm[]"/>
                        <span class="checkmark"></span>
                        </label>   
                    @endforeach  
                </div>   
                <div class="" style="padding-left: 80px"></div>
                    @endforeach            
            </div>  
            </div>
                <div id="6" class="conten6 hide">
                <h4 class=" ">6. IT & Networking</h4><hr>
                <div class="row col-md-offset-2">  
                @foreach ($it->chunk(2) as $languages ) 
                    <div id="col-md-4" class=""> 
                        @foreach ($languages as $lang)
                        <label class="customcheck">{{$lang->name}}
                        <input value="{{$lang->name}}" type="checkbox" name="wpmm[]"/>
                        <span class="checkmark"></span>
                        </label>   
                    @endforeach  
                    </div>   
                    <div class="" style="padding-left: 50px"></div>
                        @endforeach       
            </div>  
            </div> 
        </div>  
        </div>
    </div>
          
        </div>
        </div>
      </div>
      <div class="modal-footer"> 
        <button type="submit" class="btn btn-success" value="skills" name="type">Save Changes</button>
      </div>
    </div>
  </div>
</div>   
  <script src="/assets/wizard/js/myJS.js"></script>  
</form>