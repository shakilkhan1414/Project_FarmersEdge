<?php 
    session_start();
    require_once "../../database/userModel.php";

    $row=getUserById($_REQUEST['id']);

    $id=$_REQUEST['id'];
    $fname=$row['first_name'];
    $lname=$row['last_name'];
    $username=$row['username'];
    $email=$row['email'];
    $gender=$row['gender'];
    $dob=$row['dob'];

    $_SESSION['username']=$username;
?>

<div class="container">

    <span id="msg"></span>
    
    <div class="content">
      <form method="post" id="editUser" onsubmit="return editUser();" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstname" id="firstname" placeholder="Enter your first name" autocomplete="off" value="<?=$fname?>">
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your last name" name="lastname"  id="lastname" autocomplete="off" value="<?=$lname?>">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username"  id="username" autocomplete="off"  value="<?=$username?>">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email"  id="email" autocomplete="off" value="<?=$email?>">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1" <?php if($gender=="Male"){echo "checked";} ?> >
          <input type="radio" name="gender" value="Female" id="dot-2" <?php if($gender=="Female"){echo "checked";} ?>>
          <input type="radio" name="gender" value="p_n_t_s" id="dot-3" <?php if($gender=="p_n_t_s"){echo "checked";} ?>>
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
                <input type="date" name="dob" id="date" value="<?=$dob?>">
            </div>
        </div>
        <div class="button">
          <input type="submit" value="Update">
        </div>
        <input type="hidden" name="id" id="id" value="<?=$id?>">
      </form>
    </div>
  </div>
