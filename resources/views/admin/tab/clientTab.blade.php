<div class="card  mt-5">
    <div class="">
        <div class="table-responsive">
            <div id=" " class="dataTables_wrapper dt-bootstrap4"> 
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Last Login</th>
                            </tr>
                            </thead> 
                            <tbody>
                                @foreach ($users as $u) 
                                    <tr role="row" class="odd">
                                    <td class="sorting_1">{{$u->id}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>{{$u->role}}</td> 
                                        <td>{{ \Carbon\Carbon::parse($u->last_login_at)->diffForHumans() }}</td> 
                                    </tr>
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
    $('#dataTable').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": true,
        "bAutoWidth": false, 
     });
    });
</script>
