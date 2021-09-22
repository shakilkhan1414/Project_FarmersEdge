<?php 
    require_once "../../database/connection.php";

    $conn=getConnection();

    if(isset($_REQUEST['detete_id'])){
        $id=$_REQUEST['detete_id'];
        $delete_sql="delete from notice where id={$id}";
        $conn->query($delete_sql);
    }

    $sql="select * from notice";
    
    $result=$conn->query($sql);
?>
<button class="add" onclick="showAddNotice()">Add</button>
<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Posted_by</th>
                <th>Content</th>
                <th>Date</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="background: white;">

        <?php 
        $c=1;
        while($row=$result->fetch_assoc()) { 
                $id=$row['id'];
                $posted_by=$row['posted_by'];
                $content=$row['content'];
                $date=$row['date'];
                $image=$row['image'];

                echo "<tr>
                        <td>$c</td>
                        <td>$posted_by</td>
                        <td>$content</td>
                        <td>$date</td>
                        <td><img src='../../img/notice/$image'></td>
                        <td>
                            <button class='view' onclick='editNotice($id)'>Edit</button>
                            <button class='delete' onclick='deleteNotice($id)'>Delete</button>
                        </td>
                    </tr>";
                    $c++;
                
            }
        ?>
        
        </tbody>
    </table>
</div>

<style>
    .recent{
        flex-direction: column;
    }
    .recent .add{
        margin-bottom: 20px;
        border: 0;
        padding: 6px 15px;
        font-size: 15px;
        cursor: pointer;
        color: white;
        outline: none;
        background: green;
    }
</style>