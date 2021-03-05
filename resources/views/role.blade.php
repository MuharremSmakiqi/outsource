<div class="container">
    @include('includes.head')
    <form method="POST" enctype="multipart/form-data"> 
         <input type="number"   hidden>
        @csrf 
    <div class="row justify-content-center ">
        <div class="col-md-8 mt-5 mb-5 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="  mt-5">
                <div class="mt-4 text-center"><h3><b>{{ __('I Want To') }}</b></h3></div> 
                <div class="card-body">
                    <div class="row justify-content-center card-deck"> 
                        <div class="col-lg-4 mt-5 mb-5 shadow-lg p-3  bg-white rounded text-center">
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline" name="role" value="Unverified"> <a href="/user"><b>HIRE</b> </a> </button>
                        </div> 
                        <div class="log-2 ml-4 mr-4"></div>
                        <div class="col-lg-4 mt-5 mb-5 shadow-lg p-3 bg-white rounded text-center">
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline"  name="role" value="User"> <a href="/complet-profile"><b> WORK</b> </a> </button>
                        </div>
                    </div> 
                     
                    <div class="log-2 mt-5 mb-5"></div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>