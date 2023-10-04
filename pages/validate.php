<?php
    if(isset($_POST['login'])){
        session_start();
        include('connect.php');

        $username = $_POST['username'];
        $password = $_POST['userpassword'];

        $query = mysqli_query($conn, "SELECT * from `users` WHERE user_name = '$username' && password ='$password'");

        if(mysqli_num_rows($query) == 0){
            $_SESSION['message'] = "Invalid Username or Password, Ask Aidan";
            header('Location: login.php');
        }
        else{
            $row = mysqli_fetch_array($query);

            if(isset($_POST[remember])){
                setcookie("user", $row['username'], time() + (86400 * 30));
                setcookie("pass", $row['password'], time() + (86400 * 30));
            }

            $_SESSION['id'] = $row['id'];
            header('Location: admin.php');
        }
    }
    else {
        header('Location: login.php');
        $_SESSION['message'] = "Please enter your cridentials";
    }
?>