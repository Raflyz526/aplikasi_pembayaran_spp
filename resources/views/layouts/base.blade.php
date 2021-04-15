
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Aplikasi Pembayaran SPP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  @livewireStyles
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Rafly</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      @include('template.sidebar')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    {{$slot}}
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
@livewireScripts
<script>
  {{-- untuk memanggil modal siswa --}}
  window.addEventListener('openUpdateSiswa', event => {
    $('#simpanSiswa').modal('show');
  });
  window.addEventListener('openDeleteModal', event => {
    $('#hapusSiswa').modal('show');
  });
  window.addEventListener('closeDeleteModal', event => {
    $('#hapusModal').modal('hide');
  });

  {{-- untuk memanggil modal petugas --}}
  window.addEventListener('openUpdatePetugas', event => {
    $('#simpanPetugas').modal('show');
  });
  window.addEventListener('openDeleteModal', event => {
    $('#hapusPetugas').modal('show');
  });
  window.addEventListener('closeDeleteModal', event => {
    $('#hapusModal').modal('hide');
  });

  {{-- untuk memanggil modal kelas --}}
  window.addEventListener('openUpdateKelas', event => {
    $('#simpanKelas').modal('show');
  });
  window.addEventListener('openDeleteModal', event => {
    $('#hapusKelas').modal('show');
  });
  window.addEventListener('closeDeleteModal', event => {
    $('#hapusModal').modal('hide');
  });

  {{-- untuk memanggil modal spp --}}
  window.addEventListener('openUpdateSpp', event => {
    $('#simpanSpp').modal('show');
  });
  window.addEventListener('openDeleteModal', event => {
    $('#hapusSpp').modal('show');
  });
  window.addEventListener('closeDeleteModal', event => {
    $('#hapusModal').modal('hide');
  });

  {{-- script untuk memanggil modal jumlah bayar --}}
  window.addEventListener('openjumlahBayarModal', event => {
    $('#jumlahBayar').modal('show');
  });
  window.addEventListener('closeDeleteModal', event => {
    $('#jumlahBayar').modal('hide');
  });

  {{-- script select tahun --}}
    var start = 2015;
    var end = new Date().getFullYear();
    var options = "";
    for(var year = start ; year <=end; year++){
      //options += "<option value=>"+ year +"</option>";
      options += `<option value="${year}">${year}</option>`;
    }
    document.getElementById("year").innerHTML = options;
    
</script>
</body>
</html>
