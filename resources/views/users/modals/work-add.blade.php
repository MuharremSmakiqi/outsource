<!-- Modal -->
<form action="{{ route('user.store') }}" method="POST" name="profile" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="work-add" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Work</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tab-pane" id="location">
          <div class="row">
            <div class="col-sm-12 ">
            <div class="form-group">
                <label>Company Name</label>
                <div class="input-group">
                    <input name="company"  type="text" class="form-control" placeholder="Company Name" required>
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Country</label>
                <div class="input-group">
                    <input name="wcountry"  type="text" class="form-control" placeholder="Country" required>
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Title</label>
                <div class="input-group">
                    <input name="roletitle"  type="text" class="form-control" placeholder="Role Title" required>
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>From: M</label>
                <select name="monthWS" class="form-control" required>
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
                <input name="yearWS"  type="number" class="form-control" placeholder="Year" required>
            </div>
            </div>
        <div class="col-md-3 ">
            <div class="form-group">
                <label>To: M</label>
                <select name="monthWE" class="form-control" id="myMonthW">
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
                <input name="yearWE" type="number" class="form-control" placeholder="Year" id="myYearW">
            </div>
            </div>  
    </div>
        </div>
      </div>
      <div class="modal-footer"> 
        <button type="submit" class="btn btn-success" value="work" name="type">Add</button>
      </div>
    </div>
  </div>
</div>   
</form>