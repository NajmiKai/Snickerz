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
            <h1 class="title">Registration</h1>

            <form class="registerForm" method="post" action="loginReg.php">
                <div class="inform">
                    <label>Username</label>
                    <input type ="text" name="username">
                </div>

                <div class="inform">
                    <label>Email</label>
                    <input type ="text" name="email">
                </div>

                <div class="inform">
                    <label>Name</label>
                    <input type ="text" name="name">
                </div>

                <div class="inform">
                    <label>Password</label>
                    <input type ="password" name="password">
                </div>
                <div class="inform">
                    <button type="submit" name="register" class="btn">Register</button>
                </div>
                <p style="color: #000">
                    Already a member? <a href="login.php" style="color: #bd0000">Sign In</a>
                </p>
            </form>
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
							
				if(isset($_POST["register"])){
					
					$hostname = "localhost";
					$username = "root";
					$pwdb = "";
					$dbname = "snickerz";
		
					$connect = mysqli_connect($hostname, $username, $pwdb, $dbname) OR DIE ("Connection failed");
					
					$username = $_POST["username"];
					$password = $_POST["password"];
					$email = $_POST["email"];
					$name = $_POST["name"];
									
					$sqlcheck = "SELECT * FROM login WHERE username = '$username'";
					
					$result = mysqli_query($connect,$sqlcheck);	
					
					if ($result) {
						if (mysqli_num_rows($result)>0) {
							echo "<div id='msgfailed'>Username already exist. <br>Please insert another username.</div>";
							exit();
						}else{
							
							$sql = "INSERT INTO login (username, password) VALUES ('$username','$password')";					
							$sql2 = "INSERT INTO profile (username, password, email, name) VALUES ('$username','$password','$email','$name')";
							$sendsql = mysqli_query($connect,$sql);
							$sendsql = mysqli_query($connect,$sql2);
							
							if($sendsql){
                                echo '<script>alert("You have been registered");</script>';
                                header("Location:login.php");
                            }  
							else
								echo "<div>Failed to register. Please try again.</div>";
						}
					
					}
				}
				
        ?>

    </body>
