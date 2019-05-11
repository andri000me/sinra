<?php
    include '../../function.php';
    var_dump($_POST);
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    if ($pass == '') {
        $query = query("UPDATE admin SET username = '$username' , nama = '$nama' WHERE id = '$id'");
        header('location:view.php?message=update');
    }
    else{
        $query = query("UPDATE admin SET username = '$username' , nama = '$nama' , password = '$pass' WHERE id = '$id'");
        header('location:view.php?message=update');
    }
?>