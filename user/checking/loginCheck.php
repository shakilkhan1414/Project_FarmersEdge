<?php 
    session_start();
    require_once "../../database/userModel.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];

        if(userLoginCheck($username,$password)){
            $_SESSION['flag']=
            header("location: ../view/home.php");
        }
        else{
            echo "Invalid username or password!";
        }
    }
?>