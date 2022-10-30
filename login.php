<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="wifth=device-width, initial-scale=1.0">
    <style>
        body{
            text-alighn:center;
        }
        </style>
        </head>

    <body>

        <h2> Hoşgeldiniz </h2> <?php echo $_SESSION['Username']; ?><br></br><br></br><br></br><br></br>
Çıkış yapmak için buraya tıklayınız <br><br></br><a href = "Logout.php">ÇIKIŞ</a>
    </body>
    </html>