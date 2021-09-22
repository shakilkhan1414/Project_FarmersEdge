<?php 
    session_start();
    require_once "../../database/adminModel.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];

        if(isset($_REQUEST['check'])){
            setcookie('username', $username, time() + (86400 * 30), "/");
            setcookie('password', $password, time() + (86400 * 30), "/");
        }

        if(adminLoginCheck($username,$password)){
                echo "success";
            }
            else{
                echo "failed";
            }
        }

?>