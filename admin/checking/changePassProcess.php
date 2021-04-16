<?php 
    session_start();
    require_once "../../database/adminModel.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $cpass=$_REQUEST['cpass'];
        $npass=$_REQUEST['npass'];
        
        $row=getadminById($_SESSION['id']);
        $password=$row['password'];

        if($password==$cpass){
            $conn=getConnection();
            $sql = "update admin set password='{$npass}' where id='{$_SESSION['id']}'";
            if($conn->query($sql)){
                echo "success";
            }
            else{
                echo "*Something went wrong!";
            }
        }
        else{
            echo "*Incorrect current password!";
        }
    }

?>