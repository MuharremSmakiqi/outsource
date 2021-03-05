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
<div class="modal fade" id="skills-edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Delete Skills </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tab-pane" id="location">
        <div class="row">
         <div class="tab-pane" id="type">  
        <div class="row " id="general-content">                                     
            <div class="container ml-5">  
                <div id="1" class="conten1 " style="display: block">  
                <div class="row col-md-offset-2">    
                    <div id="col-md-3 " class=""> 
                    @foreach ($languages as $lang)
                        <label class="customcheck">{{$lang->name}}
                        <input type="checkbox" value="{{$lang->id}}" name="wpmm[]"/>
                        <span class="checkmark"></span>
                        </label>  
                    @endforeach
                    </div>  
                    <div class="" style="padding-left: 155px"></div>         
                </div>  
            </div> 
        </div>  
        </div>
    </div>
          
        </div>
        </div>
      </div>
      <div class="modal-footer"> 
        <button type="submit" class="btn btn-danger" value="deleteSkills" name="type">Delete</button>
      </div>
    </div>
  </div>
</div>   
  <script src="/assets/wizard/js/myJS.js"></script>  
</form>