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
            /* position: absolute; */
            /* right:-25rem; */
            /* left: 40%; */
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
        table{
            width: 90%;
            height: 10vh;
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px solid #ddd;
            text-align: center;
            margin-right: 5rem;
            margin-top: 25rem;
            margin-left: -55rem;
            border: 1px solid black;
        }
        .error{
            color: red;
            font-size: 1.5rem;
            margin-left: 5rem;
            margin-right: 10rem;
            
            font-weight: 600;
            
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
                <a href="./requestBook.php">
                    <li>REQUEST BOOK</li>
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

                <h2>Search a book</h2>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                    <input class="input-box" type="text" name="search" required placeholder="Enter book name or keywords">
                    <button type="submit" name="submit"> Search</button>
                </form>


            </div>
            <?php
            if (isset($_POST['submit'])) {
                $sql  = "SELECT * FROM book WHERE BTITLE LIKE '%{$_POST["search"]}%' or KEYWORDS LIKE '%{$_POST["search"]}%'";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    echo " <table border = '2'>
                        <tr>
                             <th>BID</th>
                            <th>BTITLE</th>
                            <th>KEYWORDS</th>
                            <th>FILE</th>
                        </tr>";
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        echo " <tr>";
                        echo " <td>{$i}</td>";
                        echo " <td> {$row["BTITLE"]}</td>";
                        echo " <td> {$row["KEYWORDS"]}</td>";
                        echo " <td> <a href='{$row["FILE"]}' target = '_blank '>view </a> </td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p class='error'>No Record found</p>";
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