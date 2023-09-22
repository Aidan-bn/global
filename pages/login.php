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
                <button>Register</button>
            </li>
        </menu>
    </header>
    <main class="main-form">
        <form method="POST"  action="../db/log_in.php">
            <label for="user" class="login-lbl">
                <img src="../asset/user.svg" alt="user">
                <input type="text" name="username" placeholder="Aidan" autocomplete="on" class="login-input">
            </label>
            <label for="password" class="login-lbl">
                <img src="../asset/lock.svg" alt="lock">
                <input type="password" name="userpassword" placeholder="***"  class="login-input">
            </label>
            <button>Log In</button>
        </form>
    </main>
    <div class="out">
        <a href="../index.html">Home</a>
        <a href="admin.html">Admin</a>
    </div>
</body>
</html>