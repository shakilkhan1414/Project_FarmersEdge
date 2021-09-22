<?php 
    require_once "../../database/userModel.php";

    $row=getUserById($_REQUEST['id']);

    $id=$_REQUEST['id'];
    $name=$row['first_name'].' '.$row['last_name'];
    $username=$row['username'];
    $email=$row['email'];
    $gender=$row['gender'];
    $dob=$row['dob'];
    $image=$row['profile_image'];

?>

<section id="account">
    <div class="account-full">
        <img src="../../img/user/<?=$image?>">
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
        <button onclick="showEditUser(<?=$id?>)">Edit</button>
    </div>
</section>