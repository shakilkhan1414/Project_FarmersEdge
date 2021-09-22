<?php
    session_start();
    require_once "../../database/userModel.php";
    $conn = getConnection();

    $name=$_REQUEST['name'];
    $quantity=$_REQUEST['quantity'];
    $price=$_REQUEST['price'];
    $user=getUserById($_SESSION['id']);
    $username=$user['username'];
    $date=Date("Y-m-d");




    $sql="insert into orders values('','{$username}','Store','{$name}','{$quantity}','{$price}','{$date}','processing')";
    if($result=$conn->query($sql)){
        unset($_SESSION['cart']);
        echo "success";
    }
    else{
        echo "Failed";
    }
?>