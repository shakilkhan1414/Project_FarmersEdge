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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>FarmersEdge</title>
</head>
<body>
    <!-- <header>
        <div class="logo">
            <img src="img/logo.png" alt="Logo">
        </div>
        <div class="menu">
            <ul>
                <li><a href="#font-page">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="user/signup.html">Signup</a></li>
                <li><a href="user/login.html">Login</a></li>
            </ul>
        </div>
    </header> -->

    <section id="font-page">
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Logo">
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="user/view/signup.html">Signup</a></li>
                <li><a href="user/view/login.html">Login</a></li>
            </ul>
        </div>
    </header>
        <div>
            <h1>FarmersEdge for Farmers</h1>
            <p>Agriculture is our wisest pursuit, because it will in the end contribute most to real wealth, good morals, and happiness.</p>
            <a href="user/view/signup.html" class="btn">Join Now &rarr;</a>
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
                <img src="img/side_image.jpg" alt="farmer">
            </div>
        </div>
    </section>

    <section id="service">
            <h1 class="header_service">Services</h1>
        <div class="service_wrapper">
            <div>
                <i class="fas fa-tractor"></i>
                <h1>Farming</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quam facilis illo officia! Fuga totam eveniet ex iste provident! Laborum vitae rem inventore ipsa placeat cumque tempore quos sed ipsum.</p>
                <a href="user/view/signup.html">Buy Now &rarr;</a>
            </div>
            <div>
                <i class="fas fa-cow"></i>
                <h1>Farming</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quam facilis illo officia! Fuga totam eveniet ex iste provident! Laborum vitae rem inventore ipsa placeat cumque tempore quos sed ipsum.</p>
                <a href="user/view/signup.html">Buy Now &rarr;</a>
            </div>
            <div>
                <i class="fab fa-phoenix-framework"></i>
                <h1>Farming</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quam facilis illo officia! Fuga totam eveniet ex iste provident! Laborum vitae rem inventore ipsa placeat cumque tempore quos sed ipsum.</p>
                <a href="user/view/signup.html">Buy Now &rarr;</a>
            </div>
    </section>

    <section id="want_help">
        <h1>Want our help?</h1>
        <div>
        <a href="user/view/login.html">Login &rarr;</a>
        <a href="user/view/signup.html">Signup &rarr;</a>
        </div>
    </section>

    <section id="contact">
        <div>
            <img src="img/black_image.png" alt="black_image">
        </div>
        <div class="form">
            <form method="POST">            
                    <h1>Ask Your Queries</h1>
                    <div>
                        <input type="text" name="name" id="" placeholder="Name*" required>                
                    </div>
                    <div>
                        <input type="email" name="email" id="" placeholder="Email*" required>     
                    </div>
                    <div>
                        <textarea name="message" placeholder="Message"></textarea>                      
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
</body>
</html>