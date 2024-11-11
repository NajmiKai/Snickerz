<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b55f91e3f8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <title>SNICKERZ GAMING PERIPHERAL</title>
    </head>

    <body>
        <?php
            session_start();
            echo '<script>alert("Payment Made!");</script>';
        ?>

        <!--Header-->
        <div class="header">
            

            <div class="container">

            <div class="navbar">
                <div class = "logo">
                    <a href="index.php"><img src="img/logo.png" width="170px"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="search.php"><img src="img/search.png" width="30px" height="30px"></a></li>
                        <li><a href="aboutUs.php">About Us</a></li>
                        <li><a href="contactUs.php">Contact Us</a></li>
                        <li><a href="webSwitch.php">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="img/cart.png" width="30px" height="30px"></a>
            </div>

            <div class="row">
                <div class="col2">
                    <h1>Zero Compromises.<br>Go beyond limits.</h1>
                    <p>Dominate Opponents, Being human is your only limitation.</p>
                </div>
                <div class="col2">
                    <img src="img/promotional.png">
                </div>
            </div>

            </div>

        </div>


        <!--Featured Products-->
        <div class="smallCont">
            <h2 class="title">Featured Products</h2>
            <div class="row">
                <div class="col4">
                    <a href="cart.php">
                    <img src="img/logitech/Mouse/G Pro Wireless.png">
                    <a href="cart.php">
                    <h4>LOGITECH G PRO Wireless</h4>
                </div>
                <div class="col4">
                    <a href="cart.php">
                    <img src="img/logitech/Headset/G Pro Headset.png">
                    <a href="cart.php">
                    <h4>LOGITECH G PRO Headset</h4>
                </div>
                <div class="col4">
                    <a href="cart.php">
                    <img src="img/logitech/Keyboard/G Pro Keyboard.png">
                    <a href="cart.php">
                    <h4>LOGITECH G PRO KEYBOARD</h4>
                </div>
                <div class="col4">
                    <a href="cart.php">
                    <img src="img/logitech/Mouse/G103.png">
                    <a href="cart.php">
                    <h4>LOGITECH G103 MOUSE</h4>
                </div>
            </div>
        </div>


        
        <!--Footer-->
        <footer>
            <div class="footer">
            <div class="containerFooter">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Gaming? Come to Snickerz</h3>
                        <p>This website is property of WAKANDAN SDN BHD.</p>
                        <p>Tamarind Bldg Rd, Cyberjaya, 63000 Cyberjaya, Selangor</p>
                        </div>

                    <div class="footer-col-2">
                        <img src = "img/logo.png">
                        <p>This is Snickerz Gaming Peripheral Shop, your one-stop shop to get gaming peripherals.</p>
                        </div>

                    <div class="footer-col-3">
                        <h3>Links to Other Parts of the website</h3>
                            <ul>
                                <li>Home</li>
                                <li>Store</li>
                                <li>About Us</li>
                                <li>Contact Us</li>
                            </ul>
                    </div>
                </div>
            </div>
            </div>
        </footer>

    </body>
</html>      