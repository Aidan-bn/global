<?php

$connect = mysqli_connect('localhost', 'root', '', 'global');

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

// codes for login page

?>