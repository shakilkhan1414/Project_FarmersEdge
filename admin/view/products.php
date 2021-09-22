<?php 
    require_once "../../database/connection.php";

    $conn=getConnection();

    if(isset($_REQUEST['detete_id'])){
        $id=$_REQUEST['detete_id'];
        $delete_sql="delete from product where id={$id}";
        $conn->query($delete_sql);
    }

    $sql="select * from product";
    
    $result=$conn->query($sql);

?>

<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Product_name</th>
                <th>Product_owner</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Product_image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="background: white;">

        <?php 
        $c=1;
            while($row=$result->fetch_assoc()){
                $id=$row['id'];
                $name=$row['name'];
                $owner=$row['owner'];
                $quantity=$row['quantity'];
                $price=$row['price'];
                $description=$row['description'];
                $image=$row['image'];

                echo "<tr>
                        <td>$c</td>
                        <td>$name</td>
                        <td>$owner</td>
                        <td>$quantity</td>
                        <td>$price</td>
                        <td>$description</td>
                        <td><img src='../../img/product/$image'></td>
                        <td>
                            <button class='view' onclick='editProduct($id)'>Edit</button>
                            <button class='delete' onclick='deleteProduct($id)'>Delete</button>
                        </td>
                    </tr>";
                    $c++;
            }
        ?>

        </tbody>
    </table>
</div>