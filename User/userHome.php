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
            right: -9;
        }

        ul a {
            text-decoration: none;
            color: #000;
        }

        section h1 {
            text-align: center;
            font-size: 3rem;
            color: black;
            margin-top: 5rem;
            background-color: #fff;
            margin-bottom: 0.2rem;
            font-weight: 600;
        }




        .main-container {
            width: 100%;
            height: 90vh;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .main-sub-container {
            width: 40%;
            height: 70%;
            background-color: #a5d512;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px #fff;
            /* display: flex;
            justify-content: center;
            align-items: center; */
            padding: 1rem;
            color: #fff;

        }

        .left-containter h2 {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: black;
            margin-top: 3rem;

        }

        .book-search {
            margin-top: 2rem;
            width: 90%;
            height: 20vh;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px #fff;
            margin-top: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            font-weight: 500;
            margin-left: 1.3rem;
        }

        button{
            width: 80%;
            height: 100%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px #fff;
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            font-weight: 600;
            margin-left: 3.7rem;

        } 
        button:hover{
            background-color: #a5d512;
            color: #fff;
        }
        .right-containter h2{
            text-align: center;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: black;
            margin-top: 3rem;

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
    <section>
        <h1>Welcome your name</h1>
    </section>

    <main>


        <div class="main-container">

            <div class="main-sub-container left-containter">
                <h2>Search a book</h2>
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                    <input class="book-search" type="text" name="search" required placeholder="Enter book name or keywords">
                    <button type = "submit" name = "submit"> Search</button>
                </form>

                <?php

                if(isset($_POST['submit'])){
                    $sql  = "SELECT * FROM books WHERE BTITLE LIKE '%{$_POST["search"]}%' or keywords LIKE '%{$_POST["search"]}%'";
                    $result = $db->query($sql);
                    if ($result -> num_rows > 0){
                        echo " <table border = '1'>
                        <tr>
                             <th>Book id</th>
                            <th>Book Title</th>
                            
                            <th>Keywords</th>
                            <th>File</th>
                            <th>comment</th>
                        </tr>";
                        $i = 0;
                        while($row = $result->fetch_assoc()){
                            $i++;
                            echo " <tr>
                            <td>{$i}</td>
                            <td>{$row["BTITLE"]}</td>
                            <td>{$row["keywords"]}</td>
                            <td><a href='{$row["File"]}' target = '_blank '>view </a> </td>; 
                            echo"</tr>";
                            
                        }
                        echo "</table>";
                             

                    }else{
                        echo "<p >No Record found</p>";
                    }
                }

                ?>

            </div>
            <div class="main-sub-container right-containter" >
            <h2>Request a book</h2>
                <form action="">
                    <input class="book-search" type="text" name="" placeholder="Enter book ">
                    <button>Send Request</button>
                </form>
                
            </div>



        </div>


    </main>







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