
@extends('layouts.app') 
@section('content') 
@include('pages.message')
 
<title>Contact Us</title>   
<div class="customPad bg-light text-center pb-3"> 
  <p class="text-primary" style="font-size: 20px; font-size: 15px; padding-top: 3%">
    <a href="/" style="font-weight: 500"><b>Home</b></a> 
    <a class="px-2 "><small><i class="fas fa-chevron-right"></i></small></a> 
    <a ><b>Contact Us</b></a> 
  </p>  
</div> 
<div class="container border">
        <div class="row">
             <div class="col-md-3 border-right pt-3">
                <nav class="nav flex-column">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist"> 
                    <a class="nav-item nav-link text-left active" id="email_us-tab" data-toggle="tab" role="tab" aria-controls="email_us" aria-selected="true">
                        Email us <span class="pl-5"><i class="fas fa-envelope"></i></span>
                    </a>
                    <p class="pt-3">Use our online form to submit general enquiries. Please provide as much detail as you can.</p>
                  </div>
                </nav>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="nav-tabContent"> 
                           <div class="col-lg-12 px-5">
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <h4 class="alert-heading"><strong>{!! session('success') !!}</strong></h4>
                                        <p>We appreciate you contacting GSI Outsourcing. One of our colleagues will get back in touch with you soon.</p>
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
                                <form  method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('post') }}
                                <div class="row px-5">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control noBorder" placeholder="Name*" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-3">
                                            <input class="form-control noBorder" type="number" placeholder="Phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-3">
                                            <input type="email" class="form-control noBorder" id="email" name="email" placeholder="Email*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-3">
                                            <textarea class="form-control noBorder" rows="5" id="comment" name="message" placeholder="Message" minlength="10" required></textarea> 
                                        </div> 
                                        <div class="custom-control custom-checkbox">
                                            <small> <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" required>
                                            <label class="custom-control-label pt-1" for="customCheck" id="check"> Agree to terms and
                                                conditions. <a href="/terms-service">Read terms</a></label></small>
                                        </div> 
                                    </div>
                                     
                                    <div class="col-lg-12">
                                        <div class="form-group" style=" text-align: center;"> 
                                            <button type="submit" class="btn  btn-outline-primary " title="Agree to terms and conditions first">
                                                Send
                                            </button> 
                                        </div>  
                                    </div>
                                </div>
                            </form>  
                </div>
                  </div>
                </div>
            </div>
        </div>
    </div> 
  
<div class="container border">
        <div class="row">
             <div class="col-md-3 border-right pt-3">
                <nav class="nav flex-column ">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <h5 style="color: #ad974f;" class="text-left d-none d-md-block">  Office locator <i class="fas fa-search-location"></i></h5> 
                    <p> Find a GSI Outsourcing office close to you. Use location tabs below.</p>
                        
                        <a class="nav-item nav-link text-left pr-5 active" id="head-office-tab" data-toggle="tab" href="#head-office" role="tab" aria-controls="head-office" aria-selected="true" onclick="changeCaseBreadcrumbText('Accounts department')">Head Office</a> 
                        <a class="nav-item nav-link text-left pr-5" id="malta-office-tab" data-toggle="tab" href="#malta-office" role="tab" aria-controls="malta-office" aria-selected="false"onclick="changeCaseBreadcrumbText('Cyber breach and gdpr')">Malta Office</a> 
                        <a class="nav-item nav-link text-left pr-5" id="kosovo-office-tab" data-toggle="tab" href="#kosovo-office" role="tab" aria-controls="kosovo-office" aria-selected="false"onclick="changeCaseBreadcrumbText('Insurance company')">Kosovo Office</a>
                        <a class="nav-item nav-link text-left pr-5" id="north-macedonia-office-tab" data-toggle="tab" href="#north-macedonia-office" role="tab" aria-controls="north-macedonia-office" aria-selected="false"onclick="changeCaseBreadcrumbText('Due diligence')">North Macedonia Office</a>
                        <a class="nav-item nav-link text-left pr-5" id="romania-office-tab" data-toggle="tab" href="#romania-office" role="tab" aria-controls="romania-office" aria-selected="false"onclick="changeCaseBreadcrumbText('Asset misappropriation')">Romania Office</a> 
                      
                    </div>
                </nav>
            </div>
            {{-- <div class="col-md-9">
                  <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="head-office" role="tabpanel" aria-labelledby="head-office-tab" aria-selected="true">
                        <div class="detail-box p-4">
                            <h5 class=" font-weight-light">Head Office</h5><hr>
                            <p class=" op-7">Longcroft House 2-8 Victoria Avenue  
                                London EC2M 4NS United Kingdom 
                                Tel: +44 (0)20 3151 6848  
                            </p> 
                        </div>
                        <iframe class="pr-5 pl-4" src="https://maps.google.com/maps?q=Longcroft%20House%202-8%20Victoria%20Ave%20London%20EC2M%204NS%20UK&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="250" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> 
                  </div>
                  <div class="tab-pane fade" id="malta-office" role="tabpanel" aria-labelledby="malta-office-tab">
                         <div class="detail-box p-4"> 
                                <h5 class=" font-weight-light">Malta</h5><hr>
                                <p class=" op-7">Dragonara Business Centre, 5th Floor 
                                   Dragonara Road, St Julians, J3141 MALTA 
                                    Tel: +356 (0) 2778 0556  
                                </p> 
                            </div>
                            <iframe class="pr-5 pl-4" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3230.93761108928!2d14.4896502!3d35.9240271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11630ec416de0094!2sREGUS%20serviced%20offices%20-%20Dragonara%20Business%20Centre!5e0!3m2!1sen!2s!4v1580304549215!5m2!1sen!2s" width="100%" height="250" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  </div>
                  <div class="tab-pane fade" id="kosovo-office" role="tabpanel" aria-labelledby="kosovo-office-tab">
                         <div class="detail-box p-4"> 
                                <h5 class=" font-weight-light ">Kosovo</h5><hr>
                                <p class=" op-7">
                                    Rr. Lidhja e Prizrenit T-18, K-4, Nr-10 
                                    10000 Prishtina, Kosovo 
                                    Tel: +383 (0)38 411 150 
                                </p> 
                            </div>
                            <iframe class="pr-5 pl-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8298.772330613616!2d21.15187279999999!3d42.663562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe28f5717da82ae0c!2sGSI!5e0!3m2!1sen!2s!4v1598356421431!5m2!1sen!2s" width="100%" height="250" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  </div>
                  <div class="tab-pane fade" id="north-macedonia-office" role="tabpanel" aria-labelledby="north-macedonia-office-tab">
                         <div class="detail-box p-4"> 
                                <h5 class=" font-weight-light ">North Macedonia</h5><hr>
                                <p class=" op-7">
                                    Ul. Makedonija, br. 33/2-4 1000 Skopje-Centre 
                                    Republic of North Macedonia 
                                    Tel: +389 (0)2 311 7033

                                </p> 
                            </div>
                        <iframe class="pr-5 pl-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.2154796776235!2d21.428856415684397!3d41.99565086602818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1354155a2528b0b1%3A0x51bd97ba285f072f!2sGSI%20Translations!5e0!3m2!1sen!2s!4v1580306310153!5m2!1sen!2s" width="100%" height="250" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  </div>
                  <div class="tab-pane fade" id="romania-office" role="tabpanel" aria-labelledby="romania-office-tab">
                          <div class="detail-box p-4"> 
                                <h5 class=" font-weight-light ">Romania</h5><hr>
                                <p class=" op-7">
                                    Str. Buzesti, Nr. 50-52 etaj 11, modul 77, District 1 
                                    011015 Bucharest, Romania 
                                    Tel: +40 37 378 1837 
                                </p>
                            </div>
                            
                        <iframe class="pr-5 pl-4" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27095.866549749593!2d26.073044132619888!3d44.451576957711886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b201fe74dd4399%3A0xa3b72245234a61df!2sStrada%20Buze%C8%99ti%2050%2C%20Bucure%C8%99ti%2C%20Romania!5e0!3m2!1sen!2sus!4v1580306387509!5m2!1sen!2sus" width="100%" height="250" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  </div> 
                  
                  </div>
            </div> --}}
               <div class="col-md-9">
                    <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="head-office" role="tabpanel" aria-labelledby="head-office-tab" aria-selected="true">
                            <div class="detail-box p-4">
                                <h5 class=" font-weight-light">Head Office</h5><hr>
                                <p class=" op-7">Longcroft House 2-8 Victoria Avenue  
                                    London EC2M 4NS United Kingdom 
                                    Tel: +44 (0)20 3151 6848  
                                </p> 
                            </div>
                            <div style="width: 100%; overflow: hidden; height: 250px;"> 
                            <iframe class="pr-5 pl-4" 
                                src="https://maps.google.com/maps?q=Longcroft%20House%202-8%20Victoria%20Ave%20London%20EC2M%204NS%20UK&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                width="100%" height="550" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                style="border:0; margin-top: -150px;">
                            </iframe> 
                            </div>
                    </div>
                    <div class="tab-pane fade" id="malta-office" role="tabpanel" aria-labelledby="malta-office-tab">
                            <div class="detail-box p-4"> 
                                    <h5 class=" font-weight-light">Malta</h5><hr>
                                    <p class=" op-7">Dragonara Business Centre, 5th Floor 
                                    Dragonara Road, St Julians, J3141 MALTA 
                                        Tel: +356 (0) 2778 0556  
                                    </p> 
                                </div>
                                <div style="width: 100%; overflow: hidden; height: 250px;">  
                                    <iframe class="pr-5 pl-4" 
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3230.93761108928!2d14.4896502!3d35.9240271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11630ec416de0094!2sREGUS%20serviced%20offices%20-%20Dragonara%20Business%20Centre!5e0!3m2!1sen!2s!4v1580304549215!5m2!1sen!2s"
                                        width="100%" height="550" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                        style="border:0; margin-top: -150px;">
                                    </iframe> 
                                </div>
                    </div>
                    <div class="tab-pane fade" id="kosovo-office" role="tabpanel" aria-labelledby="kosovo-office-tab">
                            <div class="detail-box p-4"> 
                                    <h5 class=" font-weight-light ">Kosovo</h5><hr>
                                    <p class=" op-7">
                                        Rr. Lidhja e Prizrenit T-18, K-4, Nr-10 
                                        10000 Prishtina, Kosovo 
                                        Tel: +383 (0)38 411 150 
                                    </p> 
                                </div>
                                 <div style="width: 100%; overflow: hidden; height: 250px;">  
                                    <iframe class="pr-5 pl-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8298.772330613616!2d21.15187279999999!3d42.663562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe28f5717da82ae0c!2sGSI!5e0!3m2!1sen!2s!4v1598356421431!5m2!1sen!2s"
                                        width="100%" height="550" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                        style="border:0; margin-top: -150px;">
                                    </iframe> 
                                </div>
                    </div>
                    <div class="tab-pane fade" id="north-macedonia-office" role="tabpanel" aria-labelledby="north-macedonia-office-tab">
                            <div class="detail-box p-4"> 
                                    <h5 class=" font-weight-light ">North Macedonia</h5><hr>
                                    <p class=" op-7">
                                        Ul. Makedonija, br. 33/2-4 1000 Skopje-Centre 
                                        Republic of North Macedonia 
                                        Tel: +389 (0)2 311 7033

                                    </p> 
                            </div>
                            <div style="width: 100%; overflow: hidden; height: 250px;"> 
                                <iframe class="pr-5 pl-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.2154796776235!2d21.428856415684397!3d41.99565086602818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1354155a2528b0b1%3A0x51bd97ba285f072f!2sGSI%20Translations!5e0!3m2!1sen!2s!4v1580306310153!5m2!1sen!2s"
                                     width="100%" height="550" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    style="border:0; margin-top: -150px;">
                                </iframe> 
                            </div>
                    </div>
                    <div class="tab-pane fade" id="romania-office" role="tabpanel" aria-labelledby="romania-office-tab">
                        <div class="detail-box p-4"> 
                                <h5 class=" font-weight-light ">Romania</h5><hr>
                                <p class=" op-7">
                                    Str. Buzesti, Nr. 50-52 etaj 11, modul 77, District 1 
                                    011015 Bucharest, Romania 
                                    Tel: +40 37 378 1837 
                                </p>
                        </div>
                        <div style="width: 100%; overflow: hidden; height: 250px;">         
                            <iframe class="pr-5 pl-4" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27095.866549749593!2d26.073044132619888!3d44.451576957711886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b201fe74dd4399%3A0xa3b72245234a61df!2sStrada%20Buze%C8%99ti%2050%2C%20Bucure%C8%99ti%2C%20Romania!5e0!3m2!1sen!2sus!4v1580306387509!5m2!1sen!2sus"
                                    width="100%" height="550" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    style="border:0; margin-top: -150px;">
                            </iframe> 
                        </div>
                    </div> 
                    
                    </div>
                </div>
            </div>
        </div>
    </div> 
<br>
 <div> 
</div> 
@endsection