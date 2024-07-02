<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
          <img src="{{asset('admin/assets/images/logos/dark-logo.svg')}}" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->



      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">

          
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          
          <li class="sidebar-item">
            <a class="sidebar-link" href="./index.html" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">FITUR APLIKASI</span>
          </li>
          <li class="sidebar-item">

            <a class="sidebar-link" href="/admin/corp" aria-expanded="false">

              <span>
                <i class="ti ti-bookmark"></i>
              </span>
              <span class="hide-menu">Kelola Perusahaan</span>
            </a>
          </li>
          <li class="sidebar-item">

            <a class="sidebar-link" href="/admin/student" aria-expanded="false">

              <span>
                <i class="ti ti-files"></i>
              </span>
              <span class="hide-menu">Kelola Siswa</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./mentor" aria-expanded="false">
              <span>
                <i class="ti ti-user"></i>
              </span>
              <span class="hide-menu">Kelola Mentor</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin/major" aria-expanded="false">
              <span>
                <i class="ti ti-file-description"></i>
              </span>
              <span class="hide-menu">Kelola Jurusan</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./class" aria-expanded="false">
              <span>
                <i class="ti ti-world"></i>
              </span>
              <span class="hide-menu">Kelola Kelas</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./apply" aria-expanded="false">
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Kelola Penerimaan</span>
            </a>
          </li>
          
      
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">AUTH</span>
          </li>
          <li class="sidebar-item">
            <form action="{{ route('logout')}}" method="post" id="form1">
            @csrf
            <a class="sidebar-link" href="javascript:;" onclick="document.getElementById('form1').submit();" aria-expanded="false">
              <span>
                <i class="ti ti-login"></i>
              </span>
              <span class="hide-menu">Logout</span>
</a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
              <span>
                <i class="ti ti-user-plus"></i>
              </span>
              <span class="hide-menu">Register</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">EXTRA</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
              <span>
                <i class="ti ti-mood-happy"></i>
              </span>
              <span class="hide-menu">Icons</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
              <span>
                <i class="ti ti-aperture"></i>
              </span>
              <span class="hide-menu">Sample Page</span>
            </a>
          </li>
        </ul>
       
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>