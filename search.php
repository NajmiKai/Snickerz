
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
            
            form.example input[type=text] {
                padding: 10px;
                font-size: 17px;
                border: 1px solid grey;
                float: left;
                width: 80%;
                background: #f1f1f1;
            }

                form.example button {
                float: left;
                width: 20%;
                padding: 10px;
                background: #1C2368;
                color: white;
                font-size: 17px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
                }

                form.example button:hover {
                background: #bd0000;
                }

                form.example::after {
                content: "";
                clear: both;
                display: table;
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

            <form class="example" method="post" action="search.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit" name="searchButton"><i class="fa fa-search"></i></button>
            </form>

            <table style="border: 1px solid #1C2368; padding:10px; width: 100%;">

                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>

                <?php

                if(isset($_POST["searchButton"])){

                    $productItem = $_POST["search"];
                    
                    $sqlEmpty = "SELECT * FROM product WHERE name LIKE '%".$productItem."%'";
                    $result = mysqli_query($connect,$sqlEmpty);

                    if($result){
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td> RM " . $row['price'] . "</td>";
                            echo "<td>" . $row['quantity'] . "</td>";
                            echo "</tr>";
                        }
                    }
                }
                   
                ?>

                <br>

            </table>
            
            
        </div>


        <div class="smallCont">
            <h2 class="title">All Stocks</h2>

            <table style="border: 1px solid #1C2368; padding:10px; width: 100%;">

                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>

                <?php
                    $sqlEmpty = "SELECT * FROM product";
                    $result = mysqli_query($connect,$sqlEmpty);

                    if($result){
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td> RM " . $row['price'] . "</td>";
                            echo "<td>" . $row['quantity'] . "</td>";
                            echo "</tr>";
                        }
                    }
                ?>

                <br>
                
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
</html>     