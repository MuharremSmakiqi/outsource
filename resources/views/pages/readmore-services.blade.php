@extends('layouts.app') @section('content')

<title>Staffing Options</title>   
<div class="customPad bg-light text-center pb-3"> 
  <p class="text-primary" style="font-size: 20px; font-size: 15px; padding-top: 3%">
    <a href="/" style="font-weight: 500"><b>Home</b></a> 
    <a class="px-2 "><small><i class="fas fa-chevron-right"></i></small></a> 
    <a ><b>Staffing Options</b></a> 
  </p>  
</div>  
<section class="shadow-lg p-3 bg-white rounded ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center ">
                <nav class="nav-justified ">
                    <div class="nav nav-tabs " id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="staffing-options-tab" data-toggle="tab" href="#staffing-options" role="tab" aria-controls="staffing-options" aria-selected="true"><i class="fas fa-users"></i> Staffing Options</a>
                        <a class="nav-item nav-link" id="it-tab" data-toggle="tab" href="#it" role="tab" aria-controls="it" aria-selected="false"><i class="fas fa-laptop-code"></i> IT</a>
                        <a class="nav-item nav-link" id="accounts-tab" data-toggle="tab" href="#accounts" role="tab" aria-controls="accounts" aria-selected="false"> <i class="fas fa-hand-holding-usd"></i>  Accounts</a>
                        <a class="nav-item nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false"><i class="fas fa-cubes"></i>  Design</a>
                        <a class="nav-item nav-link" id="admin-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false"><i class="fas fa-server"></i> Admin</a>
                    </div>
                </nav>
                <div class="tab-content  justify-content-center" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="staffing-options" role="tabpanel" aria-labelledby="staffing-options-tab"> 
                        <h5 class="card-title mb-0"></h5>  
                        <div class="row the_content_wrapper">  
                            <div class="mt-5">
                                  <h6 class="text-left"><span ><strong>STAFFING SOLUTIONS</strong></span></h6>
                                <p class="text-justify" style="font-size: 15px">
                                    <img src="/assets/img/staffSolutions.svg" height="200px" class="float-right"  alt="GSI">
                                    The staff we recruit are employed by GSI Outsourcing, but they work directly for you.  
                                    Invoicing is simple – you receive just one invoice per month that covers all your staff salaries and contracted fixed fees.<br>
                                    We take care of all the local employment regulations and our inclusive charges are easy to budget.
                                </p>
                                <p class="text-left">
                                    Remember that we would not be adding 13.8% employer’s national insurance, or 3% pension contribution, which employers must pay in the UK – another important saving to consider.
                                </p> 
                            </div> 
                        </div>
                               <hr>
                        <div class="row the_content_wrapper">  
                            <div class="mt-3">
                            
                            <h6 class="text-left"><strong>KEY FEATURES:</strong></span></h6>
                            <ul class="text-left">
                                 {{-- <img src="/assets/img/keyFeatures.svg" height="250px" class="float-left"  alt="GSI"> --}}
                                <li> <p class="text-justify" style="font-size: 15px; margin-bottom: 0.1rem !important;">Let us know your staff requirements and we will handle the entire recruitment process. </p> </li>
                                <li> <p class="text-justify" style="font-size: 15px; margin-bottom: 0.1rem !important;"> We can review all the applicants and provide a shortlist of potential candidates and where required we can also conduct the interviews on your behalf with experienced HR staff and managers. It is important to remember we are only 3 hours away from all European destinations so you could conduct the interviews yourself if you wanted to. </p> </li>
                                <li> <p class="text-justify" style="font-size: 15px; margin-bottom: 0.1rem !important;"> We can also arrange to send candidates to you for interview and can organise all travel and visa arrangements. </p> </li>
                                <li> <p class="text-justify" style="font-size:  15px; margin-bottom: 0.1rem !important;"> Online interviews can also be carried out in our offices. </p> </li>
                                <li> <p class="text-justify" style="font-size:  15px; margin-bottom: 0.1rem !important;"> There are huge recruitment cost savings to be made compared to using traditional employment methods. </p> </li>
                            </ul>
                            </div>
                        </div>
                        <div class="w-100 justify-content-center mt-5 mb-5"> 
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="it" role="tabpanel" aria-labelledby="it-tab"> 
                        <div class="row pt-5">
                              <div class="col-md-6 rounded" style="background-image: url('/assets/img/cIT.jpg');"></div>
                        <div class="col-md-6">
                            <h5 class="card-title mb-0"></h5>
                            <h6 class="pb-2 text-left pl-3"><span ><strong>IT Solutions</strong></span></h6>
                            <ul class="list-group list-group-flush ">
                                    <p class="text-justify pl-3 pt-1 border-bottom">Programming – all levels.</p>	
                                    <p class="text-justify pl-3 pt-1 border-bottom">Networks.</p>			
                                    <p class="text-justify pl-3 pt-1 border-bottom">Web development – back-end / front-end / full stack.</p>	
                                    <p class="text-justify pl-3 pt-1 border-bottom">Cryptology, forensics and data recovery.</p>	
                                    <p class="text-justify pl-3 pt-1 border-bottom">Technical support.</p>
                            </ul>
                        </div>
                         </div>
                        <p class="text-justify pt-3">
                            You can hire people for a specific project, for one month, twelve months or whatever period you require  
                            with no long term commitment. When we advertise for staff in any one of the areas above, we receive in
                             excess of 50 applications within the first few days and we already have a substantive database of potential candidates available.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="accounts" role="tabpanel" aria-labelledby="accounts-tab">
                       <div class="row pt-5">
                           	<div class="col-md-6 rounded" style="background-image: url('/assets/img/cFinancial.jpg');"></div>
                            <div class="col-md-6">
                                <h5 class="card-title mb-0"></h5>
                                <h6 class="pb-2 text-left pl-3"><span ><strong>Financial and Accounting</strong></span></h6>
                                <ul class="list-group list-group-flush ">
                                        <p class="text-justify pl-3 pt-1 border-bottom">Accounts receivable/payable, credit control.</p>
                                        <p class="text-justify pl-3 pt-1 border-bottom">Data entry – large or small.</p>	
                                        <p class="text-justify pl-3 pt-1 border-bottom">Payroll processing, CIS returns, HR and VAT returns.</p>
                                        <p class="text-justify pl-3 pt-1 border-bottom">Bank, supplier and customer reconciliations.</p>
                                        <p class="text-justify pl-3 pt-1 border-bottom">Management accounts preparation.</p>
                                </ul>
                            </div>
                            <p class="text-justify pt-3">
                                Our management team has a strong background in this sector so we can bring experience and knowledge to the recruitment process.
                            </p> 
                       </div>
                    </div>
                    <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                        <div class="row pt-5">
                            	<div class="col-md-6 rounded" style="background-image: url('/assets/img/asddd.jpg');"></div>
                                <div class="col-md-6">
                                    <h5 class="card-title mb-0"></h5>
                                    <h6 class="pb-2 text-left pl-3"><span ><strong>Design</strong></span></h6>
                                    <ul class="list-group list-group-flush ">		
                                        <p class="text-justify pl-3 pt-1 border-bottom">AutoCAD, BIM, Schucal, ReynaPro.</p>	
                                        <p class="text-justify pl-3 pt-1 border-bottom">Qualified architects.</p>	
                                        <p class="text-justify pl-3 pt-1 border-bottom">Graphic Designers.</p>	
                                        <p class="text-justify pl-3 pt-1 border-bottom">Architectural Technicians.</p>	 			
                                        <p class="text-justify pl-3 pt-1 border-bottom">Civil engineering.</p>
                                    </ul>
                                </div>
                                <p class="text-justify pt-3">
                                    This is a sector where significant cost savings can be achieved compared to UK salaries.  We can recruit specifically but we can also provide access to our database of available staff. 
                                </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                        <div class="row pt-5"> 
                              <div class="col-md-6 pb-3"> 
                                  <h6 class="pb-2 text-left"><span ><strong>Administrative Business Support</strong></span></h6>
                                  <p class="text-left">Whatever administrative support your business needs, GSI can help you save money and perform better. </p>
                                <p class="text-justify" style="font-size: 15px"> 
                                    Employing an administrator, secretary, or PA in your office full or part time is costly and the person you employ may not be skilled in all areas that you need them to be. We can provide you with intelligent, experienced, and skilled personnel that can cover all your needs at a fraction of the cost. 
                            </div> 
                           <div class="col-md-6 rounded" style="background-image: url('/assets/img/adminSupport.jpg');"></div> 
                            {{--  <div class="col-md-6 rounded" style=" ">
                             <img src="/assets/img/adminSupport.jpg" class="rounded" alt="" height="200px">
                            </div>--}}
                            <div class="col-md-12"> 
                            <h6 class="text-left"><strong>Some of the areas that we can provide staff for are: </strong></span></h6>
                            <ul class="text-left">
                                 {{-- <img src="/assets/img/keyFeatures.svg" height="250px" class="float-left"  alt="GSI"> --}}
                                <li> <p class="text-justify" style="font-size: 15px; margin-bottom: 0.1rem !important;"><b style="color: black;">Database entry</b> – let one of our administrative team enter all your contacts, business cards into your CRM. Research and create databases of target customers, suppliers – locally, nationally, and internationally. Let GSI save you time and money by creating and updating your databases.</p> </li>
                                <li> <p class="text-justify" style="font-size: 15px; margin-bottom: 0.1rem !important;"><b style="color: black;">Diary management</b> – if the you feel like you are running around like a headless chicken then you need one of our experienced administrative team to take over your diary and help you manage your activities.  Outsourcing your diary management service to GSI can have huge benefits for your company. Especially when it comes to improving both time management skills and freeing up valuable in-house staff working hours. </p> </li>
                                <li> <p class="text-justify" style="font-size: 15px; margin-bottom: 0.1rem !important;"><b style="color: black;">Email management</b> – where you a self-employed individual or a small or medium sized company, emails play a large part in business life.  The problem is that email management is time consuming and distracting. Management and employees spend a great deal of time opening, reading </p> </li>
                                <li> <p class="text-justify" style="font-size:  15px; margin-bottom: 0.1rem !important;"><b style="color: black;">Online research</b> - why waste your valuable time spending hours or days or even weeks online researching?  One of our experienced researchers can quickly identify the right websites to be researching and extracting the right information.  Because they spend everyday doing this type of research their knowledge is current and constantly being updated of where to look.  It does not matter if the websites are in a different language – we have our own translation company to assist us.</p> </li>
                                <li> <p class="text-justify" style="font-size:  15px; margin-bottom: 0.1rem !important;"><b style="color: black;">Social Media</b> – there is no doubt that in todays modern business environment social media marketing and promotion is key to a business’ success.  Whether its LinkedIn, Twitter, Instagram, TikTok, or Facebook it takes a lot of valuable time regularly providing content and uploading it and monitoring the results.  If one of our administrative team does this for you then you can spend more time driving the business forward.</p> </li>
                                <li> <p class="text-justify" style="font-size:  15px; margin-bottom: 0.1rem !important;"><b style="color: black;">Telephone answering</b> – missing a call can damage your business, if someone is wanting to place an order and there is reply, they go elsewhere, and the business is lost.  Never miss another call if one of our administrative team is answering your call, simply divert your business or mobile number to us and the call will be answered in your business name and details will taken and forwarded to you by email or sms.  We can even email your company brochure or marketing materials to contacts that call.  The service can be tailored to your individual business requirements at a much lower cost than employing a receptionist in your office. </p> </li>
                                <li> <p class="text-justify" style="font-size:  15px; margin-bottom: 0.1rem !important;"><b style="color: black;">Website</b> – It is often forgotten that websites are organic business tools.  You can no longer publish your website and sit back; those days are long gone!  To ensure that your website is current, keeps driving traffic towards it and is noticed by the major search engines it needs to be fed with new content, news, images, and regular updating of keywords.  GSI can do all this remotely for you at a much lower cost than employing someone in your office.  If you do not have a website yet GSI can build you a single or multi-language modern website and maintain it for you if required. </p> </li>
                            </ul>
                                </p>
                                <p class="text-left">
                                    Remember that we would not be adding 13.8% employer’s national insurance, or 3% pension contribution, which employers must pay in the UK – another important saving to consider.
                                </p> 
                            </div> 
                            </div> 
                            <div class="row pt-3"> 
                            	<div class="col-md-6 rounded" style="background-image: url('/assets/img/cAdmin.jpg');"></div>
                                <div class="col-md-6">
                                    <h5 class="card-title mb-0"></h5> 
                                    <ul class="list-group list-group-flush ">		
                                        <p class="text-justify pl-3 pt-1 border-bottom">MS Office skills, document layout and drafting.</p>	
                                        <p class="text-justify pl-3 pt-1 border-bottom">Document management, indexing and workflows.</p>	
                                        <p class="text-justify pl-3 pt-1 border-bottom">Logistics and shipping.</p>	
                                        <p class="text-justify pl-3 pt-1 border-bottom">Receptionist and PA support.</p>	 			
                                        <p class="text-justify pl-3 pt-1 border-bottom">Web analytics, telesales, marketing and research.</p>
                                    </ul>
                                </div>
                                <p class="text-justify pt-3">
                                It is not possible to list all administrative areas but we can recruit candidates and train them in almost any area of work with significant cost savings. 
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script src="{{ asset('/assets/js/myJS.js') }}" defer></script>