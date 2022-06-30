<?php
include "database.php";
session_start();

if(!isset($_SESSION["ID"]))
{
 header("location:ulogin.php");
 }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-lib</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <a href="index.php">
                <h1>E-library</h1>
            </a>
        </div>
        <div id="wrapper">
            <h3 id="heading">Welcome <?php echo $_SESSION["NAME"]; ?></h3>
          
           
        </div>
        <div id="navi">
            <?php
            include "usersidebar.php"
            ?>
        </div>
        <div id="footer">
            <p>copyright &copy;NOT NULL</p>
        </div>
    </div>


</body>

</html>