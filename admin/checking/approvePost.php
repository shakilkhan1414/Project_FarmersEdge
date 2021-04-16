<?php 
        require_once "../../database/connection.php";
        $conn=getConnection();

       if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id=$_REQUEST['id'];
            $status="approved";
            $sql = "update members_post set status='{$status}' where id='{$id}'";
            $conn->query($sql);
            
       }
?>