<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>
        <!-- <link rel="stylesheet" type="text/css" href="login.css"> -->
        <style>
            body{
                justify-content: center;
                align-items: center;
                width: 100%;
                height:92vh; 
                background: linear-gradient(rgba(150, 239, 245, 0.8), rgba(237, 153, 197, 0.7))  no-repeat;
            }
            h1{
                position: relative;
                left: 50%;
                top: 50%;
                transform: translate(-15%, -50%)
            }
            a{
                position: relative;
                padding:10px 10px;
                background:rgba(237, 153, 197, 0.7);
                text-decoration:none;
                border-radius:20px;
                left: 90%;
                color:black;

            }

        </style>
    </head>
    <body>
        <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
        <a href="logout.php">logout</a>
    </body>
    </html>
    <?php
}
else {
    header("index.php");
    exit();
}
?>