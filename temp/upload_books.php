<?php
session_start();
include "database.php";
if(isset($_SESSION["AID"]))
 {
     header("location:alogin.php");
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
            <h3 id="heading">upload books</h3>
         <?php
            if(isset($_POST["submit"]))
            {
            $target_dir="upload/";
            $target_file=$target_dir.basename($_FILES["efile"]["name"]);
            if(move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file))
            {
                $sql="insert into book(BTITLE,KEYWORDS,FILE) values ('{$_POST["aname"]}','{$_POST["keys"]}','{$target_file}')";
                $db->query($sql);
                echo "<p class='succses'>book uploaded sucsesfully</p>";
            }
            else
            {
                echo "<p class='error'> ";
            }
            }
         ?>
            
                <form style="margin: auto; width: 160px;" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
                    <label>book title</label>
                    <input type="text"  name="aname" required><br><br>
                    <label>keywords</label>
                    <textarea name="keys" required></textarea>
                    <label >upload files</label>
                    <input type="file" name="efile" required>
                
                    <button style="margin: auto; width: 80px;" type="submit" name="submit">upload books</button>

                </form>
            
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