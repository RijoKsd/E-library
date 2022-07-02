<?php
session_start();
include "database.php";
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
            <h3 id="heading">user login </h3>
         <?php
            if(isset($_POST["submit"]))
            {
             $sql="SELECT * FROM student where NAME='{$_POST["name"]}' and PASS='{$_POST["pass"]}'";
            $res=$db->query($sql);
                if($res->num_rows>0)
                {
                    $row=$res->fetch_assoc();
                    $_SESSION["ID"]=$row["ID"];
                    $_SESSION["NAME"]=$row["NAME"];
                    header("location:uhome.php");
                }
                else
                {
                    echo "<p class='error'>invalid user details</p>";

                }

            }
             
         ?>
            
                <form style="margin: auto; width: 160px;" action="ulogin.php" method="post">
                    <label>name</label>
                    <input type="text"  name="name" required><br><br>
                    <label>password</label>
                    <input type="password" name="pass" required><br>
                    <button style="margin: auto; width: 80px;" type="submit" name="submit">login</button>

                </form>
            
        </div>
        <div id="navi">
            <?php
            include "sidebar.php"
            ?>
        </div>
        <div id="footer">
            <p>copyright &copy;NOT NULL</p>
        </div>
    </div>


</body>

</html>