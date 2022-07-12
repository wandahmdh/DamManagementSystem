<?php 
    include 'config.php';

    session_start();

    if($_SESSION['status'] != "login"){
        header("location:../index.php");
    }

    echo "selamat datang di webpage kelompok 1". $_SESSION['username'];
?>

<br/>
<br/>
<a href="logout.php">LOGOUT</a>