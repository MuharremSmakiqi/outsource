<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
    <div class="container">
    <ul class="navbar-nav  mx-auto">
        <a class="navbar-brand pl-5 mb-3" href="/" >
            <img src="/assets/img/gsi-financial-logo.png" width="100" height="35" class="d-inline-block align-top" alt="GSI Financial"> 
            <p style="color:#3e3e3e; font-size:15px; letter-spacing: 2px">outsourcing</p>
        </a>
    </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
 
    <ul class="navbar-nav  mx-auto">    
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <!-- Left Side Of Navbar --> 
            <ul class="navbar-nav  mx-auto float-right mt-3">  
                WELCOME {{strtoupper(Auth::user()->name) }}
            </ul> 
        </div>
    </ul>
    </div>
</nav>
<hr>
    @include('includes.head')  
</head>
<body>
    <div id="app"> 
        <main class="py-4">
            @yield('content')
        </main>
    </div>
       {{-- @include('includes.footer')   --}}
</body>
</html>
