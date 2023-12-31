<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('img/aisin.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">APR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{asset('/')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard                
              </p>
            </a>
          </li>            
          <li class="nav-item">
            <a href="{{asset('/apr')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                APR                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{asset('/upload_apr')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Upload Dokumen                
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
          <i class="nav-icon fas fa-power-off"></i> Logout
          </a>    
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          </li>  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>