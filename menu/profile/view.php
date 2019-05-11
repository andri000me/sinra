<?php
    include '../../set-config.php';
    include '../../function.php';
    session_start();
    if ($_SESSION['status'] != 'login') {
        header('location:../../index.php?message=not');
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
    include '../../layout/header.php';
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>User Profile</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Detail</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <?php
              if (isset($_GET['message'])) {
                $mess = $_GET['message'];
                if ($mess == 'update') {
                  echo "<p class='text-primary text-center'>Your data already update!</p>";
                }
              }
            ?>
            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
              <div class="profile_img">
                <div id="crop-avatar">
                  <!-- Current avatar -->
                  <img class="img-responsive avatar-view" src="<?=$baseurl?>assets/nophoto.png" alt="Avatar">
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-2"></div>
            <?php
              $id = $_SESSION['id'];

              $query = query("SELECT * FROM admin WHERE id = '$id'");
              foreach ($query as $fetch ) {
            ?>
            <div class="col-md-7 col-sm-7 col-xs-12 ">
              <h3><?=$fetch['nama']?></h3>
              <ul class="list-unstyled user-data">
                <li>
                  <i class="fa fa-briefcase user-profile-icon"></i> 
                  <?php
                    $role = $fetch['role_id'];
                    $query = query("SELECT role FROM user_role WHERE id = '$role'");
                    foreach ($query as $a ) {
                      echo ucwords($a['role']);
                    }
                  ?>
                </li>
                <li>
                  <i class="fa fa-calendar"></i>
                  <?php
                    $date = $fetch['date_created'];
                    echo date('d-F-Y', strtotime($date));
                  ?>
                </li>
              </ul>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit-profile">
              <i class="fa fa-edit"></i>
              Edit Profile
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade edit-profile" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
        </div>
        <div class="modal-body">
          <form action="<?=$baseurl?>menu/profile/edit.php" method="post">
            <input type="hidden" value="<?=$fetch['id']?>" name="id">
            <div class="item form-group">
              <label for="name">
                Nama
              </label>
              <div>
                <input id="name" class="form-control col-md-7 col-xs-12" name="nama" value="<?=$fetch['nama']?>" required type="text">
              </div>
            </div>
            <br>
            <div class="item form-group">
              <label for="username">
                Username
              </label>
              <div>
                <input id="username" class="form-control col-md-7 col-xs-12" name="username" value="<?=$fetch['username']?>" required type="text">
              </div>
            </div>
            <div class="item form-group">
              <label for="pass">
                Password
              </label>
              <div>
                <input id="pass" class="form-control col-md-7 col-xs-12" name="pass" placeholder="New Password" required type="password">
                <input type="checkbox" onclick="showhide()"> Show Password
              </div>
            </div>
            <div class="item form-group">
              <label for="member">
                Member since
              </label>
              <div>
                <input id="member" class="form-control col-md-7 col-xs-12" required type="text" value="<?php $date = $fetch['date_created'];echo date('d F Y', strtotime($date));?>" readonly disabled>
             </div>
            </div>
        </div>
        <div class="modal-footer">
            <input type="reset" value="Close" class="btn btn-default" data-dismiss="modal">
            <input type="submit" value="Save Changes" class="btn btn-primary">
          </form>
        </div>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<?php
    include '../../layout/footer.php';
?>