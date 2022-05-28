<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <base href="<?php echo base_url('asset')?>/">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/LOGO HOTEL.png" rel="icon">
  <link href="assets/img/LOGO HOTEL.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/LOGO HOTEL.png" alt="">
        <span class="d-none d-lg-block">HOTEL Hebat</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

              <li class="nav-item dropdown pe-3">
        <?php if(session()->get('level')=='admin'){?>
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/admin.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Admin Iamge Icon -->
        <?php } ?>

        <?php if(session()->get('level')=='resepsionis'){?>
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/resepsionis.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Resepsionis</span>
          </a><!-- End Profile Iamge Icon -->
        <?php } ?>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="/petugas/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <?php if(session()->get('level')=='admin'){?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/petugas/tampil">
          <i class="bi bi-person"></i>
          <span>Petugas</span>
        </a>
      </li><!-- End Petugas Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/kamar/tampil">
        <i class="bi bi-journal-text"></i>
          <span>Kamar</span>
        </a>
      </li><!-- End Kamar Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/fk/tampil">
          <i class="bi bi-file-text"></i>
          <span>Fasilitas Kamar</span>
        </a>
      </li><!-- End Fasilitas Kamar Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/fh/tampil">
          <i class="bi bi-card-list"></i>
          <span>Fasilitas Hotel</span>
        </a>
      </li><!-- End Fasilitas Hotel Page Nav -->

            <?php } ?>

      <?php if(session()->get('level')=='resepsionis'){?>
        <li class="nav-item">
        <a class="nav-link collapsed" href="/reservasi/tampil">
          <i class="bi bi-file-earmark"></i>
          <span>Reservasi</span>
        </a>
      </li><!-- End Reservasi Page Nav -->
      <?php } ?>
    </ul>

  </aside><!-- End Sidebar-->

  