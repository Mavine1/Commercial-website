<!--connect file-->
<?php
include('../includes/connect.php');
include('../admin_area/functions/common_function.php');
session_start();
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    //echo $order_id;
    $select_data="select * from user_order where order_id=$order_id";
    $result=mysqli_query($con,$select_data);
    $row_fetch=mysqli_fetch_assoc($result);
    $invoice_number=$row_fetch['invoice_number'];
    $amount_due=$row_fetch['amount_due'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment page</title>
    <!---bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-secondary">
<div class="container my-5">
 <h1 class= "text_center text-light">Confirm payment</h1>
    <form action="" method="post">
        <div class="form-outline my-4 text-center w-50 m-auto">
            <input type="text" class="form_control w-50 m-auto" name= "invoice_number">
        </div>
        <div class="form_outline my-4 text-center w-50 m-auto">
            <select name="payment_mode" class="form-select w-50 m-auto">
                <option >select payment mode</option>
                <option >Paypal</option>
                <option >Mastercard</option>
                <option >M-pesa</option>
                <option >Pay on delivery</option>
            </select>
        </div>
        <div class="form_outline my-4 text-center w-50 m-auto">
            <input type="submit" class="bg-info py-2 px-3 border-0" value="confirm"
            name="confirm_payment">
        </div>
    </form>
 </div>  
</body>
</html>