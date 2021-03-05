<div class="container">
<section class="team-area pb-100 pt-3" id="team">  
<!--Modal Start -->
<div id="modalCentered" class="modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Email to: 
                  <input class="text-primary" name="bookId" style="border: none" readonly> 
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body text-center">
                 <div class="tab-content" id="nav-tabContent">  
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
                                            <input type="email" class="form-control noBorder" id="emailId" name="emailId" placeholder="emailId" hidden>
                                            {{-- <input class="text-primary" name="emailId" value="emailId" style="border: none" readonly style="font-size: 10px !important">   --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-3">
                                            <textarea class="form-control noBorder" rows="5" id="comment" name="message" placeholder="Message" minlength="10" required></textarea> 
                                        </div> 
                                        <div class="custom-control custom-checkbox">
                                            <small> <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" required>
                                            <label class="custom-control-label" for="customCheck" id="check"> Agree to terms and
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
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
 <!--Modal Ends -->

<div class="row">
    <div class="text-left">
        <div class="max_auto">
            <h4 class="blog-card-caption d-flex justify-content-center text-primary">
                <b>OUR ASSOCIATES</b>
            </h4>
            <p style="text-decoration: underline; font-size:20px" class="text-primary">
                ___________
            </p>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/andrew.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Andrew Stuart
                            <span>Chief Advisor</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Andrew Stuart" data-email-id="andrew.stuart@gsiassociates.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>     
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/dennis.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Dennis Capstick
                            <span>CTO</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Dennis Capstick" data-email-id="dennis.capstick@gsiassociates.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/helen.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Helen McIntyre
                            <span>Finance</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Helen McIntyre" data-email-id="helen.mcintyre@gsiassociates.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/anthony.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Anthony Stuart
                            <span>Finance</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Anthony Stuart" data-email-id="anthony.stuart@gsiassociates.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/james.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            James Tweedie
                            <span
                                >Associate / Construction Procurement
                                Specialist</span
                            >
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="James Tweedie" data-email-id=""> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/radu.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Radu Irimie
                            <span>Chief Legal Advisor</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Radu Irimie" data-email-id=""> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/agroni.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Agron Podrimqaku
                            <span>Finance</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                             <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Agron Podrimqaku" data-email-id="Agron.Podrimqaku@gsiassociates.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/merita.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Merita Kida
                            <span>Finance</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                             <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Merita Kida" data-email-id="merita.kida@gsiassociates.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/safeti.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Safet Haxhijaha
                            <span>Finance</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                             <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Safet Haxhijaha" data-email-id="safet.haxhijaha@gsiassociates.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/bledari.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Bledar Qarkaxhija
                            <span>Finance</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                             <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Bledar Qarkaxhija" data-email-id="bledar.qarkaxhija@gsiassociates.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/muharremi.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Muharrem Smakiqi
                            <span>Web Developer</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Muharrem Smakiqi" data-email-id="muharrem.smakiqi@gsiassociates.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>     
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/edona.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Edona Idrizaj
                            <span>Business Development Executive</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                             <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Edona Idrizaj" data-email-id="edona.idrizaj@gsiassociates.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/genta.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Gentiana Ibra
                            <span
                                >Communications and Marketing
                                Executive</span
                            >
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                             <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Gentiana Ibra" data-email-id="gentiane.ibra@gsiassociates.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="col-md-3 pb-3">
            <div class="single-team">
                <img src="/members/boris.jpg" alt />
                <div class="team-hover">
                    <div class="team-content pb-5">
                        <h4>
                            Boris Jankoski
                            <span>Logistics and Security</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                             {{-- <li>
                                <a href="#modalCentered" data-toggle="modal" data-book-id="Boris Jankoski" data-email-id="jankoskiskopje@gmail.com"> 
                                    <i class="fas fa-envelope text-white"></i>
                                </a>    
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>

<script>
 //triggered when modal is about to be shown
$('#modalCentered').on('show.bs.modal', function(e) {

    //get data-id attribute of the clicked element
    var bookId = $(e.relatedTarget).data('book-id');
    var emailId = $(e.relatedTarget).data('email-id');

    //populate the textbox
    $(e.currentTarget).find('input[name="bookId"]').val(bookId);
    $(e.currentTarget).find('input[name="emailId"]').val(emailId);
}); 
</script>