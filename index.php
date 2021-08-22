<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NWT Sports</title>
    <!---Font--->
    <link rel="stylesheet" href="./resources/font.css">

    <!--font awsome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Normalize Css-->
    <link rel="stylesheet" href="./resources/normalize.css">

    <!--Owl Carasoul-->
    <link rel="stylesheet" href="./resources/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="./resources/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">

    <!--Logo-->
    <link rel="shortcut icon" href="./assets/logo.png">

    <!--Custom css-->
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!--Header Start-->
    <header class="header" id="intro">
        <nav class="navbar">
            <div class="container">
                <div class="brand-and-toggler">
                    <img src="./assets/logo.png" class="logo">
                    <a href="./index.php" class="navbar-brand"> NWT Sports</a>
                    <button type="button" class="navbar-toggler" id="navbar-toggler"><i class="fas fa-bars"></i></button>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="#intro" class="nav-link">home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#our-partners" class="nav-link">our partners</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact-us" class="nav-link">contact us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="hero-div center container">
            <h1>welcome to <img src="./assets//logo.png"  class="logo-img">nwt sports</h1>
            <p>We guarantee you the best experience here</p>

            <div class="hero-btns">
                <a href="#our-partners"><button type="button" class="btn-trans">our partners</button></a>
                <a href="#contact-us"><button type="button" class="btn-white">contact us</button></a>
            </div>
        </div>
        
    </header>
    <!--End of Header-->
    <section class="our-partners" id="our-partners">
        <div class="container">
            <div class="title">
                <h2>Our Partners</h2>
            </div>
            <div class="row owl-carousel owl-theme">
                <div class="our-partners-item">
                    <div class="our-partners-img">
                        <img src="./assets/logo1.jpg" alt="">
                    </div>
                </div>
                <div class="our-partners-item">
                    <div class="our-partners-img">
                        <img src="./assets/download.jpg" alt="">
                    </div>
                </div>
                <div class="our-partners-item">
                    <div class="our-partners-img">
                        <img src="./assets/Capture3.JPG" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact-us">
        <div class="container">
            <div class="title">
                <h2>Contact Us</h2>
            </div>
            <div class="row">
                <div class="contact-left">
                    <h2>Send Message here</h2>
                    <form action="">
                        <input type="text" class="form-control" placeholder="Name">
                        <input type="email" class="form-control" placeholder="Email">
                        <textarea placeholder="Message" rows="6"></textarea>
                        <button type="submit" class="submit-btn">Send Now</button>
                    </form>
                </div>
                <div class="contact-right">
                    <div>
                        <h2>Visit office</h2>
                        <p class="text">
                            Suite 4, Level 6 
 Berkeley Square House 
 Berkeley Square, Mayfair 
 W1J 6BY, UK
                        </p>
                    </div>
                    <div>
                        <h2>Send Email</h2>
                        <p class="text">
                            mj@nwt.realestate
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer class="footer center">
        <div class="container">
            <p class="text">Copyright &copy; | All Rights Reserved</p>
            <div class="footer-links">
                <a href="#" class="center">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="center">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="center">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="center">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#" class="center">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>
        </div>
    </footer>
    <!--Footer End-->

    <!--jquery-->
    <script src="./resources/jquery-3.6.0.js"></script>

    <!--Owl Caraousal-->
    <script src="./resources/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>

    <!--custom js-->
    <script src="./js/script.js"></script>
</body>
</html>
