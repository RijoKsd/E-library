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
            <h3 id="heading"> send your comment on book</h3>
            <?php 
        echo $sql="SELECT * from BOOK where BID=".$_GET["id"];
        $res=$db-> query($sql);
        if($res->num_rows>0)
        {
            echo "<table>";
            $row=$res->fetch_assoc();
            echo "
            <tr>
            <th>Book name</th>
            <td>{$row["BTITLE"]}</td>
            </tr>
            
            <tr>
            <th>keywords</th>
            <td>{$row["KEYWORDS"]}</td>
            <td></td>
            </tr>

            </tr>
            
           </table>";

        }
        else
        {
            echo "<p class='error'>no books found</p>";
        }
          ?>
            <div id="center">

            </div>

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