<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
          <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->



      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">

          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-file-text"></i>
              </span>
              <span class="hide-menu">Form Elements</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="../main/form-inputs.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Forms Input</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="../main/form-input-groups.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Input Groups</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="../main/form-input-grid.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Input Grid</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="../main/form-checkbox-radio.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Checkbox & Radios</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="../main/form-bootstrap-switch.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Bootstrap Switch</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="../main/form-select2.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Select2</span>
                </a>
              </li>
            </ul>
          </li>
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
            <a class="sidebar-link" href="./corp" aria-expanded="false">
              <span>
                <i class="ti ti-bookmark"></i>
              </span>
              <span class="hide-menu">Kelola Perusahaan</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./user" aria-expanded="false">
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
            <a class="sidebar-link" href="./major" aria-expanded="false">
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
        <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
          <div class="d-flex">
            <div class="unlimited-access-title me-3">
              <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
              <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
            </div>
            <div class="unlimited-access-img">
              <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>