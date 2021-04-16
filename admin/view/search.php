<?php 
    require_once "../../database/connection.php";

    $search=$_REQUEST['search'];
    $conn=getConnection();
    $sql="select * from users where first_name like '%{$search}%' or last_name like '%{$search}%'";  
    $result=$conn->query($sql);
?>


<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>id</th>
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
            if($result->num_rows==0){
                echo "<tr><td class='nobody'>Nobody Found!</td></tr>";
            }
            else{
                while($row=$result->fetch_assoc()){ 
                    $id=$row['id'];
                    $first_name=$row['first_name'];
                    $last_name=$row['last_name'];
                    $username=$row['username'];
                    $email=$row['email'];
                    $gender=$row['gender'];
                    $dob=$row['dob'];
                    $profile_image=$row['profile_image'];
    
                    echo "<tr>
                            <td>$id</td>
                            <td>$first_name</td>
                            <td>$last_name</td>
                            <td>$username</td>
                            <td>$email</td>
                            <td>$gender</td>
                            <td>$dob</td>
                            <td><img src='../../img/user/$profile_image'></td>
                            <td>
                                <button class='view' onclick='viewProfile($id)'>View</button>
                            </td>
                        </tr>";
                }
            }
            
        ?>
        
        </tbody>
    </table>
</div>
<style>
    .nobody{
        color: red;
        font-size: 15px;
        transform:translateX(500px);
    }

</style>