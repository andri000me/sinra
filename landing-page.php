<?php
    include 'set-config.php';
    include 'function.php';
    session_start();
    if ($_SESSION['status'] != 'login') {
        header('location:index.php?message=not');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Logo -->	
    <link rel="icon" type="image/jpeg" href="<?=$baseurl?>assets/logo.jpeg">
    <title>SINRA | Landing Page</title>

    <!-- Bootstrap -->
    <link href="<?=$baseurl?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=$baseurl?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=$baseurl?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?=$baseurl?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=$baseurl?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=$baseurl?>assets/nophoto.png" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>
                  <?php
                    $name = $_SESSION['nama'];
                    $name = explode(" ",$name);
                    echo $name[0].' ' . $name[1];
                  ?>
                </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li class="active">
                    <a href="<?=$baseurl?>landing-page.php">
                      <i class="fa fa-home"></i>
                      Dashboard  
                    </a>
                  </li>
                  <?php
                    if ($_SESSION['role_id'] == 1) {
                  ?>
                  <li>
                    <a href="#">
                      <i class="fa fa-smile-o"></i>
                      Admin
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user"></i>
                      Guru
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users"></i>
                      Murid
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-suitcase"></i> 
                      Akademik 
                      <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="#">Mata Pelajaran</a></li>
                      <li><a href="#">Kelas</a></li>
                      <li><a href="#">Kelas Siswa</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="<?=$baseurl?>logout.php">
                      <i class="fa fa-sign-out"></i>
                      Sign Out
                    </a>
                  </li>
                  <?php
                    }elseif ($_SESSION['role_id'] == 2) {
                  ?>
                  <li>
                    <a href="#">
                      <i class="fa fa-suitcase"></i> 
                      Akademik 
                      <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="#">Nilai</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-print"></i>
                      Cetak 
                      <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="#">Absensi Kelas</a></li>
                      <li><a href="#">Laporan Nilai</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="<?=$baseurl?>logout.php">
                      <i class="fa fa-sign-out"></i>
                      Sign Out
                    </a>
                  </li>
                  <?php
                    }else{
                  ?>
                  <li>
                    <a href="#">
                      <i class="fa fa-suitcase"></i> 
                      Akademik 
                      <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="#">Nilai</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-print"></i>
                      Cetak 
                      <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="#">Absensi Kelas</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="<?=$baseurl?>logout.php">
                      <i class="fa fa-sign-out"></i>
                      Sign Out
                    </a>
                  </li>
                  <?php
                    }
                  ?>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

<?php
    include 'layout/header.php';
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-user"></i></div>
          <div class="count">179</div>
          <h3>Guru</h3>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-users"></i></div>
          <div class="count">179</div>
          <h3>Murid</h3>
          <p></p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-building"></i></div>
          <div class="count">179</div>
          <h3>Kelas</h3>
          <p></p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-book"></i></div>
          <div class="count">179</div>
          <h3>Pelajaran</h3>
          <p></p>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Dashboard</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="col-xs-9">
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="home-r">
                  <p class="lead">Home</p>
                  <p>Selamat Datang di Aplikasi berbasis website SINRA</p>
                </div>
                <div class="tab-pane" id="profile-r">
                    <p class="lead">Profile</p>
                    <p>SINRA singkatan dari Sistem Informasi Nilai Raport. Aplikasi ini dibuat untuk mempermudah dalam mengelola informasi mengenai nilai-nilai tugas, ulangan, ujian yang akan dibuat untuk hasil akhir nilai raport.</p>
                </div>
                <div class="tab-pane" id="contactus">
                    <p class="lead">Contact Us</p>
                    <p>
                      Jika ada masalah, hubungi : <br>
                      Admin 1 : 
                      <i class="fa fa-phone-square"></i> +62 812-3579-1217
                    </p>
                </div>
              </div>
            </div>

            <div class="col-xs-3">
              <!-- required for floating -->
              <!-- Nav tabs -->
              <ul class="nav nav-tabs tabs-right">
                <li class="active"><a href="#home-r" data-toggle="tab">Home</a>
                </li>
                <li><a href="#profile-r" data-toggle="tab">Profile</a>
                </li>
                <li><a href="#contactus" data-toggle="tab">Contact Us</a>
                </li>
              </ul>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<?php
    include 'layout/footer.php';
?>