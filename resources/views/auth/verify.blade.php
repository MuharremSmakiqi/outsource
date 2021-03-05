 
<div class="container">
     @include('includes.head')
    <div class="row justify-content-center ">
        <div class="col-md-6 mt-1 shadow-lg p-3 bg-white rounded">
            <div class="  mt-3">
                  <div class=" text-center">
                 <a class="navbar-brand" href="/">
                    <img src="/assets/img/gsi-financial-logo.png" width="174" height="60" class="d-inline-block align-top" alt=""> 
                    <h5 style="color:#5e6873; letter-spacing: 7px;">  outsourcing </h5>
                </a>
            </div>
                <div class="mt-2 text-center"><h5><b>{{ __('Verify Your Email Address') }}</b></h5></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                        <b>
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},</b>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                    <div class="row justify-content-center"> 
                    <div class="col-lg-10 "> 
                     <img src="/assets/img/wait.svg" class="img-fluid " alt="Responsive image">
                    </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div> 
