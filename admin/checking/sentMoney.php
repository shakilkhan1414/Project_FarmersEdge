<?php 
    require_once "../../database/connection.php";

    $id=$_REQUEST['id'];
    $status="sent";
    $conn=getConnection();
    $sql = "update transaction set status='{$status}' where id='{$id}'";
    $conn->query($sql);

?>