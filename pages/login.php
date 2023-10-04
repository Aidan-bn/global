<?php
  session_start();
  include('connect.php'); 
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
            <li>
                <a href="../index.html">Home</a>
            </li>
        </menu>
    </header>
    <main class="main-form">
        <form method="POST"  action="validate.php">
            <label for="user" class="login-lbl">
                <img src="../asset/user.svg" alt="user">
                <input type="text" name="username" placeholder="Aidan" autocomplete="on" class="login-input" value="<?php if(isset($_COOKIE["user"])) {echo $_COOKIE["user"]; } ?>">
            </label>
            <label for="password" class="login-lbl">
                <img src="../asset/lock.svg" alt="lock">
                <input type="password" name="userpassword" placeholder="***"  class="login-input" value="<?php if(isset($_COOKIE["pass"])) {echo $_COOKIE["pass"];}?>">
            </label><br>
            <input type="checkbox" class="checkbox" name="remember" <?php if(isset($_COOKIE["user"]) && isset($_COOKIE["pass"])) {echo "checked";}?>><stron class="note">Remember me</strong><br>
            <input type="submit" value="Log In" name="login" class="btn-login">
            <!-- <button name="submit">Log In</button> -->
        </form>
        
    <div class="alert">
        <?php
            if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
        ?>
    </div>
    </main>
    <div class="out">
        <!-- <a href="admin.html">Admin</a> -->
    </div>
</body>
</html>