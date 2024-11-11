<?php

  $hostname = "localhost";
  $user = "root";
  $pwdb = "";
  $dbname = "snickerz";

  $connect = mysqli_connect($hostname, $user, $pwdb, $dbname) OR DIE ("Connection failed");
                  
  if(isset($_POST["pay"])){

    $sqlEmptyCart = "TRUNCATE TABLE cart";
    $sqlRun = mysqli_query($connect,$sqlEmptyCart);
    echo '<script>alert("Payment Made!");</script>';
    header("Location:index2.php");

  }
                    
?>
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
        <link rel="stylesheet" href="css/form.css">

        <title>SNICKERZ GAMING PERIPHERAL</title>
    </head>

    <body>

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
        
        <div class="smallCont">

            <div class="form">
                <form method="post" action="paymentGateway.php">
    
                        <div class="billAddress" style="float: left; width: 60%; display: inline-block; padding-right: 10%;">
                            <h1>Billing Address</h1>
    
                            <div class="fName" >
                                Full Name: <br>
                                <input size= 50 type="text" name="fullName" placeholder="Enter Full Name"><br><br>
                            </div>
                            
                            <div class="email" >
                                E-mail: <br>
                                <input type="text" name="email" placeholder="Enter E-mail"><br><br>
                            </div>
    
                            <div class="address" >
                                Address: <br>
                                <input size= 50 type="text" name="address" placeholder="Enter Address"><br><br>
                            </div>
    
                            <div class="city" >
                                City: <br>
                                <input type="text" name="city" placeholder="Enter City"><br><br>
                            </div>
    
                            <div class="stateNzip">

                                <div class="zip" style="float: right; display: inline-block;">
                                    Zip code: <br>
                                    <input type="text" name="zip" placeholder="Enter Zip Code"><br><br>
                                </div>

                                <div class="state" style="float: left; display: inline-block;">
                                    State: <br>
                                    <input type="text" name="state" placeholder="Enter State"><br><br>
                                </div>

                                
                            </div>
    
    
                        </div>
    
                        <div class="payment" style="float: left; width: 40%; display: inline-block;">
                            <h1>Payment</h1>
    
                            <div class="nameCard">
                                Name on Card: <br>
                                <input size= 50 type="text" name="nameCard" placeholder="Enter Name on Card"><br><br>
                            </div>
    
                            <div class="credNumber">
                                Credit Card Number: <br>
                                <input size= 30 type="text" name="credNumber" placeholder="Enter Credit Card Number"><br><br>
                            </div>
    
                            <div class="expMonth">
                                Expired Month: <br>
                                <input type="text" name="expMonth" placeholder="Enter Expired Month"><br><br>
                            </div>
    
                            <div class="cvv" style="float: right; display: inline-block;">
                                CVV: <br>
                                <input type="text" name="cvv" placeholder="Enter CVV"><br><br>
                            </div>
    
                            <div class="Year" style="float: left; display: inline-block;">
                                <div class="year">
                                    Expired Year: <br>
                                    <input type="text" name="year" placeholder="Enter Expired Year"><br><br>
                                </div>
                            
                            </div>
                        </div>
                    
                    <input type="submit" name="pay" value="Continue to Checkout" style="width: 22cm; height: 2cm;">
                    
                </form>

                
        
            </div>
            <br><br>
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
        </footer>
        

    </body>