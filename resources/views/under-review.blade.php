<div class="container">
    @include('includes.head')
    <form method="POST" enctype="multipart/form-data"> 
         <input type="number"   hidden>
        @csrf 
    <div class="row justify-content-center "> 
        <div class="col-md-8 mt-4 shadow-lg p-3   bg-white rounded">
            <div class="  mt-3">
            <div class=" text-center">
                <a class="navbar-brand" href="/">
                    <img src="/assets/img/gsi-financial-logo.png" width="177" height="66" class="d-inline-block align-top" alt=""> 
                    <h3 style="color:#3e3e3e; letter-spacing: 3px;">  outsourcing </h3>
                </a>
            </div>
                <div class="mt-4 text-left  ml-4"><h5><b>{{ __('Dear ')}}{{(Auth::user()->name) }}</b></h5></div> 
                <div class="card-body text-dark">
                    <div class="row justify-content-left ml-1 mr-1">  
                        <p class=" p-0 m-0 align-baseline">
                           YOUR PROFILE IS UNDER REVIEW 
                        </p> <br>
                        <p class="mt-3">Once it is approved <small class="text-danger">(it might take from 1 up to 12 hours)</small> we will send you an email to let you know it is live on the site. If you need immediate assistance</p>
                        <p class=" ">Please call us: +123456789</p> <br> 
                    </div> 
                     <div class=" p-0 m-0 align-baseline  ml-1 mt-5">
                        <h6><b>Best wishes</b></h6> 
                        <h6><b>GSI OUTSOURCING</b></h6>
                     </div>
                    <div class="log-2 mt-5 mb-5"></div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>