
@extends('layouts.app') @section('content') 
<title>How it works</title>   
<div class="customPad bg-light text-center pb-3"> 
  <p class="text-primary" style="font-size: 20px; font-size: 15px; padding-top: 3%">
    <a href="/" style="font-weight: 500"><b>Home</b></a> 
    <a class="px-2 "><small><i class="fas fa-chevron-right"></i></small></a> 
    <a ><b>How it works</b></a> 
  </p>  
</div>  
<section class="shadow-lg p-3 mb-5 bg-white rounded ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center ">
                <nav class="nav-justified ">
                    <div class="nav nav-tabs " id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="staff-required-tab" data-toggle="tab" href="#staff-required" role="tab" aria-controls="staff-required" aria-selected="true">1- Staff Required <i class="fas fa-users"></i></a>
                        <a class="nav-item nav-link" id="recruitment-tab" data-toggle="tab" href="#recruitment" role="tab" aria-controls="recruitment" aria-selected="false">2- Recruitment <i class="fas fa-user-tie"></i></a>
                        <a class="nav-item nav-link" id="interview-tab" data-toggle="tab" href="#interview" role="tab" aria-controls="interview" aria-selected="false">3- Interview <i class="fas fa-comment-dots"></i></a>
                        <a class="nav-item nav-link" id="start-tab" data-toggle="tab" href="#start" role="tab" aria-controls="start" aria-selected="false">4- Start <i class="fas fa-play-circle"></i></a> 
                    </div>
                </nav>
                <div class="tab-content  justify-content-center" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="staff-required" role="tabpanel" aria-labelledby="staff-required-tab">
                        <div class="pt-3 "></div> 
                         <div class="col-lg-12">
                          @if(session('success'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <h4 class="alert-heading"><strong>{!! session('success') !!}</strong></h4>
                                <p>One of our team member will get back in touch with you soon.</p>
                                <hr>
                                <p class="mb-0">Have a great day !</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            @endif 
                            @if(session('error'))
                                    <div class="alert alert-danger"> {!! session('error') !!} </div>
                            @endif
                        </div>
                        <h5 class="card-title mb-0"></h5>  
                        <div class="row the_content_wrapper">  
                            <div class="col-lg-12 mt-4"> 
                                <p class="text-left"> 
                                  The first step is to identify your staff requirements.  It can all be done by email but a telephone call with
                                  one of our managers can usually ensure we both have a good understanding of what you need.  
                                  Try clicking <a href="#modalPhone" data-toggle="modal" style="color: deepskyblue"><u>please call me </u></a> 
                                  and we will give you a ring, or you can call us on <a style="color: deepskyblue"> 020 3151 6848</a>.  
                                  We can open email communication if you just click <a href="#modalEmail" data-toggle="modal" style="color: deepskyblue"><u>email GSI</u></a> 
                                  and give us your email address.  
                                  If we contact you, it helps to keep our site and IT infrastructure secure.
                                </p> 
                                <div class="row">
                                    <div class="col-md-7">
                                        <h6 class="text-left">The information we will need is:</span></h6>
                                        <ul class="text-left">
                                            {{-- <img src="/assets/img/keyFeatures.svg" height="250px" class="float-left"  alt="GSI"> --}}
                                            <li> <p class="text-justify" style="font-size: 15px; margin-bottom: 0.1rem !important;"> About your business – sector, size, number of staff.</p> </li>
                                            <li> <p class="text-justify" style="font-size: 15px; margin-bottom: 0.1rem !important;"> Whether you outsource or have external staffing arrangements already.</p> </li>
                                            <li> <p class="text-justify" style="font-size: 15px; margin-bottom: 0.1rem !important;"> What type of staff you need, such as IT, programmers, accounts, administration or any other sector.</p> </li>
                                            <li> <p class="text-justify" style="font-size:  15px; margin-bottom: 0.1rem !important;"> How many staff are required now and in future, so a brief insight into your workforce planning.  You can recruit for specific projects where the employment will be for a fixed period or longer term but under local laws, contracts are usually no longer than 12 months when they are renewed or terminated.</p> </li>
                                            <li> <p class="text-justify" style="font-size:  15px; margin-bottom: 0.1rem !important;"> Outline job descriptions so that we can focus the recruitment process.  We keep databases of available staff so we may be able to provide candidates quickly.</p> </li>
                                        </ul>
                                        <p class="text-left"> We will ask you to review and agree to our terms and conditions before we start, which we will send you after our initial communication.</p>
                                            
                                    </div>
                                    <div class="col-md-5 rounded" style="background-image: url('/assets/img/staffRequirement.jpg');"></div>
                                </div>
                            </div> 
                        </div> 
                        <div class="w-100 justify-content-center mt-5 mb-5"> 
                        </div>
                    </div>
                    <div class="tab-pane fade" id="recruitment" role="tabpanel" aria-labelledby="recruitment-tab"> 
                        <h5 class="card-title mb-0"></h5>  
                        <div class="row the_content_wrapper"> 
                            <p class="text-left mt-5 pl-3">
                                We will advertise for staff based on your requirements and also review our existing databases of available staff.
                                Each job advertisement we place usually attracts over 100 applicants within two weeks.
                            </p> 
                            <div class="col-md-7">
                                <p class="text-left"> 
                                    Our own HR staff will review the applications and eliminate any which are not a good match for your requirements. 
                                    The rest will be shortlisted for your approval.
                                </p>  
                                <p class="text-left">
                                    We can send you the list after accumulating a number of candidates.  Our latest feature is that we can give you a secure login
                                    to our database with all your potential candidates listed and notifications sent to you as more are added.
                                </p>
                                <p class="text-left"> 
                                    You can then discuss candidates with our HR team and then let us know who you would like to shortlist for interview.  
                                    You can tell us on the phone or by email or by marking candidates on the database.
                                </p>
                               
                            </div>
                            <div class="col-md-5 rounded" style="background-image: url('/assets/img/recruitment.jpg');"></div>
                        </div> 
                        <div class="w-100 justify-content-center mt-5 mb-5"> 
                        </div>
                    </div>
                    <div class="tab-pane fade" id="interview" role="tabpanel" aria-labelledby="interview-tab"> 
                        <div class="row the_content_wrapper mt-5">  
                           <p class="text-left pl-2"> 
                                Candidates attend our office for video conference interviews and you can interview direct or have one of our staff alongside on the call.
                                 Our professional HR team can assist you with the interview process if you do not have specialist HR staff of your own. 
                            </p>
                            <div class="col-lg-7"> 
                                <p class="text-left">  
                                  We will retain notes of all the interviews and prepare a list of candidates and their interview notes for you your review.  
                                </p> 
                                 <p class="text-left">  
                                  We can carry out first interviews without your involvement if you would like us to shortlist down to a few candidates per vacancy.
                                </p>
                                <p class="text-left"> 
                                  Following the interviews you can choose who you would like us to employ for you and they can start work.  
                                </p>                       
                             <br> <br>
                            </div>
                          <div class="col-md-5 rounded" style="background-image: url('/assets/img/interview.jpg');"></div>
                        </div> 
                        <div class="w-100 justify-content-center mt-5 mb-5"> 
                        </div> 
                    </div>
                    <div class="tab-pane fade" id="start" role="tabpanel" aria-labelledby="start-tab"> 
                        <h5 class="card-title mb-0 pt-5 "></h5>  
                         <p class="text-left"> 
                            Having selected the successful candidates, we will prepare contracts of employment in English (together with a translated version to comply with local laws).  The contract will be sent to you for review and you can make any changes which are suitable or specific to your business.
                        </p>
                        <div class="row the_content_wrapper">  
                            <div class="col-lg-7"> 
                                <p class="text-left"> 
                                  We will also prepare a contract for our services to you.
                                  This contract can be agreed with our UK company or you can contract directly with one of our companies in Kosovo or North Macedonia.
                                  The cost is the same but no VAT is charged from our local offices and payments can still be made in GBP.  
                                </p> 
                                <p class="text-left"> 
                                  After all the contracts are agreed we will issue the offer letters and your new staff can start work.
                                </p> 
                                <p class="text-left">
                                  Where candidates already have a job, they will normally have a two week notice period so there may be a delay from issue of
                                   offer letter to commencement.  We can speed up the process if we agree our contract with you and the employment contracts, 
                                   earlier in the process. 
                                </p>
                               
                            </div>
                            <div class="col-md-5 rounded" style="background-image: url('/assets/img/start.jpg');"></div>
                        </div> 
                        <div class="w-100 justify-content-center mt-5 mb-5"> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    @include('pages.modals.phone_modal')
    @include('pages.modals.email_modal')
</section>
@endsection
<script src="{{ asset('/assets/js/myJS.js') }}" defer></script>