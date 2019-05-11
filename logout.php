<?php

session_start();

if ($_SESSION['role_id'] == 1) {
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['nama']);
    unset($_SESSION['role_id']);
    unset($_SESSION['date_created']);
    session_destroy();
    header('location:index.php?message=logout');
}
elseif ($_SESSION['role_id'] == 2) {
    unset($_SESSION['kode_guru']);
    unset($_SESSION['id_mapel']);
    unset($_SESSION['NIP']);
    unset($_SESSION['nama']);
    unset($_SESSION['jenis_kelamin']);
    unset($_SESSION['ttl']);
    unset($_SESSION['alamat']);
    unset($_SESSION['nohp']);
    unset($_SESSION['role_id']);
    unset($_SESSION['date_created']);
    session_destroy();
    header('location:index.php?message=logout');
}
else{
    unset($_SESSION['NIS']);
    unset($_SESSION['kode_kelas']);
    unset($_SESSION['NISN']);
    unset($_SESSION['nama']);
    unset($_SESSION['jenis_kelamin']);
    unset($_SESSION['ttl']);
    unset($_SESSION['alamat']);
    unset($_SESSION['nohp']);
    unset($_SESSION['role_id']);
    unset($_SESSION['date_created']);
    session_destroy();
    header('location:index.php?message=logout');
}