@include('includes.adminHead')
<body id="page-top"> 
  <!-- Page Wrapper -->
  <div id="wrapper"> 
    <!-- Sidebar -->
    <ul class="navbar-nav bg-danger sidebar sidebar-dark accordion" id="accordionSidebar"> 
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/client-adm">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">admin</div>
      </a> 
      <!-- Divider -->
      <hr class="sidebar-divider my-0"> 
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active liHover">
        <a class="nav-link" href="/">
         <i class="fas fa-home"></i>
          <span>Home</span></a>
      </li> 
      <!-- Divider -->
      <hr class="sidebar-divider"> 
      <!-- Heading -->
      <div class="sidebar-heading">
        DASHBOARD
      </div> 
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active liHover">
         <a class="nav-link" href="/admin">
           <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a> 
      </li>
      <li class="nav-item active liHover">
         <a class="nav-link" href="/client-clear-list">
           <i class="fas fa-list"></i>
          <span>Clear List</span>
        </a> 
      </li>
      <li class="nav-item active liHover">
         <a class="nav-link" href="/statisctics">
           <i class="fas fa-chart-pie"></i>
          <span>Statistics</span>
        </a> 
      </li>
      <li class="nav-item active liHover">
         <a class="nav-link" href="/feedback">
          <i class="fas fa-star-half-alt"></i>
          <span>Feedback</span>
        </a> 
      </li>  
      <li class="nav-item active liHover">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
          <i class="fas fa-door-open"></i>
          <span>Exit</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">one click logout:</h6>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{__('Logout') }}
            </a> 
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block"> 
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> 
    </ul>
    <!-- End of Sidebar --> 
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column"> 
      <!-- Main Content -->
      <div id="content"> 
          <!-- Page Heading -->
             @yield('content') 
        </div>
        <!-- /.container-fluid -->  
    </div>
    <!-- End of Content Wrapper -->
    @include('pages.message')
  </div>
  <!-- End of Page Wrapper --> 
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a> 
</body> 