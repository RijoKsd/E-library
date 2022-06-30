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
            <h3 id="heading"> search book</h3>
         
            <div id="center">
                <form style="margin: auto; width: 160px;" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
                    
                    <label >enter book name or keywords</label>
                    <input type="text" required name="name" placeholder="type here..">
                   <br>
                    <button style="margin: auto; width: 80px;" type="submit" name="submit">seach books</button>

                </form><br>
                <br>
                </div>
             <?php

if(isset($_POST['submit']))
{
   

            $sql = "SELECT * FROM book where BTITLE like'%{$_POST["name"]}%'  or keywords like'%{$_POST["name"]}%' ";
            $res = $db->query($sql);
            if ($res->num_rows > 0)
             {
                echo "<table border='1'> 
                        <tr>
                            <th>BID</th>
                            <th>BTITLE</th>
                            <th>KEYWORDS</th>
                            <th>FILE</th>
                            <th>comment</th>

                        </tr>  "; 
                        $i=0;
                        while($row=$res->fetch_assoc())
                        {
                          $i++;
                          echo "<tr>";
                          echo "<td>{$i}</td>";
                          echo "<td> {$row["BTITLE"]}</td>";
                          echo "<td>  {$row["KEYWORDS"]}</td>";
                        
                          echo "<td>  <a href='{$row["FILE"]}'target='_blank' >view</a></td>";
                          echo "<td>  <a href='comment.php?id={$row["FILE"]}'target='_blank' >comment</a></td>";

                          echo "</tr>";   
                        }
                         echo "</table>";

    
            } else {
                echo "<p class='error'>no books records found</p>";
            }
        }
            ?>

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