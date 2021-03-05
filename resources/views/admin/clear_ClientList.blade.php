
@extends('admin.index') 
@section('content')   

<style>
    .nav-tabs .nav-link.active {
        font-weight: bold;
        background-color: transparent;
        border-bottom: 3px solid #233857;
        border-right: none;
        border-left: none;
        border-top: none;
    } 
</style>
<section class="shadow-lg   bg-white rounded ">
    <div class=""> 
            <div class="col-md-12 text-center ">
                <nav class="nav-justified pt-3 container">
                    <div class="nav nav-tabs " id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true"><i class="fas fa-quidditch"></i> Remove Contacted List</a>
                        <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false"><i class="fas fa-undo"></i> History List</a>
                    </div>
                </nav>
                        <div class="tab-content  justify-content-center" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                            <p class="mt-5"></p> 
                            <div class="container mb-5">
                                <div class="card  mt-5">
                                <div>
                                    <p class="text-right pt-2 pr-3">Click remove if all users selected by the client have been contacted.</p>
                                </div>
                                <div class="">
                                    <div class="table-responsive pl-5 pr-5">
                                        <div id=" " class="dataTables_wrapper dt-bootstrap4"> 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Selected</th>
                                                            <th>Role</th>
                                                            <th>Action </th>
                                                        </tr>
                                                        </thead> 
                                                        <tbody> 
                                                            @if (is_null($users)) 
                                                                <div class="alert alert-primary" role="alert">
                                                                   No users yet!
                                                                </div>
                                                            @else
                                                            @foreach ($users as $u) 
                                                            @foreach ($pending as $p) 
                                                                @if ($u->id == $p->user_id)
                                                                <tr role="row" class="odd">
                                                                <td class="sorting_1">{{$u->id}}</td>
                                                                    <td>{{$u->name}}</td>
                                                                    <td>{{$u->email}}</td>
                                                                    <td>{{$p->count}}</td>
                                                                    <td>{{$u->role}}</td>
                                                                    <td>
                                                                    
                                                                    <form method="POST" enctype="multipart/form-data"> 
                                                                        <input type="text" name="rule" value="update" hidden>
                                                                        @csrf  
                                                                        <button type="submit" class="btn btn-warning btn-sm"  name="role" value="{{$u->id}}">
                                                                            <i class="fas fa-quidditch"></i>
                                                                            <b> <small>REMOVE</small></b> 
                                                                        </button> 
                                                                        </form> 
                                                                    </td> 
                                                                </tr>
                                                            @endif
                                                            @endforeach
                                                            @endforeach
                                                            @endif  
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            </div>

                            </div>
                            <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                            <p class="mt-5"></p>
                                <div class="table-responsive" > 
                    <table id="adminTable" class="table" width="100%" cellspacing="0" > 
                        <thead hidden>
                            <tr >
                                <th class="w-auto" style="border: none"></th>
                            </tr>
                        </thead>
                        <tbody id="" >  
                            @foreach ($users as $u)   
                            @foreach ($contacted as $p) 
                                @if ($u->id == $p->user_id)
                                    <tr> 
                                        <td style=" border-top: 0;">
                                            <div class="card b-1 mb-1 ">
                                            <div class="media card-body pt-2 pl-4">
                                                    <div class="media-left pr-12">
                                                        <div class="row">
                                                            <button class="btn btn-dark btn-circle btn-sm">
                                                                <i class="far fa-user"></i>
                                                            </button> 
                                                            <small class="ml-2 mt-2 text-dark" style="font-size: 16px">{{$u->name ?? 'Not found'}} - 
                                                                <span class="badge badge-dark" style="font-size: 12px">id: {{$u->id ?? 'Not found'}}</span> -
                                                                <span class="badge badge-dark" style="font-size: 12px">user selected count: {{$p->count}}</span>
                                                            </small> 
                                                        </div>
                                                    </div> 
                                                    <div class="media-body d-flex justify-content-center">   
                                                    <a data-toggle="collapse" href="#collapse-{{$u->id ?? '404'}}" aria-expanded="false" aria-controls="collapse-{{$u->id ?? '404'}}">  
                                                    <i class="fas fa-caret-down  text-dark fa-2x" title="Expand."></i> 
                                                    </a>   
                                                    </div>
                                                    <div class="mx-auto">  
                                                    </div> 
                                                    <div class="media-right text-right d-none d-md-block  mt-1">
                                                    <form method="POST" enctype="multipart/form-data"> 
                                                        <input type="text" name="rule" value="delete" hidden>
                                                        @csrf 
                                                        <button type="submit" class="btn btn-dark btn-circle btn-sm" title="Delete forever"  name="role" value="{{$u->id}}">
                                                          <i class="fas fa-trash-alt"></i> 
                                                        </button> 
                                                    </form>  
                                                    </div>
                                                </div>
                                                <footer class="pt-2">   
                                                        <div class="collapse multi-collapse" id="collapse-{{$u->id ?? '404'}}"> 
                                                        <table class="table table-bordered "> 
                                                            <thead>
                                                                <tr>   
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Name</th> 
                                                                <th scope="col">Services</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Action</th> 
                                                                </tr>
                                                            </thead>
                                                            <tbody> 
                                                                
                                                                @foreach ($contactedInteres as $booked) 
                                                                    @php
                                                                    $info = DB::table('abouts')
                                                                    ->where('user_id', '=', $booked->p_id)  
                                                                    ->get(); 

                                                                    $infoName = DB::table('users')
                                                                    ->where('id', '=', $booked->p_id)  
                                                                    ->get(); 
                                                                    @endphp    
                                                                        @foreach ($info as $info)  
                                                                        @foreach ($infoName as $infoName)  
                                                                        <tr> 
                                                                            @if ($u->id == $booked->user_id )   
                                                                            <td>{{$booked->p_id ?? 'Not found'}}</td>
                                                                                <td>{{$infoName->name ?? 'Not found'}}</td> 
                                                                                <td>{{$info->servicesM ?? 'Not found'}}</td> 
                                                                                <td>{{$infoName->email ?? 'Not found'}}</td> 
                                                                                <td>
                                                                                    <button type="button" class="btn btn-dark btn-sm">
                                                                                        View
                                                                                    </button> 
                                                                                </td> 
                                                                                
                                                                            @endif 
                                                                        </tr>   
                                                                        @endforeach  
                                                                        @endforeach  
                                                                @endforeach 
                                                            </tbody>
                                                        </table>   
                                                        
                                                        </div> 
                                                
                                                </footer>
                                            </div>
                                        </td>
                                    </tr>   
                                @endif
                            @endforeach
                            @endforeach
                            <br>
                        </tbody>
                    </table>
                </div> 
                    </div> 
                </div>
            </div> 
    </div>
</section>


<script>
    $(document).ready(function() {
    $('#dataTable').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": true,
        "bAutoWidth": false });
    });
</script>
@endsection