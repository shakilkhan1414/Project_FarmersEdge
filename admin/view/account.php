<?php 
    session_start();
    require_once "../../database/adminModel.php";

    $row=getadminById($_SESSION['id']);
    $name=$row['name'];
    $username=$row['username'];
    $email=$row['email'];
    $gender=$row['gender'];
    $dob=$row['dob'];
    $image=$row['profile_image'];

    $_SESSION['username']=$username;
?>

<section id="account">
    <div class="account-full">
        <img src="../../img/admin/<?=$image?>">
    </div>
    <div class="account-full">
        <div class="account-half">Name:</div>
        <div class="account-half-2"><?=$name?></div>
    </div>
    <div class="account-full">
        <div class="account-half">Username:</div>
        <div class="account-half-2"><?=$username?></div>
    </div>
    <div class="account-full">
        <div class="account-half">Email:</div>
        <div class="account-half-2"><?=$email?></div>
    </div>
    <div class="account-full">
        <div class="account-half">Gender:</div>
        <div class="account-half-2"><?=$gender?></div>
    </div>
    <div class="account-full">
        <div class="account-half">Date of Birth:</div>
        <div class="account-half-2"><?=$dob?></div>
    </div>
    <div class="account-full">
    <div class="account-half-2">
        <button onclick="showEditAccount()">Edit</button>
        <button onclick="showChangePass()">Change password</button></div>
    </div>
</section>