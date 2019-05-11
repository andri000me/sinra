<?php
    error_reporting(E_ALL ^ (E_NOTICE)); 
    include 'set-config.php';
    session_start();
    if ($_SESSION['status'] === 'login') {
      header('location: landing-page.php?message=login');
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
    <title>SINRA | Sign In</title>

    <!-- Bootstrap -->
    <link href="<?=$baseurl?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=$baseurl?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=$baseurl?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=$baseurl?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?=$baseurl?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?=$baseurl?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?=$baseurl?>login-validation.php" method="post">
              <h1>Sign In</h1>
              <?php 
              if(isset($_GET['message'])){
                if($_GET['message'] == "fail"){
                  echo "<p class='text-danger text-center'>Sign In failed! Username or Password is wrong!</p>";
                }else if($_GET['message'] == "logout"){
                  echo "<p class='text-danger text-center'>Sign Out successfully!</p>";
                }else if($_GET['message'] == "not"){
                  echo "<p class='text-danger text-center'>You must sign in before accessing the admin page!</p>";
                }
              }
              ?>
              <div class="form-group">
                <div class="row">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">
                    <h5>Select</h5>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="form-control" name="level">
                      <option value="admin">Admin</option>
                      <option value="guru">Guru</option>
                      <option value="murid">Murid</option>
                    </select>
                  </div>
                </div>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" autocomplete="off" required name="username"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" autocomplete="off" required name="password"/>
              </div>
              <div class="pull-right">
                <input type="submit" value="Sign In" name="signin" class="btn">
              </div>

              <div class="clearfix"></div>

              <div>
                <h1>SINRA</h1>
                <p>©2019. Sistem Informasi Nilai Raport. by Astrad</p>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>

