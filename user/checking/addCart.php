<?php 
    session_start();
    require_once "../../database/connection.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_REQUEST['id'];
        $_SESSION['cart'][]=$id;
    }
?>