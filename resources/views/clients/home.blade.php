<style>
     
    #users {
      width: 100%
     }

    .dataTables_filter,  
    .dataTables_info  {
    display: none; 
    }
    table.dataTable thead th {
    border-bottom: 0;
    }
    table.dataTable tfoot th {
    border-top: 0;
    }
    
    .nav-tabs .nav-link.active {
        font-weight: bold;
        background-color: transparent;
        border-bottom: 3px solid #233857;
        : none;
        border-left: none;
        border-right: none;
        border-top: none;
    }
    
    .modal.left .modal-dialog {
        position: fixed;
        right: 0;
        margin: auto;
        width: 390px;
        height: 100%;
        -webkit-transform: translate3d(0%, 0, 0);
        -ms-transform: translate3d(0%, 0, 0);
        -o-transform: translate3d(0%, 0, 0);
        transform: translate3d(0%, 0, 0);
    }
    
    .modal.left .modal-content {
        height: 100%;
        overflow-y: auto;
    }
    
    .modal.right .modal-body {
        padding: 15px 15px 80px;
    }
    
    .modal.right.fade .modal-dialog {
        left: -320px;
        -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
        -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
        -o-transition: opacity 0.3s linear, left 0.3s ease-out;
        transition: opacity 0.3s linear, left 0.3s ease-out;
    }
    
    .modal.right.fade.show .modal-dialog {
        right: 0;
    }
    /* ----- MODAL STYLE ----- */
    
    .modal-content {
        border-radius: 0;
        border: none;
    }
    
    .modal-header {
        border-bottom-color: #eeeeee;
        background-color: #fafafa;
    }
    
    .button-1 {
        border: 3px solid #00d7c3;
        border-radius: 50px;
        -webkit-transition: all .15s ease-in-out;
        transition: all .15s ease-in-out;
        color: #00d7c3;
        background-color: #ffffff;
        border-style: hidden;
    } 
    #submitBTN { 
        -webkit-transition: all .15s ease-in-out;
        transition: all .15s ease-in-out;
        color: #ffffff;
        background-color: #0077c1;
        border-style: hidden;
    }
    
    #submitBTN:hover {
        background-color:#013069;
        color:#d3d3d3; 
        border-style: hidden;
    } 
    .bg-light-blue {
        background-color: #e9f7fe !important;
        color: #3184ae;
        padding: 7px 18px;
        border-radius: 4px;
    }

    .bg-light-green {
        background-color: rgba(40, 167, 69, 0.2) !important;
        padding: 7px 18px;
        border-radius: 4px;
        color: #28a745 !important;
    }

    .buttons-to-right {
        position: absolute;
        right: 0;
        height: 5%;
        top: 10%;
    }

    .btn-gray { 
        padding: 0px 8px;
        border-radius: 4px;
         box-shadow: 0px 2px 50px 5px #9fb4f2;
        background-color:#0077c1;
    }

    .booking:hover .buttons-to-right .btn-gray {
        opacity: 1;
        transition: .3s;
    }

    .buttons-to-right .btn-gray {
        opacity: 0;
        transition: .3s;
    } 

    .booking:last-child {
        margin-bottom: 0px;
        border-bottom: none;
        padding-bottom: 0px;
    }

    @media screen and (max-width: 575px) {
        .buttons-to-right {
            top: 10%;
        }
        .buttons-to-right a {
            display: block;
            margin-bottom: 5px;
        }
        .buttons-to-right a:last-child {
            margin-bottom: 0px;
        }
        .bg-light-blue,
        .bg-light-green,
        .btn-gray {
            padding: 3px;
        }
    }

    .card {
        margin-bottom: 20px;
        background-color: #fff;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        border-radius: 4px;
        box-shadow: none;
        border: none;
    }
    .mb-5, .my-5 {
        margin-bottom: 1rem!important;
    }
    .msg-img {
        margin-right: 20px;
    }
    .msg-img img {
        width: 90px;
        border-radius: 50%;
         box-shadow: 0px 2px 10px 2px #9fb4f2; 
    }
    img {
        max-width: 100%;
        height: auto;
    }

       .myButton {
        box-shadow: 0px 2px 50px 5px #9fb4f2;
        background-color:#0077c1;
        display:inline-block;
        cursor:pointer;
        color:#ffffff; 
        font-size:14px;
        font-weight:bold;
        padding:8px 20px;
        text-decoration:none;
    }
    .myButton:hover {
        background-color:#013069;
        color:#d3d3d3; 
    }
    .myButton:active {
        position:relative;
        top:1px;
    }

     .bottomMenu {
    display: none;
    position: fixed;
    top: 0;
    width: 100%;
    height: 60px; 
    z-index: 1;
  }
</style>

{{-- <form method="POST" enctype="multipart/form-data" id="submitShortlist">  --}}
@csrf
{{-- <div class="bottomMenu">
    <nav class=" navbar navbar-expand-lg " style="background-color: #ffffff; color: #0077c1; border-top: 3px solid #0077c1 !important;  border-bottom: 2px solid #0077c1 !important;">
     
        <div class="mx-auto  " id="navbarSupportedContent"> 
            <ul class="navbar-nav  mx-auto "> 
                <li class="nav-item">
                    <a class="nav-link" style="color: #0077c1" ><b>Click here to submit shortlisted candidate: </b></a>
                </li> 
                <li class="nav-item pl-5"> 
                    <button type="submit" class="myButton" id="submitBTN" data-toggle="tooltip" data-placement="top" title="Click this button to submit your selection." style="height: 40px; width:190px ">
                        <span class="badge badge-pill badge-danger" id="count2">0
                        </span> Submit selection 
                    </button> 
                </li>   
            </ul> 
        </div>
    </nav> 
</div> --}}

@include('pages.message') 
    <div class="container" >
        <div class="row">
            <div class="col-md-12 text-center ">
                <nav class="nav-justified ">
                    <div class="nav nav-tabs " id="nav-tab" role="tablist"> 
                        <div class="input-group d-flex justify-content-center pt-2">
                            <a class="navbar-brand" href="/">
                                <img src="/assets/img/gsi-financial-logo.png" width="164" height="60" class="d-inline-block align-top responsive" alt=""> 
                                <h6 style="color:#3e3e3e; letter-spacing: 8px;">  outsourcing </h6>
                            </a>
                        </div> 
                        <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true"><i class="fas fa-search"></i> Search</a>
                        <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false"><i class="fas fa-list-ol"></i> My List</a>
                        <a class="nav-item nav-link" id="pop4-tab" data-toggle="tab" href="#pop4" role="tab" aria-controls="pop4" aria-selected="false"><i class="fas fa-history"></i> History</a>
                         
                        <div class="dropdown nav-item nav-link" >
                                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-user"></i>
                                     Profile
                                </a>
                                <div class="dropdown-menu border " aria-labelledby="dropdownMenuButton"> 
                                    <a class="dropdown-item" href="javascript:void();"><small>{{(Auth::user()->name) ?? 'Not completed'}}</small></a>
                                    <a class="dropdown-item" href="javascript:void();"><small>{{(Auth::user()->email) ?? 'Not completed'}} </small></a>
                                    <a class="dropdown-item" href="javascript:void();"> <small>Role:Client</small></a> 
                                     <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{__('Logout') }}
                                        </a> 
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                </div>
                        </div> 
                </div>
                </nav>
                {{-- Search tab --}}
                <div class="tab-content" id="nav-tabContent" >
                    <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                        <div class="pt-3"></div>
                        <div class="card">
                            <div class="card-header">
                                <nav class="navbar navbar-expand-lg navbar-light bg-light" > 
                                <div class="input-group "> 
                                        <input type="text" id="myInputTextField" class="form-control bg-light border-22 small  bg-white" placeholder="Search by: Salary Experience Programming language" 
                                        aria-label="Search" aria-describedby="basic-addon2" style="height: 40px" name="servicesM" aria-controls="users">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" >
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div> 
                                </div> 

                                 <div class="py-2 px-4">   
                                    <a href="javascript:void();" class="myButton" id="btnFilter">Filter</a> 
                                </div>
                                {{-- <div > 
                                    <button type="submit" class="myButton" id="submitBTN" data-toggle="tooltip" data-placement="top" title="Click this button to submit your selection." style="height: 40px; width:190px ">
                                        <span class="badge badge-pill badge-danger" id="count">0
                                        </span> Submit selection 
                                    </button>    
                                </div> --}}
                                </nav>
                                <textarea required class="form-control clear" id="email_array_id_input"   rows="1" placeholder="you@mail.com" hidden></textarea> 
                                <div class="container " id="search_mega_DIV">
                                    <hr>
                                    <div class="pt-3"></div>
                                    <div name="myform" class="pt-4">
                                        <div class="row pb-3">
                                            <div class="col-lg-4 col-md-4 col-sm-6 b-2" name="options">
                                                <select  name="servicesM" id="dropdown1" class="form-control div-toggle border border-info" data-target=".my-info-1">
                                                    <option disabled="" selected="">By Category</option>
                                                    <option value="Desktop ">1. Desktop </option>
                                                    <option value="Web Frontend / Backend ">2. Web Frontend / Backend</option>
                                                    <option value="Web Frontend ">3. Web Frontend </option>
                                                    <option value="Web Backend ">4. Web Backend </option>
                                                    <option value="Mobile ">5. Mobile </option>
                                                    <option value="Database">6. Database </option>
                                                    <option value="Creativity & 3D Design">7. Creativity & 3D Design</option>
                                                    <option value="IT & Networking">8. IT & Networking</option>
                                                    <option disabled="" value="...">...</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 b-2" name="options">
                                                <select  name="servicesM" id="dropdown2" class="form-control div-toggle border border-info" data-target=".my-info-1">
                                                    <option disabled="" selected="">Experience</option>
                                                    <option value="Junior">1. Junior</option>
                                                    <option value="Mid">2. Mid</option>
                                                    <option value="Senior">3. Senior</option>
                                                    <option value="Expert">4. Expert</option>
                                                    <option disabled="" value="...">...</option>
                                                </select>
                                            </div> 
                                            <div class="col-lg-4 col-md-4 col-sm-6 b-2" name="options">
                                                <select  name="servicesM" id="dropdown3" class="form-control div-toggle border border-info" data-target=".my-info-1">
                                                    <option hidden value="" hidden>monthly Salary</option>
                                                    <option  disabled> ... </option> 
                                                    <option value="0 - 725">€0 - €725</option>
                                                    <option value="725 - 1450">€725 - €1450</option>
                                                    <option value="1450 - 2175"> €1450 - €2175</option>
                                                    <option value="2275 - 2900"> €2275 - €2900</option>
                                                    <option value="2900 - 3625">€2900 - €3625</option>
                                                    <option value="3625 - 4350">€3625 - 4350</option> 
                                                    <option  disabled> ... </option> 
                                                </select>
                                            </div>  
                                        </div>
                                        <a class="btn-circle btn-warning" id="reset" title="Reset Filter" style="outline:none; ">
                                            <i class="fas fa-undo-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>  
                                <div class="table-responsive"> 
                                    <table id="users" class="table" width="100%" cellspacing="0" > 
                                        <thead hidden>
                                            <tr >
                                                <th class="w-auto" style="border: none"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable" > 
                                            <br>   
                                            @foreach ($uLang as $user) 
                                            @foreach ($about2 as $info) 
                                            @if( $user->user_id == $info->user_id)
                                            <tr> 
                                                <td style=" border-top: 0; padding: 0.2rem !important"> 
                                
                                                    <div class="col-md-12"> 
                                                            <div class="border pl-3">
                                                                <ul class="list-unstyled pt-3">
                                                                    <li class="position-relative booking">
                                                                        <div class="media">
                                                                            <div class="msg-img pb-3">
                                                                                    @php
                                                                                     $img =  $info->image;
                                                                                    //$img2 = substr($img, 14);
                                                                                @endphp
                                                                                <img class="img-responsive "  style="height: 90px; width: 90px; border-radius: 20%;"
                                                                                 src="<?php echo asset("uploads/$img")?>" 
                                                                                alt="./assets/img/image-preview.svg" onerror="this.onerror=null;this.src='./assets/img/image-preview.svg'"> 
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h6 class="mb-4">
                                                                                    @php
                                                                                        $firstname = head(explode(' ', trim($user->name)));
                                                                                    @endphp
                                                                                    <span class="bg-light-blue">ID {{$user->user_id ?? 'Not found'}} {{$firstname ?? 'Not found'}}</span> 
                                                                                    <span class="bg-light-blue">{{$info->servicesM ?? 'Not found'}}   
                                                                                    <small>({{$info->level ?? 'Not found'}})</small>
                                                                                    </span>
                                                                                </h6>
                                                                                <div class="form-group row mb-2">
                                                                                    <span class="d-block d-sm-inline-blocktext-dark col-sm-2">Education</span>
                                                                                    <div class="col-sm-8">
                                                                                        <span class="bg-light-blue"> {{$info->degree ?? 'Not found'}} / {{$info->areaofstudy ?? 'Not found'}}</span>
                                                                                    </div> 
                                                                                </div> 
                                                                                <div class="form-group row mb-2">
                                                                                    <span class="d-block d-sm-inline-blocktext-dark col-sm-2">Last position: </span>
                                                                                    <div class="col-sm-8">
                                                                                        <span class="bg-light-blue"> {{$info->lastPosition ?? 'Not found'}} </span> 
                                                                                     </div>
                                                                                </div>
                                                                                <div class="form-group row mb-2">
                                                                                    <span class="d-block d-sm-inline-blocktext-dark col-sm-2">Available: </span>
                                                                                    <div class="col-sm-8">
                                                                                        <span class="bg-light-blue"> {{$info->available ?? 'Not found'}}</span> 
                                                                                     </div>
                                                                                </div>
                                                                                <div class="form-group row mb-2">
                                                                                    <span class="d-block d-sm-inline-blocktext-dark col-sm-2">Salary:</span>
                                                                                    {{-- <span class="d-block d-sm-inline-blocktext-dark col-sm-2">Salary expectations:</span> --}}
                                                                                    <div class="col-sm-8"> 
                                                                                    <span class="bg-light-blue">
                                                                                            <i class="fa fa-money"></i>  
                                                                                            @if ($info->monthly == '0 - 500') 
                                                                                            €0 - €725
                                                                                            @elseif ($info->monthly == '500 - 1000')
                                                                                            €725 - €1450
                                                                                            @elseif ($info->monthly == '1001 - 1500')
                                                                                            €1450 - €2175
                                                                                            @elseif ($info->monthly == '1501 - 2000')
                                                                                            €2275 - €2900
                                                                                            @elseif ($info->monthly == '2001')
                                                                                            €2900 - €3625 
                                                                                            @else
                                                                                            €000 - €000     
                                                                                            @endif
                                                                                    </span>
                                                                                    </div>  
                                                                                </div>  
                                                                                <div class="form-group row mb-2">
                                                                                    <span class="d-block d-sm-inline-blocktext-dark col-sm-2">English:</span>
                                                                                    <div class="col-sm-8"> 
                                                                                        <span class="bg-light-blue"> {{$info->english ?? 'Not found'}}</span> 
                                                                                    </div>  
                                                                                </div> 
                                                                                @if ($info->typingSkills != "") 
                                                                                <div class="form-group row mb-2">
                                                                                    <span class="d-block d-sm-inline-blocktext-dark col-sm-2">Typing skills :</span>
                                                                                    <div class="col-sm-8"> 
                                                                                        <span class="bg-light-blue"> {{$info->typingSkills ?? 'Not found'}}</span> 
                                                                                    </div>  
                                                                                </div>  
                                                                                 @endif 
                                                                                   @if ($info->otherAdminSkills != "") 
                                                                                <div class="form-group row mb-2">
                                                                                    <span class="d-block d-sm-inline-blocktext-dark col-sm-2">Admin skills :</span>
                                                                                    <div class="col-sm-8"> 
                                                                                        <span class="bg-light-blue"> {{$info->otherAdminSkills ?? 'Not found'}}</span> 
                                                                                    </div>  
                                                                                </div>  
                                                                                 @endif 
                                                                                <div class="form-group row mb-2"> 
                                                                                    <span class="bg-light-blue"> 
                                                                                        @foreach ($languages as $lang) 
                                                                                        @if($user->user_id == $lang->user_id)
                                                                                            <small class="fs-16 fw-300 "> 
                                                                                            <span class="py-5">{{$lang->name}}</span>  
                                                                                            </small> 
                                                                                        @endif 
                                                                                        @endforeach 
                                                                                        
                                                                                        @if ($info->otherSkills != "")
                                                                                        @foreach(explode(',', $info->otherSkills) as $info)  
                                                                                            <span class="pt-5">{{$info}}</span> 
                                                                                        @endforeach
                                                                                        @endif  
                                                                                        </span>  
                                                                                </div>
                                                                    </div>
                                                                    </div>  
                                                                        <div class="buttons-to-right pr-5">  
                                                                            <div class="badge-info btn-gray">
                                                                                <div class="pb-0">
                                                                                        <hr style="width: 0%">
                                                                                </div> 
                                                                                <form class="form" enctype="multipart/form-data" method="post">@csrf   
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 px-5 pb-3">   
                                                                                            <input hidden type="number" name="userID" class="form-control"value="{{$user->user_id}}">
                                                                                            <button class="btn btn-light" type="submit" >Shortlist</button> 
                                                                                        </div>
                                                                              </form>    
                                                                            </div> 
                                                                        </div>
                                                                    </li> 
                                                                </ul> 
                                                            </div> 
                                                    </div> 
                                                </td> 
                                            </tr> 
                                            @endif
                                            @endforeach   
                                            @endforeach    
                                            <br>
                                        </tbody> 
                                    </table>
                                </div>  
                        {{-- </form> --}}
                        </div>
                    </div>  
                {{-- my list tab --}}
                @include('clients/myList') 
                {{-- Other tab --}}
                @include('clients/other') 
             </div>
            </div>
        </div>
    </div> 
<script src="{{ asset('/assets/js/myJS.js') }}" defer></script>   
<script>  
    $('.form').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);  
        $.ajax({
            type: 'POST', 
            url: 'client-adm',
            data: formData, 
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: (data) => {
                if (data.success == true) { 
                    toastr.success("SHORTLISTED");
                }
            },
            error: function (data) { console.log(data); }
        });
    });  
</script>

