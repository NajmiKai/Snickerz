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
        <br><br><br><br><br><br>  
        <div class="login">
            <form class="registerForm" method="post" action="updateProfile.php">
                <legend style="font-weight:bold;">Which would you like to change ?</legend><br>
                <input type ="radio" name="updateCategory" value="name">Name

                <input type ="radio" name="updateCategory" value="email">Email
                
                <input type ="radio" name="updateCategory" value="password">Password<br><br>
                <input type = "text" name="updatedValue" size="50">
                <div class="inform">
                    <button type="submit" name="upDate" class="btn">UPDATE PROFILE</button>
                </div>
            </form>
            
        </div>
        <br><br><br><br><br><br>
        

        
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
				switch($_POST["updateCategory"])
                {
                    case "name":{

                        $new = $_POST["updatedValue"];

                        $sqlcheck = "UPDATE profile SET name = '$new' WHERE username = '$username'";
			            $result = mysqli_query($connect,$sqlcheck);
                        
                        break;
                    }
                    case "email":{

                        $new = $_POST["updatedValue"];

                        $sqlcheck = "UPDATE profile SET email = '$new' WHERE username = '$username'";
			            $result = mysqli_query($connect,$sqlcheck);
                       
                        break;
                    }
                    case "password":{

                        $new = $_POST["updatedValue"];

                        $sqlcheck = "UPDATE profile SET password = '$new' WHERE username = '$username'";
                        $sqlcheck2 = "UPDATE login SET password = '$new' WHERE username = '$username'";
			            $result = mysqli_query($connect,$sqlcheck);
                        $result2 = mysqli_query($connect,$sqlcheck2);
                        
                        break;
                    }
                }


                if($result){
                    echo '<script>alert("Profile Updated");</script>';
                    header("Location:account.php");
                }  
                else
                    echo '<script>alert("Profile Not Updated");</script>';

            }

				
        ?>
        

    </body>
</html>