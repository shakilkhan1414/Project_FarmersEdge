<?php 
session_start();
$id = $_GET['id'];
$_SESSION['ordersUnEId'] = $id;
header('location: ../view/order/orderUnexcepted.php');
 ?>