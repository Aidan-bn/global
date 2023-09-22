<?php
    // error_reporting(0);

    $connect = mysqli_connect('localhost', 'root', '', 'global');

    $username = $_POST['username'];
    $password = $_POST['userpassword'];
    $url = "../pages/admin.html";
    $url_login = "../pages/login.php";

    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $username = mysqli_real_escape_string($connect, $username);
    $password = mysqli_real_escape_string($connect, $password);

    $sql = "SELECT * FROM users WHERE user_name = '$username' and password = '$password'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        header("Location:$url");
    }else{
        header("Location:$url_login");
    }
?>