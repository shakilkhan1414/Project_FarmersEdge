<?php 
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];

        if(file_exists("../../json/admin_details.json"))
			{
				if(!empty($username) && !empty($password)){
                    $data = file_get_contents("../../json/admin_details.json");
                    $user = json_decode($data, true);

                    for ($i=0; $i < sizeof($user); $i++){ 
                        if($username==$user[$i]['username']){
                            if($password==$user[$i]['password']){
                                $_SESSION['flag'] = true;
                                $_SESSION['username']=$user[$i]['username'];
                                header('location: ../view/dashboard.php');					
                            }
                        }
                    }
                        echo "Invalid username or password ...";
                }
                else{
                    echo "Username and password is required ...";
                }
			}
            else{
                echo "Storage file doesn't exist ...";
            }
        }
        
?>