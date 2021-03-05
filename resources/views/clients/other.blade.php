 <div class="tab-pane fade" id="pop4" role="tabpanel" aria-labelledby="pop4-tab">
 <div class="pt-3"></div>
 <div class="pt-3"></div>  
<div class="container">
    <div class="card  mt-5"> 
    <div class="">
         <div class="card-header" style="background-color: #F9F9F9">
            <div class="d-flex justify-content-center">
                <img class="avatar avatar-xl  " src="/assets/img/contacted.svg" alt="...">
            </div>
            <h6 class="m-0 font-weight-bold text-primary">User List Contacted</h6>
            <small>This list contains history selection</small>
            <hr style="width:30%; background-color: red; border-width: 3px">
        </div>
        <div class="table-responsive">
            <div id=" " class="dataTables_wrapper dt-bootstrap4"> 
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="contactedClientDashboard" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th>No.</th>
                                <th>Usser ID</th>
                                <th>Category</th>
                                <th>English Level</th>
                                <th>Experience</th>
                                <th>Monthly €</th> 
                                <th>Status</th> 
                            </tr>
                            </thead> 
                            <tbody>
                              <?php $no = 0 ?> 
                            @foreach ($history as $i) 
                            @foreach ($userInfo as $info) 
                            @if ($user->user_id == $info->user_id )
                                <?php $no++ ?>
                                <tr role="row" class="odd">
                                     <td>{{$no}}</td>
                                    <td class="sorting_1">{{$i->p_id ?? 'Not found'}}</td>
                                    <td>{{$i->servicesM ?? 'Not found'}}</td>
                                    <td>{{$i->english ?? 'Not found'}}</td>
                                    <td>{{$i->level ?? 'Not found'}}</td>
                                    <td>{{$i->monthly ?? 'Not found'}} €</td> 
                                    <td> <span class="badge badge-pill badge-danger">Contacted</span></td> 
                                </tr>
                                 @endif
                                @endforeach
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div> 
</div>

{{-- <script>
    $(document).ready(function() {
    $('#contactedClientDashboard').dataTable({
         "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": true,
        "bAutoWidth": false });
    });
</script> --}}
</div>