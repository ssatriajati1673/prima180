<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-grey elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
      <img src="<?= base_url('assets/img') ?>/Logo BPS.png" alt="AdminLTE Logo" class="brand-image">
        <span class="brand-text font-weight-light"><b>Prima</b> 180</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('assets/img') ?>/<?php echo $_SESSION['username'];?>.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <!-- <a href="#" class="d-block"> -->
              <?php
              echo $_SESSION['nama_lengkap'];
              ?><br>
            </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?= base_url('dashboard') ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard
                </p>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Penilaian
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('') ?>penilaian" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penilaian PNS</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('') ?>penilaian_ppnpn" class="nav-link">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Penilaian PPNPN</p>
                  </a>
                </li>
              </ul>
            </li> -->


            <!-- <li class="nav-item">
              <a href="<?= base_url('') ?>penilaian" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>Penilaian
                </p>
              </a>
            </li> -->

            <li class="nav-item">
              <a href="<?= base_url('') ?>survey" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>Survei
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('') ?>upload" class="nav-link">
                <i class="nav-icon fa fa-upload"></i>
                <p>Upload
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('') ?>petunjuk" class="nav-link">
                <i class="nav-icon fas fa-info-circle"></i>
                <p>Panduan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('') ?>logout" class="nav-link">
                <i class="nav-icon fas fa-window-close"></i>
                <p>Log Out
                </p>
              </a>
            </li>
          </ul>
        </nav>
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
              <h1 class="m-0"><?= $title ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">