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
        <link rel="stylesheet" href="css/aboutUsStyle.css">

        <title>SNICKERZ GAMING PERIPHERAL</title>
    </head>

    <body>
        <?php
            session_start();
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

            </div>

        </div>


        <!----About Us---->
        <div class="missionBox">
            <div class="mission">
                <h1>
                    ~~Mission~~
                </h1>
    
                <p1>
                    To ease users to buy peripherals from our stock within the comfort of home
                </p1>
            </div>
        </div>
        
        <div class="aboutUsBox">
            <div class="aboutUs">
                <h1 style="text-align: center;">
                    ABOUT US
                </h1>
    
                <p1>
                    Snickers is established in March 2021 and the name Snickers come from the snack name which all
                    of the group love. The group consist of 4 members and led by Mohamad Wafiq Dannial bin Mohd Wazeer
                    and the other members are Amir Asyraaf Aiman bin Amir Hamzah, Wan Muhammad Najmi Bin Wan
                    Khairuzzaman Abdul Syakir Imran bin Abdul Salim. Snickerz Incorporated is a retail store focusing on selling
                    gaming related peripherals. Snickerz Inc., was a concept which started in the year 2019, and came into
                    fruition in early 2020.<br><br>

                    The idea came because of the pandemic, which made it difficult for walking purchases due to Standard Operating 
                    Procedures for public health. Our system are develop to make ordering gaming peripherals more easily.You don’t 
                    have to go to the store to buy the item that you want. It also reduces the cost that you must pay. We want to 
                    create a system that are easy to use for the user and the admin. The user will register an account to store their 
                    item in the cart.<br><br><br><br>
                </p1>
            </div>

            <div class="map">
                <h1 style="text-align: center;">
                    MAP
                </h1>
                <p style="text-align: center;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6382916793054!2d101.63443725098985!3d2.9199414978628186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb6de67d336b9%3A0xd7b9674ef3df2ac2!2sTamarind%20Bldg%20Rd%2C%20Cyberjaya%2C%2063000%20Cyberjaya%2C%20Selangor!5e0!3m2!1sen!2smy!4v1626716576240!5m2!1sen!2smy" width="600" height="450" style="border: 1px solid black;" style="text-align: center;" allowfullscreen="" loading="lazy"></iframe>
                </p>
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