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
            
			$hostname = "localhost";
		    $usernamedb = "root";
			$pwdb = "";
			$dbname = "snickerz";

            $username = $_SESSION["username"];
		
			$connect = mysqli_connect($hostname, $usernamedb, $pwdb, $dbname) OR DIE ("Connection failed");

            $sqlcheck = "SELECT username, email, name FROM profile WHERE username = '$username'";
					
			$result = mysqli_query($connect,$sqlcheck);
            $row = mysqli_fetch_assoc($result);

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
        
        <!--Registration-->  
        <div class="login">
            <h1 class="title"><?php echo "Hello, ". $_SESSION["username"] ?></h1>

            <form class="registerForm" method="post" action="account.php">
                <div class="inform">
                    <label>Username : <?php echo $row["username"] ?></label> 
                </div>

                <div class="inform">
                    <label>Email : <?php echo $row["email"] ?></label>
                </div>

                <div class="inform">
                    <label>Name : <?php echo $row["name"]?></label>
                </div>
                <div class="inform">
                    <button type="submit" name="logOut" class="btn">LOG OUT</button>
                    <button type="submit" name="upDate" class="btn">UPDATE PROFILE</button>
                </div>
            </form>
            <br><br><br><br><br><br><br>
            
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

        <?php
							
				if(isset($_POST["upDate"])){
                    header("Location:updateProfile.php");
				}
                elseif(isset($_POST["logOut"])){
                    session_destroy();
                    echo '<script>alert("You have been logged out")</script>';
                    header("Location:index.php");
                }
					
		
				
        ?>


    </body>
</html>