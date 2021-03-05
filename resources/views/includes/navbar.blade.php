<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<style>  
    .navbar-nav > li{  
      font-size: 18px !important;
      font-family: 'Heebo', sans-serif;
      font-weight: 400;
    }  
 
</style> 
<nav class=" navbar navbar-expand-lg fixed-top myNavigationBar">
      <a class="navbar-brand pl-5 pt-2" href="/" >
        <img src="/assets/img/gsi-financial-logo.png" width="100" height="35" class="d-inline-block align-top" alt="GSI Financial"> 
        <h3 style="color:#3e3e3e; font-size:15px; letter-spacing: 2px">outsourcing</h3>
    </a>
    <button class="navbar-toggler ml-auto btn-sm py-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon" style="color: #336278;  height: 35px"><i class="fas fa-align-right fa-2x"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mx-auto pl-5"> 
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>              
            <li class="nav-item"> 
                 <a class="nav-link" href="/staffing-options">Staffing</a> 
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="/how-it-works">How It Works</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="/benefits">Benefits</a>
            </li>            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown"  href="/cases#it" 
                    aria-haspopup="true" aria-expanded="false">
                   Cases
                </a>
                <div class="dropdown-menu shadow-lg" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="/cases#it">IT Case</a> 
                    <a class="dropdown-item"  href="/cases#financial">Financial Case</a>
                    <a class="dropdown-item"  href="/cases#design">Design Case</a>
                    <a class="dropdown-item"  href="/cases#administration">Administration Case</a>    
                </div>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
            </li>   
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>   
        </ul> 
        
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav mx-auto">
        
        <!-- Authentication Links -->
        @guest
        {{-- <li class="nav-item">
            <a class="nav-link active" href="{{ route('login') }}" style="color: #336278">LOGIN</a>
        </li>  --}}
        @else
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle pl-5"  href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @php  $firstname = head(explode(' ', trim(Auth::user()->name))); @endphp
            {{$firstname }}
        </a>

            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <?php $role = Auth::user()->role; ?>
                @if($role == 'Unverified')
                    <a class="dropdown-item" href="/i-want-to"> 
                        Dashboard
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{__('Logout') }}
                    </a>
                @elseif($role == 'User') 
                        @php
                        $profile_complited = DB::table('abouts')
                        ->where('user_id', '=', Auth::user()->id)
                        ->first()
                    @endphp
                    @if (is_null($profile_complited))
                        <a class="dropdown-item" href="/complet-profile"> User Dashboard </a>
                    @else
                        <a class="dropdown-item" href="/user"> User Dashboard</a>
                    @endif 
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{__('Logout') }}
                    </a>

                @elseif($role == 'Unverified')
                    <a class="dropdown-item" href="/under-review">Profile Client</a> 
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <svg class="bi bi-power" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.578 6.437a5 5 0 104.922.044l.5-.865a6 6 0 11-5.908-.053l.486.874z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M9.5 10V3h1v7h-1z" clip-rule="evenodd"/>
                        </svg>
                            {{ __('Logout') }}
                        </a>
                
                @elseif($role == 'Client')
                    <a class="dropdown-item" href="/client-adm">
                        Profile
                    </a> 
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <svg class="bi bi-power" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.578 6.437a5 5 0 104.922.044l.5-.865a6 6 0 11-5.908-.053l.486.874z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M9.5 10V3h1v7h-1z" clip-rule="evenodd"/>
                        </svg>
                            {{ __('Logout') }}
                        </a>
                        
                @elseif($role == 'Admin')
                    <a class="dropdown-item" href="/admin"> 
                        Dashboard
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{__('Logout') }}
                    </a>

                @endif

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </div>
        </li>
        @endguest
    </ul>
    <ul class="navbar-nav  mx-auto"> 
        <ul class="list-unstyled list-inline social text-center pr-3">                      
            <li class="list-inline-item none"><a href="https://www.facebook.com/associatesgsi/" target="_blank" class=" btn-circle btn-light btn-sm"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item none"><a href="https://twitter.com/gsioutsourcing" target="_blank" class=" btn-circle btn-light btn-sm"><i class="fab fa-twitter text-primary"></i></a></li>
            <li class="list-inline-item none"><a href="https://www.linkedin.com/company/gsi-outsourcing" target="_blank" class=" btn-circle btn-light btn-sm"><i class="fab fa-linkedin-in text-primary"></i></a></li>                                                
            <li class="list-inline-item"><a href="tel:+44 (0)20 3151 6848 " title="+44 (0)20 3151 6848" class=" btn-circle btn-light btn-sm"><i class="fas fa-phone text-primary" style="transform: rotate(90deg);"></i></a></li>  
            <li class="list-inline-item"><a href="/contact" title="info@gsioutsourcing.com" class=" btn-circle btn-light btn-sm"><i class="fas fa-envelope text-primary"></i></a></li>                        
        </ul>
    </ul>
    </div>
</nav>  
 <br><br>   
  