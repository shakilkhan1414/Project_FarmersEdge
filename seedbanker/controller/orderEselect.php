<?php 
session_start();
$id = $_GET['id'];
$_SESSION['ordersEId'] = $id;
header('location: ../view/order/orderExcepted.php');
 ?>