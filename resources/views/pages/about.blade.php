@extends('layouts.app') @section('content')
<style>
    .ptb-50 {
        padding: 50px 50px;
    }

    .section_bg_gray {
        background: rgb(51, 98, 120);
        background: linear-gradient(0deg, rgba(51, 98, 120, 0.711922268907563) 0%, rgba(51, 98, 120, 0.8435749299719888) 0%, rgba(255, 255, 255, 1) 100%);
    }

    .single_what_we_do {
        background-color: #ffffff;
        text-align: center;
        padding: 0 35px;
        border-radius: 10px;
        position: relative;
        margin-bottom: 30px;
        -webkit-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    .single_what_we_do:hover {
        -webkit-box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2);
    }

    .single_what_we_do .top_line {
        position: absolute;
        top: 0;
        left: 44%;
        background-color: #fc5251;
        width: 12%;
        height: 3px;
    }
    .single_what_we_do .top_line {
        position: absolute;
        top: 0;
        left: 44%;
        background-color: #fc5251;
        width: 12%;
        height: 3px;
    }
    .single_what_we_do .top_line_orange {
        position: absolute;
        top: 0;
        left: 44%;
        background-color: #ff8b01;
        width: 12%;
        height: 3px;
    }
    .single_what_we_do .top_line_orange {
        position: absolute;
        top: 0;
        left: 44%;
        background-color: #ff8b01;
        width: 12%;
        height: 3px;
    }
    .single_what_we_do .top_line_blue {
        position: absolute;
        top: 0;
        left: 44%;
        background-color: #0181d2;
        width: 12%;
        height: 3px;
    }
    .single_what_we_do .top_line_blue {
        position: absolute;
        top: 0;
        left: 44%;
        background-color: #0181d2;
        width: 12%;
        height: 3px;
    }
    .single_what_we_do .top_line_green {
        position: absolute;
        top: 0;
        left: 44%;
        background-color: #49bc52;
        width: 12%;
        height: 3px;
    }
    .single_what_we_do .top_line_green {
        position: absolute;
        top: 0;
        left: 44%;
        background-color: #49bc52;
        width: 12%;
        height: 3px;
    }

    .single_what_we_do .what_we_do_figure {
        padding: 40px 0;
    }
    .single_what_we_do .what_we_do_figure img {
        margin: 0 auto;
    }
    .single_what_we_do .what_we_do_title {
        font-weight: 600;
        font-size: 22px;
        padding-bottom: 35px;
        margin: 0;
        color: #2b353a;
    }
    .single_what_we_do .what_we_do_content {
        padding-bottom: 65px;
        color: #2b353a;
    }
    .single_what_we_do .what_we_do_icon {
        position: absolute;
        bottom: -9px;
        left: 47%;
        color: #fff;
        background-color: #336278;
        width: 30px;
        height: 30px;
        text-align: center;
        border-radius: 50%;
        -webkit-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .single_what_we_do .what_we_do_icon i {
        font-size: 24px;
        text-align: center;
        padding: 2px 3px 2px 5px;
    }
</style> 
<title>About Us</title>   
<div class="customPad bg-light text-center pb-3"> 
  <p class="text-primary" style="font-size: 20px; font-size: 15px; padding-top: 3%">
    <a href="/" style="font-weight: 500"><b>Home</b></a> 
    <a class="px-2 "><small><i class="fas fa-chevron-right"></i></small></a> 
    <a ><b>About Us</b></a> 
  </p>  
</div> 
<div class="container mt-5 ">  
    <div class="col-lg-12">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading"><strong>{!! session('success') !!}</strong></h4>
            <p>Our team member will get back in touch with you soon.</p>
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
         <p >
            <b>
                GSI Outsourcing is a British owned and managed outsourcing service provider offers staffing and managed outsourcing solutions in the heart of Europe.
                
            </b>
         </p>
         <p   style="padding-bottom:4%">
            <b>
               As a British owned and managed company, we share the same professional ethics, standards, working hours and mentality, as you do, and this makes 
                communication and collaboration so much easier. We currently have three offices in Kosovo and North Macedonia and have been established in the Balkans since 2009.
            </b>
         </p>
        <div class="row pb-5">
             <div class="col-lg-6 col-md-12 col-sm-12 border">
                <div class="single_what_we_do">
                    <div class="top_line"></div>
                    <div class="pb-3"><br>
                        {{-- <img src="/assets/img/one.svg" alt="" class="img-responsive" /> --}}
                        <img class="scale-with-grid" src="/assets/img/prishtina.svg" alt="Kosovo" height="200px" />
                    </div>
                    <h3>Kosovo <small>(Prishtinë)</small></h3>
                    <div class="what_we_do_content">
                        We also have resources in Tirana, Albania, further extending our sources of qualified and experienced personnel.
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 border">
                <div class="single_what_we_do">
                    <div class="top_line_orange"></div>
                    <div class="pb-3"><br>
                        <img class="scale-with-grid" src="/assets/img/scopje.svg" alt="Macedonia" height="200px" />
                    </div>
                    <h3>Macedonia <small>(Skopje)</small></h3>
                    <div class="what_we_do_content">
                        Both offices have access to people with a wide range of skills and we can recruit for most activities.
                    </div> 
                </div>
            </div>
        </div>
    <section style="margin-bottom: 2%; margin-right: 15px">
    <div class="row "> 
            <div class="col-md-4">
                <div class="pad text-primary">
                    <div class="icon mdi mdi-credit-card-multiple">
                      <h5 style="font-weight: 500; ">- Connectivity -</h5> <hr class="hr-white">
                    </div>                    
                    <p >
                       We strive to provide the highest staff quality, processes, service quality and HR systems, as well as providing high quality office space, fibre optic connections and quality equipment.
                    </p>                   
                </div>
            </div>
            <div class="col-md-4"> 
                    <div class="pad text-primary">
                        <div class="icon linearicons-wallet"></div>
                        <h5 style="font-weight: 500; ">- Flexibility -</h5><hr class="hr-white">
                       <p >
                        Our approach is flexible and emphatic to the needs of our clients. We can tailor our services to your specific requirements and arrange staff at all expertise levels, from basic administration to senior level management.
                    </p>
                    </div> 
            </div>
            <div class="col-md-4">
                <div class="pad text-primary">
                    <div class="icon mdi mdi-credit-card-multiple"></div>
                    <h5 style="font-weight: 500; ">- GSI Network -</h5><hr class="hr-white">
                    <p >
                      Through our GSI network we draw upon much expertise including translation services, international financial advice, and many other business support services.
                    </p>
                </div>
            </div>  
    </div> 
</section> 
@include('pages.team') 
</div>
<br>  
@endsection
