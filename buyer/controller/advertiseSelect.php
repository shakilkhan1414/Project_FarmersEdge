<?php 
session_start();
$id = $_GET['id'];
$_SESSION['advertiseId'] = $id;
header('location: ../view/advertise/updateadvertise.php');
 ?>