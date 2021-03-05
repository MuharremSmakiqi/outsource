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
                        <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true"><i class="fas fa-users"></i> Staff Request</a>
                        <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false"><i class="fas fa-user-tie text-success"></i> Clients</a>
                        <a class="nav-item nav-link" id="pop3-tab" data-toggle="tab" href="#pop3" role="tab" aria-controls="pop3" aria-selected="false"><i class="fas fa-user-edit text-warning"></i> All Users</a> 
                        <a class="nav-item nav-link" id="pop5-tab" data-toggle="tab" href="#pop5" role="tab" aria-controls="pop5" aria-selected="false"><i class="fas fa-user-times text-danger"></i> Inactive Users</a>
                        <a class="nav-item nav-link" id="pop6-tab" data-toggle="tab" href="#pop6" role="tab" aria-controls="pop6" aria-selected="false"><i class="fas fa-check-circle text-info"></i> Working</a>
                    </div>
                </nav>
                <div class="tab-content  justify-content-center" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                        <p class="mt-5"></p>
                         @include('admin.manage_clients')
                    </div>
                    <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                         @include('admin.tab.clientTab')
                    </div>
                    <div class="tab-pane fade" id="pop3" role="tabpanel" aria-labelledby="pop3-tab">
                         @include('admin.tab.statusTab')
                    </div> 
                    <div class="tab-pane fade" id="pop5" role="tabpanel" aria-labelledby="pop4-tab">
                          @include('admin.tab.deletedTab')
                    </div>
                    <div class="tab-pane fade" id="pop6" role="tabpanel" aria-labelledby="pop4-tab">
                         @include('admin.tab.workTab')
                    </div>
                </div>
            </div> 
    </div>
</section>


@endsection