<!-- Modal -->
<form action="{{ route('user.store') }}" method="POST" name="profile" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="edu-add" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tab-pane" id="location">
            <div class="row" >
                <div class="col-sm-12 ">
                <div class="form-group">
                    <label>School / University</label>
                    <div class="input-group">
                        <input name="university" type="text" class="form-control" placeholder="University Name" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Area of study</label>
                    <div class="input-group">
                        <input name="areaofstudy"  type="text" class="form-control" placeholder="Area of study" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Degree / Master / PHD</label>
                    <div class="input-group">
                        <input name="degree"  type="text" class="form-control" placeholder="Software Engineering" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>From: M</label>
                    <select name="monthES" class="form-control" required>
                    <option disabled="" selected="">Month</option>
                    <option value="01">01</option> 
                    <option value="02">02</option> 
                    <option value="03">03</option> 
                    <option value="04">04</option> 
                    <option value="05">05</option> 
                    <option value="06">06</option> 
                    <option value="07">07</option> 
                    <option value="08">08</option> 
                    <option value="09">09</option> 
                    <option value="10">10</option> 
                    <option value="11">11</option> 
                    <option value="12">12</option> 
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Year</label>
                    <input name="yearES"  type="number" class="form-control" placeholder="Year" required>
                </div>
                </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>To: M</label>
                    <select name="monthEE" class="form-control" id="myMonth" >
                    <option disabled="" selected="">Month</option>
                    <option value="01">01</option> 
                    <option value="02">02</option> 
                    <option value="03">03</option> 
                    <option value="04">04</option> 
                    <option value="05">05</option> 
                    <option value="06">06</option> 
                    <option value="07">07</option> 
                    <option value="08">08</option> 
                    <option value="09">09</option> 
                    <option value="10">10</option> 
                    <option value="11">11</option> 
                    <option value="12">12</option> 
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Year</label>
                    <input name="yearEE" type="number" class="form-control" placeholder="End Year" id="myYear" >
                </div>
                </div>  
        </div>
        </div>
      </div>
      <div class="modal-footer"> 
        <button type="submit" class="btn btn-success" value="edu" name="type">Add</button>
      </div>
    </div>
  </div>
</div>  
</form>