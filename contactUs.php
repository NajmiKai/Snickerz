<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b55f91e3f8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/contactUsStyle.css">

        <title>SNICKERZ GAMING PERIPHERAL</title>

        <style>
            table, th, td {
                border: 2px solid #1C2368;
                border-collapse: collapse;
                padding: 25px;
            }

            table {
                margin: auto;
                margin-top: 30px;
                margin-bottom: 30px;
            }

            .table1 h1{
                margin-top: 20px;
                text-align: center;
            }

            .table1 {
                animation: fadeIn 3s;
                -webkit-animation: fadeIn 3s;
                -moz-animation: fadeIn 3s;
                -o-animation: fadeIn 3s;
                -ms-animation: fadeIn 3s;
            }

            @keyframes fadeIn {
                0% {opacity:0;}
                100% {opacity:1;}
            }
  
            @-moz-keyframes fadeIn {
                0% {opacity:0;}
                100% {opacity:1;}
            }
  
            @-webkit-keyframes fadeIn {
                0% {opacity:0;}
                100% {opacity:1;}
            }
  
            @-o-keyframes fadeIn {
                0% {opacity:0;}
                100% {opacity:1;}
            }
  
            @-ms-keyframes fadeIn {
                0% {opacity:0;}
                100% {opacity:1;}
            }
        </style>
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

        <!------Contact Us------>
        <div class="table1">

            <h1>
                CONTACTS
            </h1>
            <table>
                <tr>
                  <td><img src="img/Wafiq1.jpg" style="width: 200px;"></td>
                  <td>
                      Mohamad Wafiq Dannial bin Mohd Wazeer<br>
                      PROJECT MANAGER<br>
                      2019431186<br> 
                      Group Snickerz from CS1104B<br>
                      E-mail: wafiq@sneakerz.com<br>
                  </td>
                </tr>
                <tr>
                  <td><img src="img/syakir.jpg" style="width: 200px;"></td>
                  <td>
                    Abdul Syakir Imran bin Abdul Salim<br>
                    DATABASE MANAGER<br>
                    2019237662<br>
                    Group Snickerz from CS1104B<br>
                    E-mail: syakir@sneakerz.com<br>
                  </td>
                </tr>
                <tr>
                  <td><img src="img/amir.jpg" style="width: 200px;"></td>
                  <td>
                    Amir Asyraaf Aiman Bin Amir Hamzah<br>
                    WEB DEVELOPER 1<br>
                    2019428092<br>
                    Group Snickerz from CS1104B<br>
                    E-mail: amir@sneakerz.com<br>
                  </td>
                </tr>
                <td><img src="img/najmi.jpg" style="width: 200px;"></td>
                  <td>
                    Wan Muhammad Najmi Bin Wan Khairuzzaman<br>
                    WEB DEVELOPER 2<br>
                    2019447678<br>
                    Group Snickerz from CS1104B<br>
                    E-mail: najmi@sneakerz.com<br>
                  </td>
              </table>
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