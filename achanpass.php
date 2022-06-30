 <?php
include "database.php";

// if(!isset($_SESSION["AID"]))
//  {
//      header("location:alogin.php");
//  }
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
            <h3 id="heading">change password</h3>
         <div id="center">

            <?php  
            if(isset($_POST["submit"]))
            {
                $sql="SELECT * from  admin WHERE APASS='{$_POST["opass"]}' and AID='{$_SESSION["AID"]} '";
                $res=$db->query($sql);
                if($res->num_rows>0)
                {
                    $s="update admin set APASS='{$_POST["npass"]}' WHERE AID=''".$_SESSION["AID"];
                        $db->query($s);
                        echo "<p class='succses'>password changed succses</p>";
                }
                else
                {
                        echo "<p class='error'> invalid password</p>";
                }
            }
            
            ?>
                <div id="center">
                <form action="<?php echo '$_SERVER["PHP_SELF"]'; ?>" method="post">
                    <label>old password</label><br>
                    <input style="margin: auto; width: 150px;" type="password" name="opass" required><br>
                    <label>new password</label><br>
                    <input style="margin: auto; width: 150px;" type="password" name="npass" required><br>
                    <button style="margin: auto; width: 100px;" type="submit" name="submit">update password</button>
            </form>
                </div>
            </div>
        </div>
        <div id="navi">
            <?php
            include "usersidebar.php";
            ?>
        </div>
        <div id="footer">
            <p>copyright &copy;NOT NULL</p>
        </div>
    </div>  


</body>

</html> 