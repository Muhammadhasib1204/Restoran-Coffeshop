<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Resto Coffeshop</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('style/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('style/endors/ti-icons/css/themify-icons.css')}} "> 
  <link rel="stylesheet" href="{{ asset('style/vendors/css/vendor.bundle.base.css')}} ">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('style/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}} ">
  <link rel="stylesheet" href="{{ asset('style/vendors/ti-icons/css/themify-icons.css')}} ">
  <link rel="stylesheet" type="text/css" href="{{ asset('style/js/select.dataTables.min.css') }}"> 
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('style/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('style/images/favicon.png') }}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <span>Resto & Coffeshop</span>
        <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="style/images/logo-mini.svg" alt="logo"/></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('style/images/faces/admin1.png') }}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
              </form>
            </div>
            <div class="events pt-4 px-3">
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
            </div>
        
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Admin') }}">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Admin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Customer') }}">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Customer</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Pemilik') }}">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Pemilik</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Toko') }}">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Toko</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Menu') }}">
              <i class="ti-book menu-icon"></i>
              <span class="menu-title">Menu</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Pemesanan') }}">
              <i class="ti-shopping-cart-full menu-icon"></i>
              <span class="menu-title">Pemesanan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Pembayaran') }}">
              <i class="ti-money menu-icon"></i>
              <span class="menu-title">Pembayaran</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Penilaian') }}">
              <i class="ti-star menu-icon"></i>
              <span class="menu-title">Penilaian</span>
            </a>
          </li>
          
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <!-- Content Header (Page header) -->
          <section class="content-header">
              @yield('content')
          </section>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
            </div>
            </div>
        </div>

        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('style/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('style/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('style/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('style/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('style/js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <script src="{{ asset('js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>

