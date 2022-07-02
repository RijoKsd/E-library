<?php 
     include "../dataBase.php";
    session_start();
    function countRecord($sql, $db){
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <style>   
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: #1e1e1e;
        }

        header {
            width: 100%;
            height: 8vh;
            background-color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
            display: flex;
            justify-content: space-between;
        }

        .nav-left {
            width: 40%;
            height: 100%;
            padding: 1rem 8rem;
        }

        .logo {
            width: 30%;
            height: 4vh;

        }

        .nav-right {
            width: 60%;
            display: flex;
            align-items: center;
        }

        .nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            font-size: 1.3rem;
            list-style: none;
            font-weight: 600;
        }

        ul a {
            text-decoration: none;
            color: #000;
        }

        /* Header finish */

        main {
            width: 100%;
            height: 100vh;
            background-color: #EA8C48;
            display: flex;
            justify-content: center;
            align-items: center;


        }

        .main-container{
            width: 45%;
            height: 60vh;
            margin: auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 5px #fff;
            margin-top: 15rem;
        }
        .sub-container h1 {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: red;
            margin-top: 1rem;
            text-decoration: underline;
            margin-top: 2rem;
        }

         
        .footer-basic {
            padding: 40px 0;
            background-color: #fff;
            color: #4b4c4d;
        }

        .footer-basic ul {
            padding: 0;
            list-style: none;
            text-align: center;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .footer-basic li {
            padding: 0 10px;
        }

        .footer-basic ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.8;
        }

        .footer-basic ul a:hover {
            opacity: 1;
        }

        .footer-basic .social {
            text-align: center;
            padding-bottom: 25px;
        }

        .footer-basic .social>a {
            font-size: 24px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            border: 1px solid #ccc;
            margin: 0 8px;
            color: inherit;
            opacity: 0.75;
        }

        .footer-basic .social>a:hover {
            opacity: 0.9;
        }

        .footer-basic .copyright {
            margin-top: 15px;
            text-align: center;
            font-size: 13px;
            color: #aaa;
            margin-bottom: 0;
        }
        table{
            width: 90%;
            height: 10vh;
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px solid #ddd;
            text-align: center;
            margin:2rem;
             
            border: 1px solid black;
        }




    </style>  <!-- end of style -->



</head>

<body>
    <header>
        <div class="nav-left">
            <a href="../index.php"> <img class="logo" src="../img/logo.png" alt="logo"> </a>
        </div> <!-- end of nav-left -->
        <div class="nav-right">
            <ul class="nav-items">
                <a href="./adminHome.php">
                    <li>DATABASE</li>
                </a>
                <a href="./uploadBooks.php">
                    <li>Upload Books</li>
                </a>
                <a href="./viewRequest.php">
                    <li>View Request</li>
                </a>
                <a href="../index.php">
                    <li>LOG OUT</li>
                </a>

            </ul>
        </div> <!-- end of nav-right -->


    </header> <!-- end of header -->

    <main>

    <div class="main-container">
        <div class="sub-container">
            <h1>Student Details</h1>
        </div>

        <?php
            $sql = "SELECT * FROM student";
            $res = $db->query($sql);
            if ($res->num_rows > 0) {
                echo "<table border='1'> 
                        <tr>
                            <th>SNO</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>DEPARTMENT</th>

                        </tr>  "; 
                        $i=0;
                        while($row=$res->fetch_assoc())
                        {
                          $i++;
                          echo "<tr>";
                          echo "<td>{$i}</td>";
                          echo "<td> {$row["NAME"]}</td>";
                          echo "<td>  {$row["MAIL"]}</td>";
                          echo "<td>  {$row["DEP"]}</td>";
                          echo "</tr>";   
                        }
                         echo "</table>";

    
            } else {
                echo "<p class='error'>no student records found</p>";
            }
            ?>


        
    </div>
        

    </main> <!-- end of main -->

    <div class="footer-basic">
        <footer id="footer">
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">NOT NULL © 2022</p>
        </footer>
    </div>




</body>

 

</html>