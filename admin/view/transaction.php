<?php 
    require_once "../../database/connection.php";

    $conn=getConnection();
    $sql="select * from transaction";
    $result=$conn->query($sql);
?>

<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Send_from</th>
                <th>Send_to</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Transaction_id</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody style="background: white;">

        <?php 
        $c=1;
        while($row=$result->fetch_assoc()){ 
        $id=$row['id'];
        $send_by=$row['send_by'];
        $received_by=$row['received_by'];
        $amount=$row['amount'];
        $date=$row['date'];
        $transaction_id=$row['transaction_id'];
        $status=$row['status'];

        if($status=="pending"){
            echo "<tr>
                    <td>$c</td>
                    <td>$send_by</td>
                    <td>$received_by</td>
                    <td>$amount</td>
                    <td>$date</td>
                    <td>$transaction_id</td>
                    <td><button id='btn$id' class='pending' onclick='sentMoney($id)'>Pending</button></td>
                </tr>";
                $c++;
        }
        else if($status=="sent"){
            echo "<tr>
                    <td>$c</td>
                    <td>$send_by</td>
                    <td>$received_by</td>
                    <td>$amount</td>
                    <td>$date</td>
                    <td>$transaction_id</td>
                    <td><button class='sent'>Sent</button></td>
                </tr>";
                $c++;
        }


    }
?>
        
        </tbody>
    </table>
</div>
<style>
    td .pending{
        border: 0;
        padding: 6px 10px;
        cursor: pointer;
        margin: 0 5px;
        color: white;
        outline: none;
        background: #a6a228;
    }
    td .sent{
        border: 0;
        padding: 6px 10px;
        cursor: pointer;
        margin: 0 5px;
        color: white;
        outline: none;
        background: #3264b3;
        cursor: not-allowed;
    }
</style>