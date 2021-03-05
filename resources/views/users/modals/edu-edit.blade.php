<!-- Modal -->
<form action="{{ route('edu.store') }}" method="POST" name="profile" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="edu-edit_{{$education->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tab-pane" id="location">
            <div class="row" >
                <div class="col-sm-12 ">
                <div class="form-group">
                   <label class="float-left fontYear">School / University</label>
                    <div class="input-group">
                        <input required name="university" type="text" class="form-control" value=" {{$education->university ?? 'Not completed'}} ">
                        <input type="hidden" name="id" value="{{$education->id ?? 'Not completed'}} ">
                        <span class="input-group-addon"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                   <label class="float-left fontYear">Area of study</label>
                    <div class="input-group">
                        <input required name="areaofstudy"  type="text" class="form-control" value="{{$education->areaofstudy ?? 'Not completed'}}">
                        <span class="input-group-addon"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                   <label class="float-left fontYear">Degree</label>
                    <div class="input-group">
                        <input required name="degree"  type="text" class="form-control" value="{{$education->degree ?? 'Not completed'}}">
                        <span class="input-group-addon"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                   <label class="float-left fontYear">From: M</label>
                    <select name="monthES" class="form-control">
                    <option selected="{{$education->monthES ?? 'Not completed'}}" >{{$education->monthES ?? 'Not completed'}}</option> 
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
                    <input required name="yearES"  type="number" class="form-control" value="{{$education->yearES ?? 'Not completed'}}" >
                </div>
                </div>
            <div class="col-md-3">
                <div class="form-group">
                   <label class="float-left fontYear">To: M</label>
                    <select name="monthEE" class="form-control" id="myMonth">
                    <option selected="{{$education->monthEE ?? 'Not completed'}}">{{$education->monthEE ?? 'Not completed'}}</option>
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
                    <input required name="yearEE" type="number" class="form-control" value="{{$education->yearEE ?? 'Not completed'}}" id="myYear">
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