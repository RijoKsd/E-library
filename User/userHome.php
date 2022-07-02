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
            position: absolute;
             
        }

        ul a {
            text-decoration: none;
            color: #000;
        }

        .main-container {
            width: 100%;
            height: 100%;
            background-color:#6CC4A1;
            display: flex;
            justify-content: space-around;
            align-items: center;


        }

        button {
            width: 100%;
            height: 40vh;
            cursor: pointer;
            background-color: #EA8C48;
            border-radius: 9%;
            border: none;
            box-shadow: 0 0 4px  1px #000;
            margin:1rem;
            
        }

        button:hover {

            color: #EA8C48
        }

        button h1 {
            text-decoration: none;
            color: #000;
            font-size: 3rem;
            font-weight: 600;

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
    </style> <!-- end of style -->



</head>






<body>
    <header>
        <div class="nav-left">
            <a href="../index.php"> <img class="logo" src="../img/logo.png" alt="logo"> </a>
        </div> <!-- end of nav-left -->
        <div class="nav-right">
            <ul class="nav-items">


                <a href="../index.php">
                    <li>LOG OUT</li>
                </a>

            </ul>
        </div> <!-- end of nav-right -->


    </header> <!-- end of header -->

    <main>

        <div class="main-container">


            <a href="../requestBook.php">
                <button>
                    <h1>Request Book</h1>
                </button>
            </a>
            <a href="../bookSearch.php">
                <button>
                    <h1>Search Book</h1>
                </button>
            </a>
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