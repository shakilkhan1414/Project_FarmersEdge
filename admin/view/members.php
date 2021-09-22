<?php 
    require_once "../../database/userModel.php";
    $conn=getConnection();

    if(isset($_REQUEST['detete_id'])){
        $id=$_REQUEST['detete_id'];
        $delete_sql="delete from users where id={$id}";
        $conn->query($delete_sql);
    }
    
    $result=getAllUser();
?>


<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>First_name</th>
                <th>Last_name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Profile_image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="background: white;">

        <?php 
        $c=1;
        for ($i=0; $i < sizeof($result); $i++) { 
            $id=$result[$i]['id'];
            $first_name=$result[$i]['first_name'];
            $last_name=$result[$i]['last_name'];
            $username=$result[$i]['username'];
            $email=$result[$i]['email'];
            $gender=$result[$i]['gender'];
            $dob=$result[$i]['dob'];
            $profile_image=$result[$i]['profile_image'];

                echo "<tr>
                        <td>$c</td>
                        <td>$first_name</td>
                        <td>$last_name</td>
                        <td>$username</td>
                        <td>$email</td>
                        <td>$gender</td>
                        <td>$dob</td>
                        <td><img src='../../img/user/$profile_image'></td>
                        <td>
                            <button class='view' onclick='viewProfile($id)'>View</button>
                            <button class='delete' onclick='deleteProfile($id)'>Delete</button>
                        </td>
                    </tr>";
                    $c++;
                
            }
        ?>
        
        </tbody>
    </table>
</div>