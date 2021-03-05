<div class="card  mt-5">
    <div class="">
        <div class="table-responsive">
            <div id=" " class="dataTables_wrapper dt-bootstrap4"> 
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="workTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                       <thead>
                            <tr role="row">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Background</th>
                            </tr>
                            </thead> 
                            <tbody>
                                @foreach ($working as $w) 
                                  @foreach ($usersRole as $ur) 
                                    @if ($ur->user_id == $w->user_id)
                                    <tr role="row" class="odd">
                                    <td class="sorting_1">{{$ur->user_id}}</td>
                                        <td>{{$ur->name}}</td>
                                        <td>{{$ur->email}}</td>
                                        <td><span class="badge badge-pill badge-info">{{$w->status}}</span></td>
                                        <td>{{$w->servicesM}}</td>
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
<script>
    
    $(document).ready(function() {
    $('#workTable').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": true,
        "bAutoWidth": false });
    }); 
</script>