<?php
include('../includes/connect.php');
include('../functions/common_function.php');
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
   
}
$get_ip_address=getIPAddress();
$total_price=0;
$cart_query_price="select *from cart_details 
where ip_address='$get_ip_address'";
$result_cart_price=mysqli_query($con,$cart_query_pride);
$count_products=mysqli_num_rows($result_cart_price);
while($row_price=mysqli_fetch_array($result_cart_price)){
    $product_id=$row_price['Product_id'];
    $select_product="select * from products where 
    Product_id=$product_id";
    $run_price=mysqli_query($con,$select_products);
    while($row_product_price=mysqli_fetch_array($run_price)){
      $product_price=array($row_product_price['product_price']);
      $product_price=array_sum($product_price);
      
    }
}
?>