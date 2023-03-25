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

<!--php code to access user id--->
<?php
$user_ip=getIPAddress();
$get_user="select *from user_table where user_ip=$user_ip";
$result=mysqli_query($con,$get_user);
$run_query=mysqli_fetch_array($result);

?>
   <div class="container">
    <h2 class="text-center text-info">payment options</h2>
    <div class="row d-flex justify-content align-items-center my-5">
        <div class="col-md-6">
        <a href="order.php" ><img src="../images/apple.png" alt=""></a>
    </div>
    <div class="col-md-6">
        <a href="order.php?user_id=<?php echo $user_id?>" ><H2 class="text_center">Pay offline</H2></a>   
    </div>
    </div>
   </div>
</body>
</html>