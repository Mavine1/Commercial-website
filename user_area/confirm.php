<!--connect file-->
<?php
include('../includes/connect.php');
include('../admin_area/functions/common_function.php');
session_start();
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    echo $order_id;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment page</title>
</head>
<body>
    
</body>
</html>