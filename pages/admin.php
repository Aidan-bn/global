<?php

    $connect = mysqli_connect("localhost", "root", "", "global");
    if(mysqli_connect_error()){
        echo "Error with database connectivty";
    } else {
        $select = "SELECT * FROM `contact` ORDER BY `id` ASC";
        $result = mysqli_query($connect, $select);
        if(mysqli_num_rows($result) > 0 ){
            // $result_array = array();
            // while($row = mysqli_fetch_assoc($result)){
            //     array_push($result_array, $row);
            $msg = "No record found";
            }else{
                $msg = "No record found";
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/admin.css">
    <title>Global Fortune Admin</title>
</head>
<body>
    <header>
        <menu>
            <li>Welcome: </li>
            <li>Aidan</li>
            <li>
                <button>Log Out</button>
            </li>
        </menu>
    </header>
    <main>
        <h1>received request</h1>
        <?php $msg; ?>
        <table>
            <thead>
                <tr>
                    <th class="tb-heading">Email</th>
                    <th class="tb-heading">Name</th>
                    <th class="tb-heading">Message</th>
                    <th class="tb-heading">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result)){?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['timereceived']; ?></td> 
                    <tr>
                <?}?>
            </tbody>   
        </table>
    </main>
</body>
</html>