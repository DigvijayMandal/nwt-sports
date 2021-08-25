<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NWT Sports</title>
    <link rel="shortcut icon" href="./assets/logo.jpg">

    <!--font awsome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/contact.css">

</head>
<body>
    <section class="popup" id="blur">
        <div class="header">
            <div class="navbar">
                <div class="title">
                    <img src="./assets/logo.jpg" alt="">
                    <h2>NWT Sports</h2>
                </div>
                <a href="#">Home</a>
            </div>

            <div class="content-cen">
                <div class="brand"><img src="./assets/logo.jpg" alt=""></div>
                <button id="open" onclick="toggle()">Contact Us</button>
            </div>
        </div>
        <div class="footer">
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
        </div>
    </section>
    <div class="contact" id="come">
        <div class="container">
            <div class="title">
                <h2>Contact Us</h2>
            </div>
            <div class="row">
                <div class="contact-left">
                    <form action="">
                        <input type="text" class="form-control" placeholder="Name">
                        <input type="email" class="form-control" placeholder="Email">
                        <textarea placeholder="Message" rows="6"></textarea>
                        <button type="submit" class="submit-btn" id="close" onclick="toggle()">Send Now</button>
                    </form>
                </div>
            </div>
        </div>
        </div>

    <script type="text/javascript">
    function toggle(){
        var blur = document.getElementById('blur');
        blur.classList.toggle('active');
        var popup = document.getElementById('come');
        popup.classList.toggle('active');
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
