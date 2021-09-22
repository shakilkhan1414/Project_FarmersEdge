<?php 
    session_start();
    require_once "../../database/connection.php";
    $conn = getConnection();
    $id=$_SESSION['id'];
    $unsql="select username from admin where id='{$id}'";
    $unresult=$conn->query($unsql);
    $unrow=$unresult->fetch_assoc();
    $username=$unrow['username'];

    

     if($_SERVER["REQUEST_METHOD"] == "POST"){
         $content=$_REQUEST['content'];
         $posted_by=$username;
         $date=Date("Y-m-d");

        $img_name = $_FILES['image']['name'];
        $img_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
                    
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);
    
        $extensions = ["jpeg", "png", "jpg","JPEG", "PNG", "JPG"];
        if(in_array($img_ext, $extensions) === true){
            if($img_size > 5242880){
                echo "*Max upload size is 5 MB!";
            }
            else{
                $time = time();
                $new_img_name = $time.$img_name;
                if(move_uploaded_file($tmp_name,"../../img/notice/".$new_img_name)){
                    
                    $sql="insert into notice values('','{$posted_by}','{$content}','{$date}','{$new_img_name}')";
                    if($conn->query($sql)){
                        echo "success";
                    }
                    else{
                        echo "*Something went wrong, try again!";
                    }
                }  
            }
        }
        else{
            echo "*Invalid file format!";
        }  

         
     }
?>
