<?php

    //===== base url =====
    $baseurl = 'http://localhost/sinra/';

    //===== connect database =====
    $host   = 'localhost';
    $user   = 'root';
    $pass   = '';
    $db     = 'sinra';

    $connect = mysqli_connect($host, $user, $pass,$db);

    if(!$connect){
        die('Connection failed: ' . mysqli_connect_error());
    }