@extends('layouts.app') @section('content')
 
<style>
    .modal-open {
        padding-right: 0px !important;
    }

    .modal-full {
        min-width: 100%;
        margin: 0;
    }

    .modal-full .modal-content {
        min-height: 100vh;
    }

    .coloredIcon {
        color: #D00C27
    }
    .coloredIcon2 {
        color: #24a9ea
    }
    .carLogo{
        width: 142px;
        height: 142px;
    }

    .myBtnO {
     background-color: #D00C27;
     color: whitesmoke;
    }
    .myBtnO:hover {
     background-color: #ffffff;
     color: #ff8000;
    }
    .myBtnB {
     background-color: #24a9ea;
     color: whitesmoke;
    }
    .myBtnB:hover {
     background-color: #ffffff;
     color: #24a9ea;
    }

    .faiconColor{
        color: #D00C27
    }
    .choice {
        background-image: linear-gradient(
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.3)
    ), url("../img/internationalA.jpg"); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;  
    }
    .choice2 {
        background-image: linear-gradient(
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.3)
    ), url("../img/internationalC.jpg"); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;  
    }
    .choice3 {
        background-image: linear-gradient(
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.3)
    ), url("../img/internationalB.jpg"); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%; 
    display: block;
    }
    #j_legal {
        background-image: linear-gradient(
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.3)
    ), url("../img/legal4_bg.jpg"); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%; 
    }
    #j_engineering {
        background-image: linear-gradient(
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.3)
    ), url("../img/jumbotron_bg.jpg"); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%; 
    }
    #j_financial {
        background-image: linear-gradient(
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.3)
    ), url("../img/financ2_bg.jpeg"); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%; 
    }
    #j_ngo {
        background-image: linear-gradient(
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.3)
    ), url("../img/goverment_bg.jpg"); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%; 
    display: block;
    }
    #j_science {
        background-image: linear-gradient(
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.3)
    ), url("../img/science_bg.jpg"); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%; 
    display: block;
    }
    #j_balkan {
        background-image: linear-gradient(
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.3)
    ), url("../img/dubrovnik.jpg"); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%; 
    display: block;
    }
   
    /* Thick red border */
    hr.new4 {
    border: 1px solid white;
    }
    .modal-open {
        padding-right: 0px !important;
    }
    .modal-full {
        min-width: 100%;
        margin: 0;
    }
    .modal-full .modal-content {
        min-height: 100vh;
    }
    .coloredIcon {
        color: #D00C27
    }
    .coloredIcon2 {
        color: #24a9ea
    }
    .carLogo{
        width: 142px;
        height: 142px;
    }
    .myBtnO {
     background-color: #D00C27;
     color: whitesmoke;
    }
    .myBtnO:hover {
     background-color: #ffffff;
     color: #ff8000;
    }
    .myBtnB {
     background-color: #24a9ea;
     color: whitesmoke;
    }
    .myBtnB:hover {
     background-color: #ffffff;
     color: #24a9ea;
    }
</style>
 
<title>Benefits</title>   
<div class="customPad bg-light text-center pb-3"> 
  <p class="text-primary" style="font-size: 20px; font-size: 15px; padding-top: 3%">
    <a href="/" style="font-weight: 500"><b>Home</b></a> 
    <a class="px-2 "><small><i class="fas fa-chevron-right"></i></small></a> 
    <a ><b>Benefits</b></a> 
  </p>  
</div> 
<section class="about-area pt-60">
    <div class="container">

        <div class="row" style="padding-top:5%;"> 
        </div>
        <div class="row menu_style1">
            <div class="col-lg-4 col-md-6">
                <div class="single_menu_list">
                    <img src="/assets/img/benefit1.svg" alt="">
                    <div class="menu_content">
                        <h4>Staff<span></span></h4>
                        <p>
                         Staff costs are significantly lower than Western Europe or USA with savings of between 30% to 70%, depending on skill levels and industry sector.
                          This reflects lower wages costs in Kosovo and North Macedonia, but we prefer to pay staff well and we advise our clients accordingly. 
                          If you invest in training staff, it makes sense to benefit in the long term from their skills and ongoing experience.
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_menu_list">
                    <img src="/assets/img/benefit2.svg" alt="">
                    <div class="menu_content">
                        <h4>No hidden cost</h4>
                        <p>
                          Our contracts are simple and transparent.  We provide you with details of the employment costs, showing wages and taxes, direct overhead cost and our management charge, 
                          so you know exactly what you are paying for. No hidden costs or surprises. 
                          Companies in our sector may prefer to keep the real wages a secret so that they can apply bigger markups.  
                          We prefer open and honest relationships with our clients.
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_menu_list">
                    <img src="/assets/img/benefit3.svg" alt="">
                    <div class="menu_content">
                        <h4>Employment standards</h4>
                        <p>
                          We work to UK employment standards but go further in our treatment of staff. Although our staff work directly for different clients, they are our 
                          colleagues too and we ensure they work in comfortable offices, with heating, air conditioning, safe, friendly comfortable surroundings.   
                          Tea, coffee, water and other refreshments are provided free of charge. All our offices have a fantastic atmosphere. In addition, 
                          we arrange staff lunches, dinners, Christmas celebrations and always provide a sympathetic and caring HR approach.
                        </p> 
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row menu_style1">
            <div class="col-lg-4 col-md-6">
                <div class="single_menu_list">
                    <img src="/assets/img/benefit4.svg" alt="">
                    <div class="menu_content">
                        <h4>Connectivity</h4>
                        <p>
                          Excellent connectivity: our offices are all equipped with fast internet connections and we use Zoom, Skype and other means of conferencing and 
                          communication. It is not just the internet that is fast; Pristina and Skopje are less than 90 minutes apart by car and both can be reached by 
                          direct flights of under three and a half hours from anywhere in Europe. It is always a pleasure to personally meet our clients and we will collect
                           you from the airport when you arrive.
                        </p> 
                    </div>
                </div>
            </div> 
            <div class="col-lg-4 col-md-6">
                <div class="single_menu_list">
                    <img src="/assets/img/benefit5.svg" alt="">
                    <div class="menu_content">
                        <h4>HR System</h4>
                        <p>
                          We use BreatheHR to manage all HR matters, allowing you to easily approve holidays, view contracts and assess previous staff reviews and targets. It is cloud based and therefore easily accessible.  
                          We can integrate with your own HR system or install BreatheHR across your company or group, if you do not have an advanced HR management system.                       
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_menu_list">
                    <img src="/assets/img/benefit6.svg" alt="">
                    <div class="menu_content">
                        <h4>Skilled Workforce</h4>
                        <p>
                          Candidates have strong language skills; many staff are multilingual and all are fluent in two languages, including English.
                          The Balkan region work ethic is strong and we have been able to recruit people with a “can do” attitude, always wanting to learn more.
                          You can hire highly skilled individuals for the long term or for short term specific projects.
                        </p> 
                    </div>
                </div>
            </div>             
        </div>
        <div class="row menu_style1">  
            <div class="col-lg-4 col-md-6">
                <div class="single_menu_list">
                    <img src="/assets/img/benefit7.svg" alt="">
                    <div class="menu_content">
                        <h4>Stability</h4>
                        <p>
                            You can retain good staff for the long term more easily, as moving jobs regularly is less common in the Balkans. This provides continuity and stability in your business.
                            It is desirable to work for a British run company in this region and by paying staff well, they are unlikely to seek employment elsewhere.                           
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_menu_list">
                    <img src="/assets/img/benefit8.svg" alt="">
                    <div class="menu_content">
                        <h4>Communication</h4>
                        <p>
                            We are no more than three hours flight from most cities in Europe and with modern conferencing software  your staff are accessible at any time,
                             enabling hands on training. We recommend a weekly call as a minimum with your staff and if you have any issues you want to discuss or problems 
                             which we may be able to help you solve, you can contact us direct. We are British and on site, with an extensive history of working in the region.
                        </p>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_menu_list">
                    <img src="/assets/img/Infrastructure_and_speed.svg" alt="">
                    <div class="menu_content">
                        <h4>Infrastructure and Speed</h4>
                        <p>
                           You will have no office overhead costs nor a need to expand and move to bigger offices.  
                           We can react quickly to your staffing needs as we retain regularly refreshed databases of available staff and can 
                           often arrange staff within days; ideal for new projects where you have to move quickly.  
                           We always retain spare office space and computer equipment and you can treat the staff in our office as your own.
                        </p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection