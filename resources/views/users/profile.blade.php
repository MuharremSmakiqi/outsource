<div class="row">
    <div class="col-lg-3 col-md-3  border-right">   
         <!-- Topbar Search --> 
        <div class="d-flex justify-content-center pl-3 "> 
              <a class="navbar-brand pt-3 border-bottom" href="/">
                <img src="/assets/img/gsi-financial-logo.png" width="174" height="60" class="d-inline-block align-top responsive" alt=""> 
                <h6 style="color:#3e3e3e; letter-spacing: 9px;">  outsourcing </h6>
            </a>
        </div> 
        <div class="text-center pt-5">   
             @php $img = DB::table('images')->latest() ->where('user_id', '=', Auth::user()->id)->value('image'); @endphp    {{--$img2 = substr($img, 14);  this method skips 14 first characters  --}}
            <img class="img-responsive "  style="height: 150px; width: 150px; border-radius: 50%;" src="<?php echo asset("uploads/$img")?>" alt="User Image" onerror="this.onerror=null;this.src='./assets/img/image-preview.svg'">  
        </div>
        <div class="d-flex justify-content-center "> 
            <p class="text-left mb-2 "><b>{{ Auth::user()->name }}</b> 
                <a href="/photo" class="bg-light bt-sm  btn-circle " ><i class="fas fa-camera"></i></a>  
            </p>    
        </div>
        <div class="d-flex justify-content-center pb-5"> 
            <div class="card-text">
                <p class="text-left mb-2"><b><i class="fas fa-laptop-code"></i>  {{$about->servicesM ?? '404'}}</b> </p>  
                <p class="text-left mb-2"><b><i class="fas fa-envelope"></i> {{ Auth::user()->email }}</b> </p>  
                <p class="text-left mb-2"><b><i class="fas fa-phone-square-alt"></i> {{$about->phone ?? '404'}}</b> </p>  
                <p class="text-left mb-2"><b><i class="fas fa-map-marker-alt"></i> {{$about->city ?? '404'}} / {{$about->country ?? '404'}}</b> </p>   
            </div> 
        </div>

       <div class="pt-5">
           <div class="row">
                <div class="col-md-6"> 
                    <div class="topbar-divider d-none d-sm-block"></div> 
                    <a class="btn-sm btn btn-outline-danger float-left" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{__('Logout') }} </a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                </div>
                <div class="col-md-6">
                     <button type="button" class="btn-sm btn btn-outline-info float-right" data-toggle="modal" data-target=".bd-modal-feedback">Feedback</button>  
                </div>
           </div> 
            @include('users.modals.feedback')  
            @if(empty($modalFB))<script> $(function() { $('#feedback').modal('show'); });</script>@endif   
            <p class="text-left bg-info text-white px-3 py-3"> Your account is active. <br> We would kindly like to remind you that if you do not login to your GSI Outsourcing account at least once every 30 days, the account’s status becomes inactive and our clients will no longer have access to your skills and information.</p>
       </div>
    </div>
    <div class="col"> 
        <div class="col-12 text-center pb-5">
                <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                <div class="pt-3"></div>
                    <div class="w-100">  
                            <a class="btn bg-light btn-md px-5" data-toggle="modal"   title="Edit Info" data-target="#profile-edit_{{$about->id}}" style="font-size: 19px">
                                Bio <i class="fas fa-edit ml-2"></i>
                            </a> 
                            @include('users.modals.edit-profile')  
                        <p class="text-left pb-5 pt-3" style="word-break: break-all;">{{$about->bio ?? '0'}} </p>    
                    </div>
                        <h5 class="card-title mb-0">Other Information</h5><hr style="width: 40%">   
                    <div class="row"> 
                            <div class="col-lg-6 ">   
                                    <p class="text-right mb-2"><b>Salary expectation: {{$about->monthly ?? '0'}} <small><i class="fas fa-euro-sign"></i></small></b></p> 
                                    <p class="text-right mb-2"> <b>English level:{{$about->english ?? '0'}}</b></p>    
                                    <p class="text-right mb-2"><b> Last Position: {{$about->lastPosition ?? '0'}}</b></p>  
                            </div>
                            <div class="col-lg-6"> 
                                <p class="text-left mb-2"><b>Experience level: {{$about->level ?? '0'}}</b> </p>  
                                <p class="text-left mb-2"><b> Other language: {{$about->otherLanguages ?? '0'}}</b></p> 
                                <p class="text-left mb-2"><b>Availability: {{$about->available ?? '0'}}</b></p> 
                            </div> 
                    </div> 
                    @include('users.modals.about') 
                </div> 
        </div>
        <div class="row">
                    <div class="col-md-5">  
                    <div class="card border mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-info">Education</h6> 
                                <a href="#" class="btn btn-info btn-circle btn-sm"  data-toggle="modal" data-target="#edu-add">
                            <i class="fas fa-plus"></i>
                        </a> 
                        </div>
                        <!-- Card Body -->
                    <div class="card-body"> 
                            <section class="resume-section d-flex align-items-center" id="education">
                        <div class="w-100"> 
                            @foreach ($edu as $education)
                                @if(is_null($education)) 
                                <!-- // $result is empty-->
                                <p class="lead">Not completed, Please click Add button to add</p> 
                            @else
                                <!--$result is not empty -->
                                <div class="resume-item d-flex flex-column flex-md-row justify-content-between ">
                                    <div class="resume-content">
                                        <span class="text-primary">
                                            {{$education->university ?? 'Not completed'}}   
                                        </span>
                                        <div class="subheading mb-1">{{$education->areaofstudy ?? 'Not completed'}}</div>
                                        <div>{{$education->degree ?? 'Not completed'}}</div> 
                                    </div>
                                    <div class="resume-date text-md-right">
                                        <span class="text-primary fontYear">{{$education->monthES ?? 'Not completed'}}.{{$education->yearES ?? '0'}}</span>
                                        <span class="text-primary fontYear">-</span>
                                        <span class="text-primary fontYear">{{$education->monthEE ?? 'Current'}}.{{$education->yearEE ?? ''}}</span><br>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a  class="btn  btn-circle btn-md text-warning" 
                                                    data-toggle="modal" 
                                                    title="Edit" data-target="#edu-edit_{{$education->id}}">
                                                    <i class="fas fa-edit"></i>
                                                </a> 
                                                @include('users.modals.edu-edit') 
                                            </div>
                                            <div class="col-lg-6"> 
                                                <form action="{{ route('user.destroy',$education->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-circle btn-md text-danger"  
                                                        value = "Save" title="Delete"><i class="fas fa-trash-alt"></i>  
                                                    </button> 
                                                </form> 
                                            </div>
                                        </div>
                                        </div>
                                </div> 
                                <hr class="mb-4" style="opacity: 0.5"> 
                            @endif 
                            @endforeach
                        </div>
                    </section> 
                    </div>
                    </div>
                    @include('users.modals.edu-add') 
                    <!-- include('users.modals.edu-edit') -->
                    @include('pages.message')
                
            </div>
            <div class="col-md-4">  
                    <div class="card border mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-info">  Work </h6> 
                                <a href="#" class="btn btn-info btn-circle btn-sm"  data-toggle="modal" data-target="#work-add">
                                    <i class="fas fa-plus"></i>
                                </a>   
                        </div>
                        <!-- Card Body -->
                    <div class="card-body"> 
                            <section class="resume-section d-flex align-items-center" id="education">
                        <div class="w-100">
                            @foreach ($work as $work) 
                                @if(is_null($work)) 
                                        <!-- // $result is empty-->
                                    <p class="lead">Not completed, Please click Add icon (button) </p> 
                                @else
                                    <div class="resume-item d-flex flex-column flex-md-row justify-content-between ">
                                    <div class="resume-content">
                                            <span class="text-primary">
                                            {{$work->company ?? 'Not completed'}}
                                        <!-- <a href="#" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#work-edit">
                                                <i class="fas fa-edit"></i>
                                            </a> -->
                                        </span>
                                        <div class="subheading mb-1">{{$work->wcountry ?? 'Not completed'}}</div>
                                        <div>{{$work->roletitle ?? 'Not completed'}}</div> 
                                    </div>
                                    <div class="resume-date text-md-right">
                                        <span class="text-primary fontYear">{{$work->monthWS ?? 'Not completed'}}.{{$work->yearWS ?? '0'}}</span>
                                        <span class="text-primary">-</span>
                                        <span class="text-primary fontYear">{{$work->monthWE ?? 'Current'}}.{{$work->yearWE ?? ''}}</span>
                                            <div class="row">
                                            <div class="col-lg-6">
                                                <a class="btn  btn-circle btn-md text-warning" 
                                                    data-toggle="modal" 
                                                    title="Edit" data-target="#work-edit_{{$work->id}}">
                                                    <i class="fas fa-edit"></i>
                                                </a> 
                                                    @include('users.modals.work-edit') 
                                            </div>
                                            <div class="col-lg-6">  
                                                <form action="{{ route('user.destroy',$work->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-circle btn-md text-danger"  
                                                        value="work" name="type" title="Delete"><i class="fas fa-trash-alt"></i>  
                                                    </button> 
                                                </form> 
                                            </div>
                                        </div>
                                    </div>
                                    </div>  <hr class="mb-4" style="opacity: 0.5">
                                @endif 
                            @endforeach
                        </div> 
                    </section> 
                    </div>
                    </div>
                    @include('users.modals.work-add') 
                    <!--include('users.modals.work-edit') -->
            </div>
            <div class="col-md-3">  
                    <div class="card border mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-info">  Skills </h6> 
                        <a href="#" class="btn btn-info btn-circle btn-sm " data-toggle="modal" data-target="#skills-add">
                            <i class="fas fa-plus"></i>
                    </a>  
                        <a href="#" class="btn btn-danger btn-circle btn-sm " data-toggle="modal" data-target="#skills-edit">
                            <i class="fas fa-trash-alt"></i>  
                        </a> 
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="w-100 justify-content-center">                              
                        @foreach ($languages as $lang) 
                        <span class="badge badge-pill badge-dark mt-3" style="font-weight:bold;">
                                {{$lang->name}}
                            </span>  
                        @endforeach 
                            @if ($about->otherSkills != "")
                            @foreach(explode(',', $about->otherSkills) as $info)   
                                <p class="badge badge-pill badge-dark ">{{$info}}</p>  
                            @endforeach
                            @endif
                            @if ($about->otherAdminSkills != "")
                            @foreach(explode(',', $about->otherAdminSkills) as $info)   
                                <p class="badge badge-pill badge-dark ">{{$info}}</p>  
                            @endforeach
                            @endif
                            @if ($about->typingSkills != "")
                            @foreach(explode(',', $about->typingSkills) as $info)   
                                <p class="badge badge-pill badge-dark ">{{$info}}</p>  
                            @endforeach
                            @endif
                        <div class="mb-5"></div> 
                    </div> 
                    </div>
                </div>
                    @include('users.modals.skills-edit') 
                    @include('users.modals.skills-add') 
            </div> 
        </div>
        
    </div>
</div> 