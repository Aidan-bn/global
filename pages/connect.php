<?php
    $conn = mysqli_connect('localhost', 'root', '', 'global');

    if(mysqli_connect_error()){
        echo "Fail to connect with Database" . mysqli_connect_error();
    }
?>
