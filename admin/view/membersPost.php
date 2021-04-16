<?php 
    require_once "../../database/connection.php";

    $conn=getConnection();

    if(isset($_REQUEST['detete_id'])){
        $id=$_REQUEST['detete_id'];
        $delete_sql="delete from members_post where id={$id}";
        $conn->query($delete_sql);
    }

    $sql="select * from members_post";
    
    $result=$conn->query($sql);
?>

<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Posted_by</th>
                <th>Content</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="background: white;">

        <?php 
        $c=1;
            while($row=$result->fetch_assoc()){ 
            $id=$row['id'];
            $posted_by=$row['posted_by'];
            $content=$row['content'];
            $date=$row['date'];
            $status=$row['status'];
            if($status=="pending"){
                echo "<tr>
                    <td>$c</td>
                    <td>$posted_by</td>
                    <td>$content</td>
                    <td>$date</td>
                    <td>
                        <button class='approve' onclick='approvePost($id)'>Approve</button>
                        <button class='delete' onclick='deletePost($id)'>Delete</button>
                    </td>
                </tr>";
                $c++;
            }
            else if($status=="approved"){
                echo "<tr>
                    <td>$c</td>
                    <td>$posted_by</td>
                    <td>$content</td>
                    <td>$date</td>
                    <td>
                        <button class='approved' disabled>Approved</button>
                        <button class='delete' onclick='deletePost($id)'>Delete</button>
                    </td>
                </tr>";
                $c++;
            }
        }
    ?>
        
        </tbody>
    </table>
</div>

<style>
    .approve{
        background-color: green;
    }
    .approved{
        background-color: #3264b3;
        cursor: not-allowed;
    }
</style>