<!-- Modal -->
<form action="{{ route('user.store') }}" method="POST" name="profile" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="profile-edit_{{$about->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-smallledby="staticBackdropsmall" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropsmall">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-small="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <div class="row" > 
            <div class="col-md-6">
                <small class="float-left">Experience</small>
                <select required  name="level" class="form-control div-toggle" > 
                    <option value="{{$about->level}}" selected="{{$about->level}}">{{$about->level}}</option>
                    <option value="Junior">Junior</option>
                    <option value="Mid">Mid</option>
                    <option value="Senior">Senior</option>
                    <option value="Expert">Expert</option> 
                    <option disabled="" value="...">...</option>
                </select>  
            </div> 
            <div class="col-md-6">
                 <div class="form-group"> 
                    <small class="float-left">Salary expectation (€)</small>
                    <select required  name="monthly" class="form-control">
                        <option hidden value="{{$about->monthly ?? '0'}}" hidden>€{{$about->monthly ?? '0'}}</option>
                        <option  disabled> ... </option> 
                        <option value="0 - 500">€0 - €500</option>
                        <option value="500 - 1000">€501 - €1000</option>
                        <option value="1001 - 1500"> €1001 -€1500</option>
                        <option value="1501 - 2000">€1501 - €2000 </option>
                        <option value="2001">€2001 and Above</option> 
                        <option  disabled> ... </option> 
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <small class="float-left">English</small><br>
                        <select required  name="english" class="form-control"> 
                            <option value="{{$about->english}}" selected="{{$about->english}}">{{$about->english}}</option> 
                            <option value="..." disabled> ... </option> 
                            <option value="basic">Basic</option>
                            <option value="conversational"> Conversational </option>
                            <option value="fluent"> Fluent </option>
                            <option value="native"> Native </option> 
                            <option value="..." disabled> ... </option> 
                        </select>
                </div>
            </div>
            <div class="col-md-6"> 
                <div class="form-group">
                    <small class="float-left">Phone number</small>
                    <div class="input-group pt-1">
                        <input required  name="phone" type="number" class="form-control" placeholder="Start with: 00 instead of +" value="{{$about->phone}}">  
                    </div>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group"> 
                        <small class="float-left">Last Position</small>
                            <div class="input-group">
                            <input required  name="lastPosition" type="text" class="form-control" placeholder="Write last position" value="{{$about->lastPosition ?? '0'}}"> 
                        </div>
                </div>
            </div>    
            <div class="col-md-6">
                <div class="form-group"> 
                    <small class="float-left">Availability</small>
                        <select required  name="available" class="form-control">
                            <option hidden value="{{$about->available ?? '0'}}" hidden><small>{{$about->available ?? '0'}} </small></option>
                            <option  disabled> ... </option> 
                            <option value="immediately">immediately</option>
                            <option value="1 weeks notice"> 1 weeks notice</option>
                            <option value="2 weeks notice"> 2 weeks notice</option>
                            <option value="1 months notice"> 1 months notice</option>
                            <option value="more than a months notice"> more than a months notice</option> 
                            <option  disabled> ... </option> 
                        </select>
                </div>
            </div> 
            <div class="col-md-12">   
                <small class="float-left">Bio</small> 
                <textarea required  name="bio" rows="7" 
                    value=" {{$about->bio ?? 'Not completed'}} "
                    placeholder="Highlight your top skills, experience, and interests. This is one of the first things clients will see on your profile." 
                    class="form-control"> {{$about->bio ?? 'Not completed'}} "
                </textarea> 
            </div> 
        </div>  
      <div class="modal-footer">
        {{-- <input type="hidden" name="type" value="editProfile">  --}}
        <button type="submit" class="btn btn-primary"   value="editProfile" name="type">Update</button>
      </div>
    </div>
  </div>
</div>  
</div>  
</form>