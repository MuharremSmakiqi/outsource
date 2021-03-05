<div class="modal fade bd-example-modal-xl" id="user_details_{{$u->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header user_cover">
                <button type="button" class="close btn-circle btn-lg bg-white" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div style=" width: 150px; height: 150px; margin-top: -62px;" class="pl-5">
                <img src="/assets/img/profile_image_gsi.jpg" alt="Avatar" style="border-radius: 50%;">
            </div>
            <div class="modal-body">
                <div class="col-12 pb-5">
                    <div class="row pl-5">
                        <div class="col-md-7">
                            <h5 ><i class="fas fa-user text-dark"></i> {{$u->name}}</h5>
                            <h6 ><i class="fas fa-user-graduate text-dark"></i> {{$u->servicesM}}</h6>
                            <h6 ><i class="fas fa-globe-africa text-dark"></i> {{$u->country}}, {{$u->city}}</h6>
                        </div>
                        <div class="col-md-5 pt-3">
                            <h5 ><i class="fas fa-envelope text-dark"></i> {{$u->email}}</h5>
                            <h6 ><i class="fas fa-phone-square-alt text-dark"></i> {{$u->phone}} </h6> @if ($u->status == 'active')
                            <h6 ><i class="fas fa-check-circle text-info"></i> {{$u->status}}</h6> @else
                            <h6 ><i class="fas fa-exclamation-circle text-danger"></i> {{$u->status}}</h6> @endif
                        </div>
                    </div>
                    <hr>
                    <div class=" pl-5 pt-2">
                        <h5>About</h5>
                        <h6 class="pr-5">{{$u->bio}}</h6>
                    </div>
                      <hr>
                      <div class=" pl-5 pt-2">
                          <h5>Other Information</h5>
                      </div>
                    <div class="row pl-2"> 
                        <div class="col pl-5 pr-5">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"><small>English Level</small></th>
                                        <th scope="col"><small>Other Languages</small></th>
                                        <th scope="col"><small>Monthly</small></th> 
                                        <th scope="col"><small>Gender</small></th>
                                        <th scope="col"><small>Experience Level</small></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><small>{{$u->english}}</small></td>
                                        <td><small>{{$u->otherLanguages}}</small></td>
                                        <td><small>{{$u->monthly}} €</small></td> 
                                        <td><small>{{$u->gender}}</small></td>
                                        <td><small>{{$u->level}}</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <hr>
                        <div class="row  p-2 pl-5">
                            <div class="col-md-3">
                                <h5>Education Background</h5>
                            </div>
                            <div class="col-md-8">
                                @foreach ($myEdu as $background) @if ($u->user_id == $background->user_id)
                                <div class="resume-item d-flex flex-column flex-md-row justify-content-between pb-3">
                                    <div class="resume-content">
                                        <span class="p-2">
                                          {{$background->university}}   
                                        </span>
                                        <div class="p-2">{{$background->areaofstudy}} - {{$background->degree}}</div>
                                    </div>
                                    <div class="resume-date text-md-right ">
                                        <div> <span class="fontYear p-2">From: {{$background->monthES}}.{{$background->yearES ?? '0'}}</span></div>
                                        <div> <span class="fontYear p-2">To: {{$background->monthEE ?? 'Current'}}.{{$background->yearEE ?? ''}}</span>
                                            <br> </div>
                                    </div> 
                                </div>
                                @endif @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="row  p-2 pl-5">
                            <div class="col-md-3">
                                <h5>Working Experience</h5>
                            </div>
                            <div class="col-md-8">
                                @foreach ($myWork as $background) @if ($u->user_id == $background->user_id)
                                <div class="resume-item d-flex flex-column flex-md-row justify-content-between pb-4">
                                    <div class="resume-content">
                                        <span class="p-2">
                                            {{$background->company}}   
                                        </span>
                                        <div class="p-2">{{$background->wcountry}}</div>
                                        <div class="pl-2">{{$background->roletitle}}</div>
                                    </div>
                                    <div class="resume-date text-md-right">
                                        <div> <span class="fontYear p-2">From: {{$background->monthWS}}.{{$background->yearWS ?? '0'}}</span></div>
                                        <div> <span class="fontYear p-2">To: {{$background->monthWE ?? 'Current'}}.{{$background->yearWE ?? ''}}</span>
                                            <br> </div>
                                    </div>
                                </div>
                                @endif @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>