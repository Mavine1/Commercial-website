<!--connect file-->
<?php
include('../includes/connect.php');
include('../admin_area/functions/common_function.php');
session_start();
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id']
}
?>