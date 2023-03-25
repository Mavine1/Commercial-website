<?php
include('../includes/connect.php');
include('../functions/common_function.php');
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
   
}
$get_ip_address=getIPAddress();
$total_price=0;
$cart_query_price="select *"
?>