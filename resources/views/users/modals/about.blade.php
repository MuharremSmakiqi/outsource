

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Update Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tab-pane" id="location">
            <div class="row"> 
               
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Monthly Rate</label>
                        <div class="input-group">
                            <input   name="monthly" type="number" class="form-control" placeholder="{{$about->monthly ?? '0'}} €">
                         </div>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <div class="form-group">
                        <label>English Proficiency</label><br>
                            <select   name="english" class="form-control">
                            <option hidden value="" hidden>{{$about->english ?? '0'}}</option>
                            <option value="..." disabled> ... </option> 
                            <option value="basic">Basic</option>
                            <option value="conversational"> Conversational </option>
                            <option value="fluent"> Fluent </option>
                            <option value="native"> Native </option> 
                            <option value="..." disabled> ... </option> 
                        </select>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Phone number</label>
                        <div class="input-group">
                            <input   name="phone" type="number" class="form-control" placeholder="{{$about->phone ?? '0'}}"> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">  
                        <div class="form-group ">
                            <label>Bio</label> 
                            <textarea   name="bio" rows="5" class="form-control text-left">{{$about->bio ?? '0'}} 
                            </textarea> 
                    </div> 
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
