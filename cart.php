
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
        </style>
        <script>
            function totalItems(originalTotal, additionalTotal){
                var newTotal = originalTotal + additionalTotal;
                return newTotal;
            }
        </script>    
    </head>

    <body>
        
        <?php
            session_start();
            if(!isset($_SESSION["username"])){
                header("Location:login.php");
            }
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

        <?php
            $hostname = "localhost";
            $user = "root";
            $pwdb = "";
            $dbname = "snickerz";

            $connect = mysqli_connect($hostname, $user, $pwdb, $dbname) OR DIE ("Connection failed");
        ?>


        <!----Store---->
        <div class="smallCont">

            <h2 class="title">Store</h2>

            <form method="post" action="cart.php">

                <h2 class="byCatagory">MOUSE</h2>
                <div class="row">
                    <div class="col4b">
                        <img src="img/logitech/Mouse/G Pro Wireless.png">
                        <h4>LOGITECH G PRO Wireless</h4>
                        <p>RM 500.00</p>
                        <button type="submit" name="01" class="btn">Add Cart</button>
                    </div>
                    <div class="col4b">
                        <img src="img/logitech/Mouse/G103.png">
                        <h4>LOGITECH G103 MOUSE</h4>
                        <p>RM 100.00</p>
                        <button type="submit" name="02" class="btn">Add Cart</button>
                    </div>
                    <div class="col4b">
                        <img src="img/logitech/Mouse/G502.png">
                        <h4>LOGITECH G502 MOUSE</h4>
                        <p>RM 450.00</p>
                        <button type="submit" name="03" class="btn">Add Cart</button>
                    </div>
                </div>


                <h2 class="byCatagory">KEYBOARD</h2>
                <div class="row">
                    <div class="col4b">
                        <img src="img/logitech/Keyboard/G Pro Keyboard.png">
                        <h4>LOGITECH G PRO KEYBOARD</h4>
                        <p>RM 800.00</p>
                        <button type="submit" name="04" class="btn">Add Cart</button>
                    </div>
                    <div class="col4b">
                        <img src="img/logitech/Keyboard/G213 Prodigy Keyboard.png">
                        <h4>LOGITECH G213 PRODIGY KEYBOARD</h4>
                        <p>RM 300.00</p>
                        <button type="submit" name="05" class="btn">Add Cart</button>
                    </div>
                    <div class="col4b">
                        <img src="img/logitech/Keyboard/G413 Keyboard.png">
                        <h4>LOGITECH G413 KEYBOARD</h4>
                        <p>RM 400.00</p>
                        <button type="submit" name="06" class="btn">Add Cart</button>
                    </div>
                </div>

                <h2 class="byCatagory">HEADSET</h2>
                <div class="row">
                    <div class="col4b">
                        <img src="img/logitech/Headset/G Pro Headset.png">
                        <h4>LOGITECH G PRO HEADSET</h4>
                        <p>RM 350.00</p>
                        <button type="submit" name="07" class="btn">Add Cart</button>
                    </div>
                    <div class="col4b">
                        <img src="img/logitech/Headset/G431 Headset.png">
                        <h4>LOGITECH G431 HEADSET</h4>
                        <p>RM 250.00</p>
                        <button type="submit" name="08" class="btn">Add Cart</button>
                    </div>
                    <div class="col4b">
                        <img src="img/logitech/Headset/G733 Headset.png">
                        <h4>LOGITECH G733 HEADSET</h4>
                        <p>RM 700.00</p>
                        <button type="submit" name="09" class="btn">Add Cart</button>
                    </div>
                </div>

            </form>    
        </div>

        <?php

                if(isset($_POST["01"])){
                    $productName = "LOGITECH G PRO Wireless";
                    $price = 500.00;

                }
                elseif(isset($_POST["02"])){
                    $productName = "LOGITECH G103 MOUSE";
                    $price = 100.00;
                }
                elseif(isset($_POST["03"])){
                    $productName = "LOGITECH G502 MOUSE";
                    $price = 450.00;
                }
                elseif(isset($_POST["04"])){
                    $productName = "LOGITECH G PRO KEYBOARD";
                    $price = 800.00;
                }
                elseif(isset($_POST["05"])){
                    $productName = "LOGITECH G213 PRODIGY KEYBOARD";
                    $price = 300.00;
                }
                elseif(isset($_POST["06"])){
                    $productName = "LOGITECH G413 KEYBOARD";
                    $price = 400.00;
                }
                elseif(isset($_POST["07"])){
                    $productName = "LOGITECH G PRO HEADSET";
                    $price = 350.00;
                }
                elseif(isset($_POST["08"])){
                    $productName = "LOGITECH G431 HEADSET";
                    $price = 250.00;
                }
                elseif(isset($_POST["09"])){
                    $productName = "LOGITECH G733 HEADSET";
                    $price = 700.00;
                }
            
                if(isset($productName)){
                    $sql = "INSERT INTO cart (name, price) VALUES ('$productName','$price')";
                    $sendsql = mysqli_query($connect,$sql);
                    echo '<script>alert("Item added to cart!");</script>';
                }
                
        ?>


        <div class="smallCont">
            <h2 class="title">Store</h2>

            <table style="border: 1px solid #1C2368; padding:10px; width: 100%;">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>

                <?php
                    $total = 0.00;
                    $sqlEmpty = "SELECT * FROM cart";
                    $result = mysqli_query($connect,$sqlEmpty);

                    if($result){
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td> RM " . $row['price'] . "</td>";
                            echo "</tr>";
                            $total = $total + $row['price'];
                        }
                    }
                ?>
                <script>
                    document.write("<tr>" + "<td>Total</td>"+ "<td></td>" + "<td>RM " + <?php echo $total?> + "</td>" + "</tr>");
                </script>

                <br>
                
            </table>
            
            <form method="post" action="cart.php">
                <button type="submit" name="clearCart" class="btn">Clear Cart</button>
                <button class="btn"><a href="paymentGateway.php">Check Out</a></button>
            </form>
            
                

            <?php
                if(isset($_POST["clearCart"])){
                    $sqlEmptyCart = "TRUNCATE TABLE cart";
                    $sqlRun = mysqli_query($connect,$sqlEmptyCart);
                }
            ?>
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