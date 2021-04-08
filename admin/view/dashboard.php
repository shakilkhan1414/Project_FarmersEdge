<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <title>FarmersEdge-Dashboard</title>
    <style>
        td{
            padding: 5px 20px;
        }
    </style>
</head>
<body>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <td>
                <p>Total User: <?php 
                    if(file_exists("../../json/user_list.json"))
                    {
                        $data=file_get_contents("../../json/user_list.json");
                        $array_data=json_decode($data,true);
                        $array_size=sizeof($array_data);
                        echo $array_size;
                    }
                ?> </p>
            </td>
            <td>
                <p>Total Buyer: 0 </p>
            </td>
            <td>
                <p>Available Products: null</p>
            </td>
            <td>
                <p>Available seeds to sell: 5</p>
            </td>
            <td>
                <p>Total Transaction: 20</p>
            </td>
        </tr>
    </table>

    <a href="">My Profile</a>
    <a href="">Edit Profile</a>
    <a href="">View FAQ</a>
    <a href=""></a>
    <a href="">Users</a>
    <a href="">ViewBuyers</a>
    <a href="">View all Transactions</a>
</body>
</html>