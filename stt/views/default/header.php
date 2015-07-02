<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="<?php echo $base_url?>/assets/theme/images/favicon.png" type="image/png">
    <title>Siakad Sekolah Tinggi Tindik </title>
    <link href="<?php echo $base_url?>/assets/theme/css/style.css" rel="stylesheet">
    <link href="<?php echo $base_url?>/assets/theme/css/theme.css" rel="stylesheet">
    <link href="<?php echo $base_url?>/assets/theme/css/ui.css" rel="stylesheet">
    <!-- BEGIN PAGE STYLE -->
    <link href="<?php echo $base_url?>/assets/plugins/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="<?php echo $base_url?>/assets/plugins/input-text/style.min.css" rel="stylesheet">
    <link href="<?php echo $base_url?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url?>/assets/plugins/datatables/dataTables.min.css" rel="stylesheet">
    <link href="<?php echo $base_url?>/assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script src="<?php echo $base_url?>/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <style type="text/css">
        .panel-content{
          margin-bottom: 30px;
        }
    </style>
  </head>
  <!-- BEGIN BODY -->
  <body class="fixed-topbar fixed-sidebar theme-sdtl color-default">
    <section>
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar">
        <div class="logopanel">
          <h1>
            <a href="#"></a>
          </h1>
        </div>
        <div class="sidebar-inner">
          <div class="menu-title" style="color:#5B5B5B">
            Menu Navigasi 
            <div class="pull-right menu-settings"></div>
          </div>
          <ul class="nav nav-sidebar">
          <?php
          if($_SESSION['level'] == "mahasiswa"){
            ?>
            <li><a href="<?php echo $base_url?>/site/home"><i class="icon-home"></i><span>Home</span></a></li>
            <li><a href="<?php echo $base_url?>/krs/tambah"><i class="glyphicon glyphicon-file"></i><span>KRS</span></a></li>
            <li><a href="<?php echo $base_url?>/jadwal/lihat"><i class="glyphicon glyphicon-file"></i><span>Jadwal</span></a></li>
            <li><a href="<?php echo $base_url?>/kartu/lihat"><i class="glyphicon glyphicon-file"></i><span>Cetak Kartu Ujian</span></a></li>
            <li><a href="<?php echo $base_url?>/khs/lihat"><i class="glyphicon glyphicon-file"></i><span>KHS</span></a></li>
            <li><a href="<?php echo $base_url?>/khs/transkrip"><i class="glyphicon glyphicon-file"></i><span>Transkrip Nilai</span></a></li>
            <li><a href="<?php echo $base_url?>/pengumuman/lihat"><i class="glyphicon glyphicon-file"></i><span>Pengumuman</span></a></li>
            <li><a href="<?php echo $base_url?>/kalender/lihat"><i class="glyphicon glyphicon-file"></i><span>Kalender Akademik</span></a></li>
            <?php
          }
          if($_SESSION['level'] == "dosen"){
            ?>
            <li><a href="<?php echo $base_url?>/site/home"><i class="icon-home"></i><span>Home</span></a></li>
            <li><a href="<?php echo $base_url?>/jadwal/lihat"><i class="glyphicon glyphicon-file"></i><span>Jadwal Kuliah</span></a></li>
            <li><a href="<?php echo $base_url?>/jadwal/lihat"><i class="glyphicon glyphicon-file"></i><span>Cek Nilai Mahasiswa</span></a></li>
            <li><a href="<?php echo $base_url?>/jadwal/lihat"><i class="glyphicon glyphicon-file"></i><span>Cek KRS</span></a></li>
            <li><a href="<?php echo $base_url?>/pengumuman/lihat"><i class="glyphicon glyphicon-file"></i><span>Pengumuman</span></a></li>
            <li><a href="<?php echo $base_url?>/kalender/lihat"><i class="glyphicon glyphicon-file"></i><span>Kalender Akademik</span></a></li>
            <?php
          }
          ?>
          </ul>
          <div class="sidebar-footer clearfix">
			     <center>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
            <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left btn-effect" href="#" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
            <i class="icon-power"></i></a>
			     </center>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar">
          <div class="header-left">
            <div class="topnav">
              <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
            </div>
          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="user-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <img src="<?php echo $base_url?>/assets/theme/images/avatars/user1.png" alt="user image">
                <span class="username"><?php echo ucwords($_SESSION['username']);?></span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?php echo $base_url?>/site/edit-profil"><i class="icon-user"></i><span>My Profile</span></a>
                  </li>
                  <li>
                    <a href="<?php echo $base_url?>/site/logout"><i class="icon-logout"></i><span>Logout</span></a>
                  </li>
                </ul>
              </li>
              <!-- END USER DROPDOWN -->
            </ul>
          </div>
          <!-- header-right -->
        </div>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
