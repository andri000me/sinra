<?php
    require_once 'set-config.php';
    require_once 'function.php';
    session_start();
    if (isset($_POST['signin'])) {
      $level = $_POST['level'];
      $username = anti_injection($_POST['username']);
      $password = anti_injection($_POST['password']);
      if ($level == 'admin') {
        $query = mysqli_query($connect, "SELECT * FROM admin WHERE username = '$username'");
        $fetch = mysqli_fetch_assoc($query);
        if ($password == $fetch['password']) {
          $_SESSION['id'] = $fetch['id'];
          $_SESSION['username'] = $fetch['username'];
          $_SESSION['password'] = $fetch['password'];
          $_SESSION['nama'] = $fetch['nama'];
          $_SESSION['role_id'] = $fetch['role_id'];
          $_SESSION['date_created'] = $fetch['date_created'];
          $_SESSION['status'] = 'login';
          header('location: landing-page.php');
          exit;
        }
        else{
          header('location: index.php?message=fail');
        }
      }
      elseif ($level == 'guru') {
        $query = mysqli_query($connect, "SELECT * FROM guru WHERE nama = '$username'");
        $fetch = mysqli_fetch_assoc($query);
        $pass = $fetch['ttl'];
        $pass = date('dmY', strtotime($pass));

        if ($password == $pass) {
          $_SESSION['kode_guru'] = $fetch['kode_guru'];
          $_SESSION['id_mapel'] = $fetch['id_mapel'];
          $_SESSION['NIP'] = $fetch['NIP'];
          $_SESSION['nama'] = $fetch['nama'];
          $_SESSION['jenis_kelamin'] = $fetch['jenis_kelamin'];
          $_SESSION['ttl'] = $fetch['ttl'];
          $_SESSION['alamat'] = $fetch['alamat'];
          $_SESSION['nohp'] = $fetch['nohp'];
          $_SESSION['role_id'] = $fetch['role_id'];
          $_SESSION['date_created'] = $fetch['date_created'];
          $_SESSION['status'] = 'login';
          header('location: landing-page.php');
          exit;
        }
        else{
          header('location: index.php?message=fail');
        }
      }

      else{
        $query = mysqli_query($connect, "SELECT * FROM murid WHERE nama = '$username'");
        $fetch = mysqli_fetch_assoc($query);
        $pass = $fetch['ttl'];
        $pass = date('dmY', strtotime($pass));

        if ($password == $pass) {
          $_SESSION['NIS'] = $fetch['NIS'];
          $_SESSION['kode_kelas'] = $fetch['kode_kelas'];
          $_SESSION['NISN'] = $fetch['NISN'];
          $_SESSION['nama'] = $fetch['nama'];
          $_SESSION['jenis_kelamin'] = $fetch['jenis_kelamin'];
          $_SESSION['ttl'] = $fetch['ttl'];
          $_SESSION['alamat'] = $fetch['alamat'];
          $_SESSION['nohp'] = $fetch['nohp'];
          $_SESSION['role_id'] = $fetch['role_id'];
          $_SESSION['date_created'] = $fetch['date_created'];
          $_SESSION['status'] = 'login';
          header('location: landing-page.php');
          exit;
        }
        else{
          header('location: index.php?message=fail');
        }
      }
    }
    else{
      header('location: index.php?message=fail');
    }