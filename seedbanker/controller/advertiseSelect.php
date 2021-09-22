<?php 
session_start();
$id = $_GET['id'];
$_SESSION['advertiseId'] = $id;
header('location: ../view/ad/updatead.php');
 ?>