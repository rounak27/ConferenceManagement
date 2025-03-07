<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NEPAS Conference</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/datatables-responsive/css/responsive.bootstrap4.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/nepaslogoSmall.png')}}" />
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
      .toast-success {
          background-color: #51a351 !important;
          color: #fff !important;
      }
      .toast-error {
          background-color: #bd362f !important;
          color: #fff !important;
      }
      .toast-warning {
          background-color: #f89406 !important;
          color: #fff !important;
      }
      </style>
    @yield('css')
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/nepaslogoSmall.png')}}" />
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
      <div style="display:none" id="base_url">{{url("/")}}</div>
      <div class="card "id="msg"  data-success='{{ session("success") }}' data-warning='{{ session("warning") }}' data-error='{{ session("error") }}'>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row" style="background-color: #ffffff;">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start" style="background-color: #ffffff;">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span> 
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo p-1" style="border-radius: 10px;"  href="{{url('/')}}">
              <img src="{{asset('images/nepaslogoSmall.png')}}" alt="logo" style=" height: 80px;scale: 90%;"/>
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{url('/')}}">
              <img src="{{asset('images/nepaslogoSmall.png')}}" alt="logo" style="scale:1.5;" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top" style="background-color: #ffffff;">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Hello, <span class="text-dark fw-bold">{{$admindata->FName}}{{$admindata->Mname??''}} {{$admindata->LName}}</span></h1>
              <h3 class="welcome-sub-text">{{ $admindata->RoleName }}</h3>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
              
            
            
            <li class="nav-item dropdown  user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{asset('images/faces/face8.jpg')}}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{asset('images/faces/face8.jpg')}}" style="width: 100px; height: 100px;" alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">{{$admindata->FName}}{{$admindata->Mname??''}} {{$admindata->LName}}</p>
                  <p class="fw-light text-muted mb-0">{{$admindata->email}}</p>
                </div>
                
                
                <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.abstractlist')}}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Abstract List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.userlist')}}">
              <!-- <i class="fa fa-rupee"></i> -->
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Payment List</span>
              </a>
            </li>
            
            
            {{-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                </ul>
              </div>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                </ul>
              </div>
            </li> --}}
            
          
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="">
                  <div class="tab-content tab-content-basic">@yield('content')</div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">LunivaTech</span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2025 NEPCON. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- Bootstrap Modal -->
<div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="verificationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="verificationModalLabel">Email Verification Required</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              Your email is not verified. Please verify your email to access the abstract section.
          </div>
          <div class="modal-footer">
              <a href="{{route('verify-email')}}" class="btn btn-primary">Verify Now</a>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div> 
</div>


    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('vendors/datatables-responsive/js/dataTables.responsive.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('vendors/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('vendors/toastr/toastr.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/template.js')}}"></script>
    <script src="{{asset('js/settings.js')}}"></script>
    <script src="{{asset('js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js/todolist.js')}}"></script>\
    
    
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>

    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
    @yield('js')
  </body>
</html>