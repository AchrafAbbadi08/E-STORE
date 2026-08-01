<?php
session_abort();
if(!isset($_SESSION['email'])){
    header('Location: login.php');
    exit();
}
?>
<html>
    <head>
        <title>Admin Page</title>
        <link href="style.css">
    </head>
    <body style="background: #fff;">
        <div class="box">
            <h1>Welcome,<span><?= $_SESSION['name'];?></span></h1>
            <p>This is an <span>admin</span>page</p>
            <button onclick="window.location.href='logout.php'">Logout</button>
        </div>
    </body>
</html>