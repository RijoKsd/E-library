<?php

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
            <h3 id="heading">new user</h3>
         <?php
            if(isset($_POST["submit"]))
            
            {
                $sql="insert into student(NAME,PASS,MAIL,DEP) values ('{$_POST["name"]}','{$_POST["pass"]}','{$_POST["mail"]}','{$_POST["dept"]}')";
                $db->query($sql);
                echo "<p class='succses'>user registartion sucsesfull</p>";
          
            }
        
         ?>
            
                <form style="margin: auto; width: 160px;" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
                    <label>name</label>
                    <input type="text"  name="name" required><br><br>
                    <label>password</label>
                    <input type="password" name="pass" required></textarea><br>
                   <label >email id</label>
                   <input type="email" name="mail" required><br>
                   <label>department</label>
                   <select name="dept" required>
                    <option  value="">select</option>
                    <option  value="cse">cse</option>
                    <option  value="civil">civil</option>
                    <option  value="ece">ece</option>
                    <option  value="mech">mech</option>
                    <option  value="mba">mba</option>
                   </select><br>
                   <br>
                
                    <button style="margin: auto; width: 80px;" type="submit" name="submit">register</button>

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