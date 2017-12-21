<?php
    session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css"
</head>
<body>

<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
            <div class="nav-login">

                <?php
                if (isset($_SESSION['u_id'])){
                    echo '<form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="submit">Log out</button>
                    <a href="account.php">'. $_SESSION['u_uid']. '</a>
                    </form>';
                } else{
                    echo '<form action="includes/login.inc.php" method="POST">
                    <input type="text" name="uid" placeholder="Username/e-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign up</a>';
                }
                ?>




            </div>
        </div>
    </nav>
</header>