<?php
    require_once "../../database/userModel.php";

    function process_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $firstname=process_input($_REQUEST['firstname']);
        $lastname=process_input($_REQUEST['lastname']);
        $username=process_input($_REQUEST['username']);
        $email=process_input($_REQUEST['email']);
        $password=process_input($_REQUEST['password']);
        $gender=process_input($_REQUEST['gender']);
        $dob=process_input($_REQUEST['dob']);

        $img_name = $_FILES['profile_image']['name'];
        $img_size = $_FILES['profile_image']['size'];
        $tmp_name = $_FILES['profile_image']['tmp_name'];
                    
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
                if(move_uploaded_file($tmp_name,"../../img/user/".$new_img_name)){
                    $user=[
                        'firstname'=> $firstname,
                        'lastname'=> $lastname,
                        'username'=> $username,
                        'email'=> $email,
                        'password'=> $password,
                        'gender'=> $gender,
                        'dob'=> $dob,
                        'profile_image'=> $new_img_name
                    ];

                    $conn = getConnection();
                    $sql = "select * from users where username='{$username}'";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        echo "*Username already exist!";
                    }
                
                    else{
                        if(insertUser($user)){
                            echo "success";
                         }
                         else{
                             echo "*Something went wrong, try again!";
                         }
                    }
                }
            }
        }
        else{
            echo "*Invalid file format!";
        }
    }
  
?>
