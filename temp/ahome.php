<?php
include "database.php";
session_start();
function countRecord($sql,$db)
{
    $res=$db->query($sql);
    return $res->num_rows;
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
            <h3 id="heading">Welcome koi </h3>
            <div id="center">
                <ul>
                    <li>total books:<?php echo countRecord ("SELECT * FROM `book`",$db);?> </li>
                    <li>total students:<?php echo countRecord ("SELECT * FROM `student`",$db);?></li>
                    <li>total request:<?php echo countRecord ("SELECT * FROM `request`",$db);?></li>
                    <li>total comments:<?php echo countRecord ("SELECT * FROM `comment`",$db);?></li>


                </ul>

            </div>
          
        </div>
        <div id="navi">
            <?php
            include "adminsidebar.php"
            ?>
        </div>
        <div id="footer">
            <p>copyright &copy;NOT NULL</p>
        </div>
    </div>


</body>

</html>