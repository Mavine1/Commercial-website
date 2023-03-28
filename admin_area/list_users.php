<h3 class= "text-center text-success">All users</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
       
        <?php
        $Get_payments="select * from user_payments";
        $result=mysqli_query($con,$Get_payments);
        $row_count=mysqli_num_rows($result);
        
if($row_count==0){
    echo "<h2 class='text-danger text-center mt-5'>No Payments received  yet </h2>";
}else{
    echo "<tr>
        <th>S1 no</th>
        <th>username</th>
        <th>user email</th>
        <th>user image</th>
        <th>user address</th>
        <th>user mobile</th>
        <th>Delete </th>
    </tr>
</thead>
<tbody class='bg-secondary text-light'>";

    $number=0;
    while($row_data=mysqli_fetch_assoc($result)){
        $user_id=$row_data['user_id'];
        $Payment_id=$row_data['username'];
        $amount=$row_data['amount'];
        $invoice_number=$row_data['invoice_number'];
        $payment_mode=$row_data['payment_mode'];
        $date=$row_data['date'];
        $number++;
        echo " <tr>
        <td>$number</td>
        <td>$invoice_number</td>
        <td>$amount</td>
        <td>$payment_mode</td>
        <td>$date</td>
        <td><a href='' class='text-light'><i class='fa-solid fa-trash'></i>

    </tr>";
    }
}
        ?>
       
         

    </tbody>
</table>