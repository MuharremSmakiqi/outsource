<!--Modal Start -->
<div id="modalPhone" class="modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Fill in the form, we will call you soon !! 
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
                                            <input type="text" class="form-control noBorder" placeholder="Full Name*" name="name" required> 
                                            <input class="form-control noBorder" id="phoneID" name="phoneID" value="123" hidden>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control noBorder" placeholder="Company Name" name="companyName" > 
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-3">
                                            <input class="form-control noBorder" type="number" placeholder="Telephone number*" name="phone" required>
                                            <input type="email" class="form-control noBorder" id="emailId" name="emailId" value="info@gsioutsourcing.com" hidden>
                                        </div>
                                    </div> 
                                        <div class="col-lg-12"> 
                                         <div class="input-group-prepend bg-white">
                                            <div class="input-group-text bg-white border-0">
                                            <input type="checkbox" aria-label="Checkbox for following text input" required>  
                                            <label class="pl-2 pt-1"> Agree to terms and
                                                conditions. <a href="/terms-service" style="color: deepskyblue">Read terms</a></label></small>
                                            </div>
                                        </div>
                                    </div>
                                     
                                    <div class="col-lg-12 pt-5">
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