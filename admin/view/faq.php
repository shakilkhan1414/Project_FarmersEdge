<?php 
    require_once "../../database/connection.php";

    $conn=getConnection();

    if(isset($_REQUEST['detete_id'])){
        $id=$_REQUEST['detete_id'];
        $delete_sql="delete from faq where id={$id}";
        $conn->query($delete_sql);
    }

    $sql="select * from faq";
    
    $result=$conn->query($sql);
?>

<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>Email</th>
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
                $name=$row['name'];
                $email=$row['email'];
                $message=$row['message'];
                $date=$row['date'];

                    echo "<tr>
                            <td>$c</td>
                            <td>$name</td>
                            <td>$email</td>
                            <td>$message</td>
                            <td>$date</td>
                            <td>
                                <button class='delete' onclick='deleteFAQ($id)'>Delete</button>
                            </td>
                        </tr>";
                        $c++;
                
                }
        ?>
        
        </tbody>
    </table>
</div>