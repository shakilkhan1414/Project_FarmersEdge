<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];

        if(file_exists("json/faq.json"))
			{
				$data=file_get_contents("json/faq.json");
				$array_data=json_decode($data,true);

				$user = [	
					'id'=>rand(0,1000),
					'name'=>$name, 
					'email'=>$email, 
					'message'=> $message
				];

				$array_data[]=$user;
				$final_data=json_encode($array_data);

                file_put_contents("json/faq.json",$final_data);
			}
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>FarmersEdge</title>
</head>
<body>
    <section id="font-page">
            <header>
                <div class="logo">
                    <img src="../../img/logo.png" alt="Logo">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="signup.php">Signup</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                </div>
            </header>
        <div>
            <h1>FarmersEdge for Farmers</h1>
            <p>Agriculture is our wisest pursuit, because it will in the end contribute most to real wealth, good morals, and happiness.</p>
            <a href="signup.php" class="btn">Join Now &rarr;</a>
        </div>
    </section>

    <section id="about">
        <h1>About Us</h1>
        <div class="about_wrapper">
            <div class="about_content">
                <p>Farming is growing crops or keeping animals by people for food and raw materials. Farming is a part of agriculture. <br>
                Agriculture started thousands of years ago, but no one knows for sure how old it is. The development of farming gave rise to the Neolithic Revolution whereby people gave up nomadic hunting and became settlers in what became cities.  <br>
                Agriculture and domestication probably started in the Fertile Crescent (the Nile Valley, The Levant and Mesopotamia). The area called Fertile Crescent is now in the countries of Iraq, Syria, Turkey, Jordan, Lebanon, Israel, and Egypt. Wheat and barley are some of the first crops people grew. People probably started agriculture slowly by planting a few crops, but still gathered many foods from the wild.</p>
            </div>
            <div class="about_picture">
                <img src="../../img/side_image.jpg" alt="farmer">
            </div>
        </div>
    </section>

    <section id="want_help">
        <h1>Want our help?</h1>
        <div>
        <a href="login.html">Login &rarr;</a>
        <a href="signup.php">Signup &rarr;</a>
        </div>
    </section>

    <section id="contact">
        <div>
            <img src="../../img/black_image.png" alt="black_image">
        </div>
        <div class="form">
            <form id="faq" method="POST" onsubmit="return faqProc()">            
                
                    <h1>Ask Your Queries</h1>
                    <span id="msg" style="transform: translate(50px,-12px);"></span>
                    <div>
                        <input type="text" name="name" id="name" placeholder="Name*">                
                    </div>
                    <div>
                        <input type="text" name="email" id="email" placeholder="Email*">     
                    </div>
                    <div>
                        <textarea name="message" id="message" placeholder="Message"></textarea>                      
                    </div>
                    <div>
                        <input type="submit" value="Send">
                    </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-1"><div class="contact_info">
            <h2>Contact Info</h2>
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <span>Dhaka, Bangladesh</span>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <span>+8801736928117</span>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <span>khan.shakil.1414@gmail.com</span>
            </div>
        </div>
        <div class="get_in_touch">
            <h2>Get In Touch</h2>
            <div>
                <i class="fab fa-facebook-f"></i>
                <a href="">Facebook</a>
            </div>
            <div>
                <i class="fab fa-linkedin-in"></i>
                <a href="">Linkedin</a>
            </div>
            <div>
                <i class="fab fa-github"></i>
                <a href="">Github</a>
            </div>
        </div>
        <div class="our_company">
            <h2>Our Company</h2>
            <a href="#font-page">Home</a>
            <a href="#about">About Us</a>
            <a href="#service">Services</a>
        </div>
    </div>
    <div class="footer-2">
        <hr>
        <p>&copy; All rights reserved by <span>Shakil Khan </span> | 2020</p>
    </div>
    </footer>

    <script src="../js/script.js"></script>
</body>
</html>