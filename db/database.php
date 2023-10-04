<?php

$connect = mysqli_connect('localhost', 'root', '', 'global');
//$msg = "<div><a href='#'>Invalid email or Password</a></div>";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$url = "../index.html";

$sql = "INSERT INTO `contact` (`name`, `email`, `message`) 
        VALUES ('$name', '$email', '$message')";

$rs = mysqli_query($connect, $sql);

if($rs){
    header("Location:$url");
}

?>