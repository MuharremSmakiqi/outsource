@include('includes.head') 
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid bg-white">
         <div class="row">
           @php
              $user = DB::table('abouts')
              ->select('status')
              ->where('user_id', '=', Auth::user()->id)->get();
            // dd($user);
           @endphp
           @foreach ($user as $u) 
           @if ($u->status == 'inactive')
            <div class="form-inline col-lg-12"> 
              <div class="card-body text-center">
              <div class="alert alert-danger pt-5 pb-5" role="alert">
             <b> Your account is INACTIVE </b> <br> <br>
              This happens because you did not login for more than 30 days. <br>
              To reactivate your account please make request! <br><br><br>
              <button type="submit" class="btn btn-primary"data-toggle="modal" data-target="#staticBackdrop">REQUEST</button> 
            </div>
            <div style="height: 300px"></div>
          </div>
          </div>  
           @elseif ($u->status == 'reactivate')
            <div class="form-inline col-lg-12"> 
              <div class="card-body text-center">
              <div class="alert alert-info pt-5 pb-5" role="alert">
               
              <h2 class="">Request Submitted Successfully</h2>
              <br>
             <b> Reactivating </b> <br> <br>
              Your account is reactivating, it might take up to 24 hours to be ready! <br><br><br>
              <a href="/" class="btn btn-info">Take me home</a>
            </div>
            <div style="height: 300px"></div>
          </div>
          </div>  
           @else 
              @include('users.profile')  
           @endif
           @endforeach
         </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  <!-- Button trigger modal -->
 

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Submit Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{ route('edu.store') }}" method="POST" name="profile" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Your Name:</label>
            <input type="text" class="form-control" id="recipient-name" value="{{Auth::user()->name ?? 'Not completed'}}" readonly>
            <input type="hidden" name="status" value="reactivate">
            <input type="hidden" name="type" value="status">
          </div>
          <div class="d-flex justify-content-center">  
               <button type="submit" class="btn btn-primary ">Submit</button> 
          </div>
      </div>
      <div class="modal-footer justify-content-center">  
          <a href="/terms-service" class="float-left"><b>Terms</b></a> 
          <a href="/privacy-policy"><b>Privacy Policy</b></a> 
      </div>
      </form>
    </div>
  </div>
</div>

@include('includes.footer')
</body> 
<!-- Footer -->
<!-- End of Footer -->