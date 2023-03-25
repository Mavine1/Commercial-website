<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
img{
    width:100%;
}
</style>
<body>
   <div class="container">
    <h2 class="text-center text-info">payment options</h2>
    <div class="row">
        <div class="col-md-6">
        <a href="order.php" ><img src="../images/apple.png" alt=""></a>
    </div>
    <div class="col-md-6">
        <a href="order.php" ><H2>Pay offline</H2></a>   
    </div>
    </div>
   </div>
</body>
</html>