<!-- Modal -->
<form action="{{ route('work.store') }}" method="POST" name="profile" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="work-edit_{{$work->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Work</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tab-pane" id="location">
          <div class="row">
            <div class="col-sm-12 ">
            <div class="form-group">
               <label class="float-left fontYear">Company Name</label>
                <div class="input-group">
                    <input name="company"  type="text" class="form-control" value=" {{$work->company ?? 'Not completed'}}">
                    <input type="hidden" name="id" value="{{$work->id ?? 'Not completed'}} ">
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
               <label class="float-left fontYear">Country</label>
                <div class="input-group">
                    <input name="wcountry"  type="text" class="form-control" value="{{$work->wcountry ?? 'Not completed'}}">
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
               <label class="float-left fontYear">Title</label>
                <div class="input-group">
                    <input name="roletitle"  type="text" class="form-control" value="{{$work->roletitle ?? 'Not completed'}}">
                    <span class="input-group-addon"></span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
               <label class="float-left fontYear">From: M</label>
                <select name="monthWS" class="form-control">
                <option selected="{{$work->monthWS ?? 'Not completed'}}">{{$work->monthWS ?? 'Not completed'}}</option>
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
               <label class="float-left fontYear">Year</label>
                <input name="yearWS"  type="number" class="form-control" value="{{$work->yearWS ?? 'Not completed'}}" >
            </div>
            </div>
        <div class="col-md-3 ">
            <div class="form-group">
               <label class="float-left fontYear">To: M</label>
                <select name="monthWE" class="form-control" id="myMonthW">
                <option selected="{{$work->monthWE ?? 'Not completed'}}">{{$work->monthWE ?? 'Not completed'}}</option>
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
               <label class="float-left fontYear">Year</label>
                <input name="yearWE" type="number" class="form-control" value="{{$work->yearWE ?? 'Not completed'}}" id="myYearW">
            </div>
            </div>  
    </div>
        </div>
      </div>
      <div class="modal-footer"> 
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>  
</form>