<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-lib</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/index.css">


</head>
<style>
   
</style>

<body>
    <div>


        <div>

            <nav>
                <ul>
                    <li>E-Library</li>
                    <li><a href="new.php">NEW USER</a></li>
                    <li><a href="ulogin.php">USER</a></li>
                    <li><a href="alogin.php">ADMIN</a></li>

                </ul>
            </nav>

        </div>

        <div>
            <br>
            <br>
            <br>
            <br>
            <br>


            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="pictures/koi.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="pictures/abhi.PNG" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="pictures/book.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

        </div>
        <!-- <div id="navi">
            <?php
            include "sidebar.php"
            ?>
        </div> -->

    </div>

    <!-- <div class="footer">
            <p>copyright &copy;NOT NULL</p>
        </div> -->
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>E <span>LIBRARY</span></h3>

            <p class="footer-links">
                <a href="index.php">Home</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
                |
                <!-- <a href="#">Blog</a> -->
            </p>

            <p class="footer-company-name">Copyright © 2022 <strong>NOT NULL</strong> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>valav</span>
                    kuttikol city</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 7025533678</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:abijithsaju3336@gmail.com">abijithsaju3336@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <strong>NOT NULL</strong> is a software company where you can find more creative websites,android and ios applications
                and
                Effects along with
                HTML, JavaScript and Projects using C/C++.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>


</body>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>

</html>