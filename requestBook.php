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

        .main-container {
            width: 65%;
            height: 70vh;
            background-color: #fff;
            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #000;


        }

        .main-sub-container {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .main-sub-container h2 {
            font-weight: 600;
            font-size: 3rem;
            color: #000;
            margin-top: -13rem;

        }

        .input-box {
            margin-top: 5rem;
            width: 100%;
            height: 13vh;
            font-size: 1.9rem;
            font-weight: 600;
        }

        button {
            margin-top: 3rem;
            width: 100%;
            height: 5vh;
            background-color: #EA8C48;
            border: none;
            border-radius: 10px;
            color: #fff;
            font-weight: 600;
            font-size: 1.3rem;
            cursor: pointer;
            transition: 0.5s;
            padding: 10px 20px;
        }

        button:hover {
            background-color: #fff;
            color: #000;
            border: 1px solid #000;
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
    </style>

</head>

<body>
    <header>
        <div class="nav-left">
            <a href="index.php"> <img class="logo" src="img/logo.png" alt="logo"> </a>
        </div> <!-- end of nav-left -->
        <div class="nav-right">
            <ul class="nav-items">

                <a href="./bookSearch.php">
                    <li>SEARCH BOOK</li>
                </a>

                <a href="./index.php">
                    <li>LOG OUT</li>
                </a>

            </ul>
        </div> <!-- end of nav-right -->


    </header> <!-- end of header -->

    <main>
        <div class="main-container">
            <div class="main-sub-container">

                <h2>Request a book</h2>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                    <input class="input-box" type="text" name="request" required placeholder="Enter book name">
                    <button type="submit" name="submit">  Send Request</button>
                </form>


            </div>
            <?php 
       

                if (isset($_POST["submit"])) {
                     
                    $sql = "INSERT INTO request (ID,MES,LOGS) VALUES ({$_SESSION["ID"]}, '{$_POST["request"]}',now())";
                    $db->query($sql);
                    if ($db) {
                        echo "<script>alert('Request sent successfully')</script>";
                    } else {
                        echo "<script>alert('Request not sent')</script>";
                    }
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