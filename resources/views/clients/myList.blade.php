<div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
    <div class="pt-3"></div>
    <div class="card">
        <div class="card-header" style="background-color: #F9F9F9">
                    <h6 class="m-0 font-weight-bold text-primary">User List Pending</h6>
                    <hr style="width:30%; background-color: #fffb00; border-width: 3px"> 
            <p class="">This list contains all the selection you have made and requested for interview.</p>
            <p class="">If you do not see the user list selected please refresh the page</p>
            <a class="btn-circle btn-warning" id="reset" title="Reset Filter" style="outline:none; " href="/client-adm">
                <i class="fas fa-undo-alt"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="w-100 row d-flex justify-content-center">
                <div class="col-md-10 ">
                    {{-- <div class="card b-1 mb-2 ">
                        <div class="media card-body">
                            <div class="media-left pr-12">
                                <div class="row pl-2">
                                    <img class="avatar avatar-xl  " src="/assets/img/pending.jpg" alt="...">
                                </div>
                                <div class="row mt-1 pl-3">
                                    <small><span class="badge badge-info">ID: {{$i->p_id ?? 'Not found'}}</span> English: {{$i->english ?? 'Not found'}}</small>
                                </div>
                            </div> 
                          
                            <div class="media-body">
                                <div class="mt-3">
                                    <span class="text-fade">{{$i->servicesM ?? 'Not found'}}</span>
                                </div> 
                            </div>
                            <div class="media-right text-right d-none d-md-block mt-3 pr-2">
                                <p class="fs-14 text-fade mb-12 "><i class="fas fa-trophy text-warning"></i> {{$i->level ?? 'Not found'}}</p>
                                <small><span ><i class="fa fa-money pr-1"></i> 
                                    {{-- ${{$i->monthly*2 ?? 'Not found'}} per month  
                                     @if ($info->monthly == '0 - 500') 
                                        <small>€0 - €725</small>
                                        @elseif ($info->monthly == '500 - 1000')
                                            <small>€725 - €1450</small>
                                        @elseif ($info->monthly == '1001 - 1500')
                                            <small>€1450 - €2175</small>
                                        @elseif ($info->monthly == '1501 - 2000')
                                            <small>€2275 - €2900</small>
                                        @elseif ($info->monthly == '2001')
                                            €2900 - €3625 
                                        @else
                                            
                                        @endif
                                </span></small>
                            </div> 
                        </div>
                        <footer class="card-footer flexbox align-is-center">
                            <div>
                                <span class="badge badge-info">Skills:</span>
                                @foreach ($languages as $lang)
                                 @if($i->p_id == $lang->user_id)
                                <small class="fs-16 fw-300 ">  
                                    <span class="badge skillsBackground">{{$lang->name}}</span>  
                                </small> 
                                @endif
                                @endforeach 

                                @foreach ($about2 as $item)
                                  @if ($item->otherSkills != "") 
                                    @if($i->p_id == $item->user_id)
                                        <span class="badge skillsBackground">{{$item->otherSkills}}</span> 
                                    @endif 
                                  @endif  
                                @endforeach
                                
                            </div> 
                            <div class="card-hover-show">
                                <label title="GSI Outsourcing is arranging a meeting, please wait we will contact you as soon as possible">Status: <span class="badge badge-pill badge-warning">Panding...</span></label>
                            </div>
                        </footer>
                    </div> --}}
                        <div class="table-responsive"> 
                                    <table  class="table table-bordered"> 
                                        <thead >
                                            <tr > 
                                                   <th scope="col">User</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Service</th>
                                                    <th scope="col">Education</th>
                                                    <th scope="auto">Expected_Salary</th>
                                                    <th scope="col">English</th>
                                                    <th scope="col">Skills</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable" > 
                                            <br> 
                                            @foreach ($interes as $i) 
                                            @foreach ($about2 as $info) 
                                            @if ($i->user_id == $info->user_id )
                                                                
                                            <tr> 
                                                 <td>
                                                        @php
                                                            $img =  $info->image;
                                                            //$img2 = substr($img, 14);
                                                        @endphp
                                                        <img class="img-responsive "  style="height: 50px; border-radius: 10%;"
                                                            src="<?php echo asset("uploads/$img")?>" 
                                                        alt="User Image" onerror="this.onerror=null;this.src='./assets/img/image-preview.svg'"> 
                                                 </td>
                                                <td>
                                                    @php  $firstname = head(explode(' ', trim($i->name))); @endphp
                                                     {{$i->user_id ?? 'Not found'}} {{--  {{$firstname ?? 'Not found'}} --}}</td>
                                                <td>{{$info->servicesM ?? 'Not found'}} ({{$info->level ?? 'Not found'}})</td>
                                                <td> {{$info->degree ?? 'Not found'}} / {{$info->areaofstudy ?? 'Not found'}}</td>
                                                <td>    
                                                         <i class="fa fa-money"></i>  
                                                        @if ($info->monthly == '0 - 500') 
                                                        <small>€0 - €725</small>
                                                        @elseif ($info->monthly == '500 - 1000')
                                                        <small>€725 - €1450</small>
                                                        @elseif ($info->monthly == '1001 - 1500')
                                                        <small>€1450 - €2175</small>
                                                        @elseif ($info->monthly == '1501 - 2000')
                                                        <small>€2275 - €2900</small>
                                                        @elseif ($info->monthly == '2001')
                                                        <small>€2900 - €3625</small> 
                                                        @else
                                                        <small>€000 - €000 </small>    
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$info->english ?? 'Not found'}}
                                                    </td>
                                                    <td>  
                                                        @foreach ($languages as $lang) 
                                                        @if($i->user_id == $lang->user_id) 
                                                            <span class="py-5"><small>{{$lang->name}} </small></span>   
                                                        @endif 
                                                        @endforeach  
                                                        @if ($info->otherSkills != "")
                                                        @foreach(explode(',', $info->otherSkills) as $info)  
                                                            <span class="pt-5"><small>{{$info}}</small></span> 
                                                        @endforeach
                                                        @endif 
                                                    </td>
                                                {{-- <td style=" border-top: 0; padding: 0.2rem !important"> 
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
                                                                                 src="//?php echo asset("uploads/$img")?>" 
                                                                                alt="User Image" onerror="this.onerror=null;this.src='./assets/img/image-preview.svg'"> 
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h6 class="mb-4">
                                                                                    @php
                                                                                        $firstname = head(explode(' ', trim($i->name)));
                                                                                    @endphp
                                                                                    <span class="bg-light-blue">ID {{$i->user_id ?? 'Not found'}} {{$firstname ?? 'Not found'}}</span> 
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
                                                                                        <span class="bg-light-blue">Manager</span> 
                                                                                     </div>
                                                                                </div>
                                                                                <div class="form-group row mb-2">
                                                                                    <span class="d-block d-sm-inline-blocktext-dark col-sm-2">Available: </span>
                                                                                    <div class="col-sm-8">
                                                                                        <span class="bg-light-blue"> 1 month notice</span> 
                                                                                     </div>
                                                                                </div>
                                                                                <div class="form-group row mb-2">
                                                                                    <span class="d-block d-sm-inline-blocktext-dark col-sm-2">Salary:</span>
                                                                                    {{-- <span class="d-block d-sm-inline-blocktext-dark col-sm-2">Salary expectations:</span>  
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
                                                                                <div class="form-group row mb-2"> 
                                                                                    <span class="bg-light-blue"> 
                                                                                        @foreach ($languages as $lang) 
                                                                                        @if($i->user_id == $lang->user_id)
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
                                                                    </li> 
                                                                </ul> 
                                                            </div> 
                                                    </div> 
                                                </td> --}}
                                            </tr>  
                                             @endif @endforeach @endforeach
                                            <br>
                                        </tbody>
                                    </table>
                                </div>  
                    <br>
                </div> 
            </div>
        </div>
    </div>
</div>