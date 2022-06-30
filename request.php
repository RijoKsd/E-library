<?php

include "database.php";
// if(!isset($_SESSION["ID"]))
// {
//     header("location:ulogin.php");
// }
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
            <h3 id="heading"> request new book</h3>
         <?php
            if(isset($_POST['submit']))
            // {
            //     $MES=$_POST['mes'];
            //     //$ID=$_SESSION['ID'];
            //     if($mes !='')
            //     {
            //         $sql=mysql_sql("insert into request(MES) values ('$MES')");
            //     }

            // }
            {
                $sql="INSERT INTO request (ID,MES,LOGS) VALUES (
                '{$_SESSION['ID']}','{$_POST['mes']}',now()) ";
                $db->query($sql);
                echo "<p class='success'>Request sent to admin</p>";
            }
         
         ?>
            
                <form style="margin: auto; width: 160px;" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
                    
                    <label>message</label>
                    <textarea required name="mes" placeholder="type here.."></textarea>                  
                   <br>
                    <button style="margin: auto; width: 80px;" type="submit" name="submit">send request</button>

                </form>
            
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