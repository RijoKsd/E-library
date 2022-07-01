<?php
    session_start();
    include "../dataBase.php";
?>



<!-- Database connect -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-lib</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


    <link rel="stylesheet" href="../css/adminLogin.css">
</head>

<body>
    <header>
        <div class="nav-left">
            <a href="../index.php"> <img class="logo" src="../img/logo.png" alt="logo"> </a>
        </div> <!-- end of nav-left -->
        <div class="nav-right">
            <ul class="nav-items">
                <a href="../Admin/adminLogin.php">
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
        <div class="login-form">
            <?php 
                if(isset($_POST["submit"])){
                    $sql = " SELECT * FROM admin WHERE ANAME = '{$_POST["adminName"]}' AND APASS='{$_POST["adminPass"]}'";
                    $result = $db -> query($sql);
                    if($result -> num_rows > 0){
                        header("location: ../Admin/adminHome.php");
                    }else{
                        echo '<script type="text/JavaScript"> 
                             alert("Invalid Admin Name or Password");
                             </script>';
                    }
                }
            
            ?>
            <form action="adminLogin.php" method="post">
                <h1> Admin Login</h1>
                <input type="text" class="input-box"  name="adminName"  placeholder="Admin name" required>

                <input type="password" class="input-box" name="adminPass" placeholder="Password" required>
                <button name="submit" type="submit"> Login </button>

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