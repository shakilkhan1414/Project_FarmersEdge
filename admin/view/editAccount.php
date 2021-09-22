<?php 
    session_start();
    require_once "../../database/adminModel.php";

    $row=getadminById($_SESSION['id']);
    $name=$row['name'];
    $username=$row['username'];
    $email=$row['email'];
    $gender=$row['gender'];
    $dob=$row['dob'];
    
?>

<div class="container">
    <div class="title">Edit Profile</div>

    <span id="msg"></span>

    <div class="content">
      <form id="editAccount" onsubmit="return editAccount();" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" id="name" placeholder="Enter your first name" autocomplete="off" value="<?=$name?>">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" id="username" autocomplete="off" value="<?=$username?>">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" id="email" autocomplete="off" value="<?=$email?>">
          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="date" name="dob" id="date" value="<?=$dob?>">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1" <?php 
            if($gender=="Male"){
                echo "checked";
            } ?>>
          <input type="radio" name="gender" value="Female" id="dot-2" <?php 
            if($gender=="Female"){
                echo "checked";
            } ?> >
          <input type="radio" name="gender" value="p_n_t_s" id="dot-3" <?php 
            if($gender=="p_n_t_s"){
                echo "checked";
            } ?>>
          <span class="gender-title">Gender</span>
          <div class="category" style="margin-bottom: 20px;">
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
        <div class="button">
          <input type="submit" value="Update">
        </div>
      </form>
    </div>
  </div>

  <style>
      input[type="text"]{
          margin-bottom: 10px;
      }
  </style>

