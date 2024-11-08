@extends('layouts.app')

@section('content')
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
        
        <!-- Menu -->
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo" style=" padding: 70px;">
        <div class="logo">
          <img style="border-radius: 500px; margin-top: 30px;" src="../assets/img/img/logo.jpg" width="120" height="100" alt="">
            <b><p style="font-size: 26px; color: blue; text-shadow: 2px 2px 30px #00008b; ">SONS BC</p></b>
        </div>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
          <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
      </div>
      <div class="menu-inner-shadow"></div>
        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="#" class="menu-link">
              <i class="menu-icon tf-icons bx bx-user-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user"></i>
              <div data-i18n="Layouts">Admin</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item-active">
                <a href="{{ url('/users') }}" class="menu-link">
                  <div data-i18n="Without menu">Setting</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-building"></i>
              <div data-i18n="Layouts">Role</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item-actice">
                <a href="#" class="menu-link">
                  <div data-i18n="Without navbar">Student</div>
                </a>
              </li>
            </ul>
          </li>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <center> 
               <marquee> <p class="align-items-center ms-auto" style="font-size: 25px; padding-right: 500px; padding-top: 15px;"><b>Southern Leyte State University - Bontoc Campus | Scholarship Opportunity Notification System</b></p> 
              </center></marquee>
            </div>
          </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-12 order-12">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-lg-12">
                        <div class="card-body">
                          <div class="col-sm-12">
                            <h1 class="text-center mb-4 student-enrolle">
                              <a href="index.php">
                                List of Student Grantees
                              </a>
                            </h1>
                            <div class="table-responsive">
                              <table class="table table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <th>Student ID</th>
                                    <th>Fullname</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Types of Scholars</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                </tbody>
                              </table>
                            </div>
                            <div class="text-center">
                              <p>Total Student:</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">©
                <script>document.write(new Date().getFullYear());</script>, made with ❤️ by
                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">J&J</a>
              </div>
              <div class="d-none d-lg-inline-block">
                <img src="../assets/img/img/logo.jpg" alt="logo" width="20" height="20">
                <span class="brand-text demo menu-text">SLSU - Bontoc Campus</span>
              </div>  
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade">
            
          </div>
        </div>
        <!-- Content wrapper -->
      </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle">
      
    </div>
  </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
  <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
@endsection
