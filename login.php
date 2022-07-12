<?php 
    include 'config.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $login = $db->query("select * from user where username='$username' and password='$password'");

    $cek = $login->num_rows;
    
    if ($cek > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin_index.php");
    } else {
        header("location:index.php");	
    }

?>