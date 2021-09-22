<?php 
    require_once "../../database/connection.php";

    $conn=getConnection();

    $sql="select * from contact_us";
    
    $result=$conn->query($sql);
?>

<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Username</th>
                <th>Message</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="background: white;">

        <?php 
                $c=1;
                while($row=$result->fetch_assoc()){ 
                $id=$row['id'];
                $user_id=$row['user_id'];
                $username=$row['username'];
                $message=$row['message'];
                $date=$row['date'];

                    echo "<tr>
                            <td>$c</td>
                            <td>$username</td>
                            <td>$message</td>
                            <td>$date</td>
                            <td><button class='view' onclick='viewProfile($username)'>Reply</button></td>
                        </tr>";
                        $c++;
                
                }
        ?>
        
        </tbody>
    </table>
</div>