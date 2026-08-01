<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}
?>
<html>
    <head>
        <title>User Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background: #fff;">
        <div class="box">
            <h1>Welcome,<span><?= $_SESSION['name'];?></span></h1>
            <p>This is an <span>User</span>page</p>
            <button onclick="window.location.href='logout.php'">Logout</button>
        </div>
    </body>
</html>