<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 $username=
    ?>
    <h3 class="text-success">all my orders</h3>
    <table class ="table table-bordered mt-5">
        <thread class ="bg-info">
            <tr>
                <th>S1 No</th>
                <th>Amount Due</th>
                <th>Total products</th>
                <th>Invoice number</th>
                <th>Date</th>
                <th>Complete/Incomplete</th>
                <th>Status</th>
            </tr>
        </thread>
        <tbody>
            <?php
            $get_order_details="select * from user_orders where user_id=$user_id";
            $result_order=mysqli_query($con,$get_order_details);
            while($row_orders=mysqli_fetch_assoc($result_orders)){
                $order_id=$row_data['order_id'];
                $amount_due=$row_data['amount_due'];
                $amount_due=$row_data['amount_due'];
                $total_products=$row_data['total_products'];
                $invoice_status=$row_data['order_status'];
            }
        
            ?>
            <tr>
                <td>1</td>
                <td>100</td>
                <td>3</td>
                <td>34567</td>
                <td>23445</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>