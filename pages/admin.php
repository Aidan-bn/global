<?php
 session_start();
 if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')){
    header('Location: login.php');
    exit();
 }

 include('connect.php');
 $query = mysqli_query($conn, "SELECT * FROM users WHERE id = '".$_SESSION['id']."'");          
 $row = mysqli_fetch_assoc($query);

 $select = "SELECT * FROM contact ORDER BY id DESC";
 $result = mysqli_query($conn, $select);
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
            <li class="user-db"><?php echo $row['user_name']; ?></li>
            <li>
                <a href="logout.php">Log Out</a>
            </li>
        </menu>
    </header>
    <main>
        <h1>received request</h1>
        <?php
            if(mysqli_num_rows($result) > 0){
                // echo "<h3>Data seen in a database</h3>";
                echo '<table>
                        <tr class="top-raw">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date/Time</th>
                        </tr>';
                    while ($row = mysqli_fetch_assoc($result)){
                        echo '<tr>
                                <td class="row-mysql">' .$row["id"] . '</td>
                                <td class="row-mysql">' .$row["name"] . '</td>
                                <td class="row-mysql">' .$row["email"] . '</td>
                                <td class="row-mysql">' .$row["message"] . '</td>
                                <td >' .$row["timereceived"] . '</td>
                              </tr>';
            }
            echo '<table>';
        }
            else {
                echo "No result";
            }
            mysqli_close($conn);
        ?>
    </main>
</body>
</html>
