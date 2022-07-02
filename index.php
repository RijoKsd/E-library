<?php
session_start();
include("./dataBase.php");
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


    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="nav-left">
            <a href="index.php"> <img class="logo" src="img/logo.png" alt="logo"> </a>
        </div> <!-- end of nav-left -->
        <div class="nav-right">
            <ul class="nav-items">
                <a href="./Admin/adminLogin.php">
                    <li>ADMIN</li>
                </a>
                <a href="">
                    <li>CONTACT</li>
                </a>
                <a href="#footer">
                    <li>FOOTER</li>
                </a>

            </ul>
        </div> <!-- end of nav-right -->


    </header> <!-- end of header -->

    <main>
        <?php
        if (isset($_POST["submit"])) {
            $sql = "SELECT * FROM student WHERE NAME = '{$_POST["name"]}' AND PASS = '{$_POST["pass"]}'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION["id"] = $row["ID"];
                $_SESSION["name"] = $row["NAME"];
                header("location: ./User/userHome.php");
            } else {
                echo '<script type="text/JavaScript"> 
                              alert("Invalid Name or Password");
                              </script>';
            }
        }
        ?>
        <div class="login-form">
            <form action="index.php" method="post">
                <h1> User Login</h1>
                <input type="text" class="input-box" name="name" placeholder="Username" required>

                <input type="password" class="input-box" placeholder="Password" name="pass" required>


                <button type="submit" name="submit"> Login </button>

                <a href="User/newUser.php">Get a free account</a>


            </form>
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