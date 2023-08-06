<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replica Heaven</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,900;1,300;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f27dad717c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/candle.css">
</head>

<body>

    <button class="burger-btn">
        <div class="burger-btn__box">
            <div class="burger-btn__bars"></div>
        </div>
    </button>
    <button class="social-btn social-btn__fb">
        <i class="fa-brands fa-facebook"></i>
        </div>
    </button>
    <button class="social-btn social-btn__tw">
        <i class="fa-brands fa-twitter"></i>
        </div>
    </button>
    <button class="social-btn social-btn__ds">
      <i class="fa-brands fa-instagram"></i>
        </div>
    </button>

    <nav class="nav">
        <div class="nav__items">
            <a href="#offers" class="nav__item">Cart</a>
            <a href="#team" class="nav__item">FAQ</a>
            <a href="#contact" class="nav__item">About us</a>
            <a href="#contact" class="nav__item">contact</a>
        </div>
    </nav>

    <header class="header section">
      <div class="apu">
        <div class="bg"> Replica heaven </div>
        <div class="fg"> Replica heaven </div>
      </div>
    </header>



    <section class="login section-padding section white-section" id="login">
        <div class="wrapper">
            <div class="login__container">
                <div class="login__box">
                    <div class="login__box__form">
                        <h2 class="login">Sign in</h2>
                        <form action="register.php" method="post">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" required>
                            <br>
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" required>
                            <br>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                            <br>
                            <label for="confirm_password">Confirm password:</label>
                            <input type="password" id="confirm_password" name="confirm_password" required>
                            <br>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>    
            </div>
        </div>    
    </section>  
        
    <footer>
        <div class="footer__box footer__box-desktop">
            <h3 class="footer__box-title">About Replica Heaven</h3>
            <ul class="footer__box-list" style="display: flex;">
                <li class="footer__box-list-item"><a href="#">About us</a></li>
                <li class="footer__box-list-item"><a href="#">Management</a></li>
                <li class="footer__box-list-item"><a href="#">Career</a></li>
                <li class="footer__box-list-item"><a href="#">FAQ</a></li>
            </ul>
        </div>
        <hr>
        <p class="footer__bottom-text"> &copy; <span class="footer__year"></span> Replica Heaven </p>

    </footer>
    <script src="./js/main.js"></script>

    
    
</body>

</html>
