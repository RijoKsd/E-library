<?php
include "database.php";

function countRecord($sql, $db)
{
    $res = $db->query($sql);
    return $res->num_rows;
}
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
            <h3 id="heading">view comment details </h3>

            <?php
            $sql ="SELECT book.BTITLE,student.NAME,comment.COMM,comment.LOGS
             from comment inner join book on book.BID=comment.BID 
             inner join student on comment.SID=student.ID";
            $res = $db->query($sql);
            if ($res->num_rows > 0) {
                echo "<table border='1'> 
                        <tr>
                            <th>sno</th>
                            <th>book</th>
                            <th>name</th>
                            <th>comment</th>
                            <th>logs</th>

                        </tr>  "; 
                        $i=0;
                        while($row=$res->fetch_assoc())
                        {
                          $i++;
                          echo "<tr>";
                          echo "<td>{$i}</td>";
                          echo "<td> {$row["BTITLE"]}</td>";
                          echo "<td>  {$row["NAME"]}</td>";
                          echo "<td>  {$row["COMM"]}</td>";
                          echo "<td>  {$row["LOGS"]}</td>";
                         
                          echo "</tr>";   
                        }
                         echo "</table>";

    
            } else {
                echo "<p class='error'>no commands found</p>";
            }
            ?>

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