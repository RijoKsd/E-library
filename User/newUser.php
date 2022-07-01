<?php
    include "../dataBase.php"
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


    <link rel="stylesheet" href="../css/newUser.css">
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
                <a href="">
                    <li>FOOTER</li>
                </a>

            </ul>
        </div> <!-- end of nav-right -->


    </header> <!-- end of header -->

    <main>
        <div class="login-form">
            <?php
                if (isset($_POST["submit"])){
                    $sql = "INSERT INTO student (NAME,PASS,MAIL,DEP) VALUES ('{$_P0ST["name"]}','{$_POST["pass"]}','{$_POST["mail"]}','{$_POST["dept"]}')";
                    $db->query($sql);
                    // echo "<h3>Successfully Registered</h3>";
                    echo "<script type='text/javascript'>
                        alert('Successfully Registered');
                         window.location.href='../index.php';
                    </script>";
                    
                } 
            ?>
            <form action= "<?php echo $_SERVER["PHP_SELF"]; ?> " method="POST">
                <h1> New User</h1>
                <input type="text" class="input-box" name="name" placeholder="Username" required> 

                <input type="email" placeholder="Email" name="mail" class="input-box"  required>


                <label  class="department">Department</label>
                <select name="dept"  required>
                    <option  value="" ></option>
                    <option  value="CSE">CSE</option>
                    <option  value="CIVIL">CIVIL</option>
                    <option  value="ECE">ECE</option>
                    <option  value="MECH">MECH</option>
                    <option  value="MBA">MBA</option>
                   </select>

                <input type="password" class="input-box" placeholder="Password" name="pass" required> 
                <button type="submit" name="submit"> Register </button>

                 

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
    </div> <!-- end of footer-basic -->
</body>
</html>
