<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <title> FarmersEdge-Signup </title>
   </head>

<body>
  <section id="wrapper">
      <header>
        <div class="logo">
            <img src="../../img/logo.png" alt="Logo">
        </div>
        <div class="menu">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php#about">About</a></li>
              <li><a href="index.php#service">Service</a></li>
              <li><a href="index.php#contact">Contact</a></li>
              <li><a href="signup.php">Signup</a></li>
              <li><a href="login.html">Login</a></li>
            </ul>
        </div>
    </header>

    <div class="container">
    <div class="title">Registration</div>

    <?php 
      if(isset($_REQUEST['error'])){
        $error=$_REQUEST['error'];
        echo "<span class='error'>$error</span>";
      }
    ?>
  
    <div class="content">
      <form action="../checking/signCheck.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstname" placeholder="Enter your first name" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your last name" name="lastname" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Retype Password</span>
            <input type="password" placeholder="Retype your password" name="repassword" autocomplete="off">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1" checked>
          <input type="radio" name="gender" value="Female" id="dot-2">
          <input type="radio" name="gender" value="p_n_t_s" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="last"> 
            <div class="input-box">
                <span class="details">Date of Birth</span>
                <input type="date" name="dob" id="">
            </div>
            <div class="input-box">
                <span class="details">Profile Picture</span>
                <input type="file" name="profile_image" id="">
            </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>


  </section>
  

  

</body>
</html>
