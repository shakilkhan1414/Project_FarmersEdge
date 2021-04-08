<?php 
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];

        if(file_exists("../../json/user_list.json"))
			{
				if(!empty($username) && !empty($password)){
                    $data = file_get_contents("../../json/user_list.json");
                    $user = json_decode($data, true);

                    for ($i=0; $i < sizeof($user); $i++){ 
                        if($username==$user[$i]['username']){
                            if($password==$user[$i]['password']){
                                $_SESSION['flag'] = true;
                                $_SESSION['username']=$user[$i]['username'];
                                header('location: ../view/test.html');					
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