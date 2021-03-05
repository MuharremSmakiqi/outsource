<div class="card  mt-5">
    <div>
          <form method="POST" enctype="multipart/form-data">
                                @csrf
        <div class="table-responsive">
            <div id=" " class="dataTables_wrapper dt-bootstrap4"> 
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="clientTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Last Login</th>
                                <th>Status</th>
                                <th>View</th>
                                <th>Update</th>
                            </tr>
                            </thead> 
                            <tbody>
                             
                                @foreach ($usersRole as $u)  
                                    <tr role="row" class="odd">
                                    <td>{{$u->user_id}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->email}}</td>
                                        <input type="hidden" name="">
                                        <td >{{ \Carbon\Carbon::parse($u->last_login_at)->diffForHumans()}}</td>  
                                        <td> 
                                          @if ($u->status == 'active')
                                            <h5><span class="badge badge-pill badge-info">Active</span></h5> @endif
                                          @if ($u->status == 'inactive')
                                            <h5><span class="badge badge-pill badge-danger">Inactive</span></h5> @endif
                                          @if ($u->status == 'GSI')
                                            <h5><span class="badge badge-pill badge-success">GSI</span> </h5>  @endif
                                          @if ($u->status == 'reactivate')
                                            <h5><span class="badge badge-pill badge-warning">Reactivate</span> </h5> 
                                          @endif
                                        </td> 
                                        <td>
                                            @include('admin.tab.fullUser_details') 
                                            <button type="button"  class="btn btn-outline-primary btn-sm " data-toggle="modal" 
                                                title="Edit" data-target="#user_details_{{$u->id}}">
                                                View <i class="far fa-eye"></i>
                                            </button> 
                                            
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-5">
                                                <select name="status" class="form-control" required>
                                                <option selected disabled class="text-primary">-Select-</option>
                                                <option disabled>...</option> 
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                                <option value="GSI">GSI</option>  
                                                <option disabled>...</option> 
                                            </select>  
                                                </div>
                                                <div class="col-md-7">
                                            <button type="submit" class="btn btn-outline-primary btn-sm " value="{{$u->user_id}}" name="id">
                                                <i class="fas fa-user-edit"></i>
                                                    Change Status
                                            </button> 

                                                </div>
                                            </div>
                                    
                                        </td>  
                                    </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div> 
        
                                </form>
    </div>
</div>
<script>
    
    $(document).ready(function() {
    $('#clientTable').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": true,
        "bAutoWidth": false });
    });

//     $(function() {
//     $(":checkbox").change(function() {
//       var email_array = [];
//       email_array  = $(":checkbox:checked").map(function() { return $(this).val(); }).get();
//       $("#email_array_id_input").val(email_array).get();
//       console.log(email_array);
//     });
//   });
</script>