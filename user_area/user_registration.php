<?php
include('../includes/connect.php');
include('../admin_area/functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <!--Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<body>
<div class="container-fluid my-3">
    <h2 class="text-center">New User Registration</h2>
    <div class="row d-flex  align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4">
        <!--username field-->
     <label for="username" class="form-label">UserName</label>
    <input type="text" id="username" class="form-control"
    placeholder="Enter your username" 
    autocomplete="off" required="required" name = "username"/>
    </div>
    <!--email-->
    <div class="form-outline mb-4">
     <label for="user_email" class="form-label">UserEmail</label>
    <input type="text" id="user_email" class="form-control"
    placeholder="Enter your Email" 
    autocomplete="off" required="required" name = "user_email"/>
    </div>
    <!--image field-->
    <div class="form-outline mb-4">
     <label for="user_image" class="form-label">User image</label>
    <input type="file" id="user_image" class="form-control"
     required="required" name = "user_image"/>
    </div>
    <!--Password field-->
    <div class="form-outline mb-4">
     <label for="user_password" class="form-label">UserPassword</label>
    <input type="password" id="user_password" class="form-control"
    placeholder="Enter your password" 
    autocomplete="off" required="required" name = "user_password"/>
    </div>
    <!--confirm password-->
    <div class="form-outline mb-4">
     <label for="confirm_user_password" class="form-label">Confirm password</label>
    <input type="password" id="confirm_user_password" class="form-control"
    placeholder="confirm your password" 
    autocomplete="off" required="required" name = "confirm_user_password"/>
    </div>
    <!--address field-->
    <div class="form-outline mb-4">
     <label for="user_address" class="form-label">Address</label>
    <input type="text" id="user_address" class="form-control"
    placeholder="Enter your address" 
    autocomplete="off" required="required" name = "user_address"/>
    </div>
    <!--contact field-->
    <div class="form-outline mb-4">
     <label for="user_contact" class="form-label">Contact</label>
    <input type="text" id="user_contact" class="form-control"
    placeholder="Enter your contact" 
    autocomplete="off" required="required" name = "user_contact"/>
    </div>
    <div class="mt-4 pt-2">
        <input type="submit" value="Register" class="bg-info py-2 px-3
        border-0" name="user_register">
        <p class= "small fw-bold mt-2 pt-1 mb-0">Already have an account ?
        <a href="user_login.php" class="text-danger"> Login</a> </p>
    </div>
</form>
        </div>
    </div>
</div>
</body>
</html>
<!--php code-->
<?php
if(isset($_POST['user_register'])){
    $user_username=$_POST['username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $confirm_user_password=$_POST['confirm_user_password'];
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
    $user_image=$_FILES['user_image'];['name'];
    $temp_image=$_FILES['user_image'];['tmp_name'];
    $user_ip=getIPAddress();
 
    //select_query
    $select_query="select * from user_table where username='$user_username'
    or user_email='$user_email'";
    $result=Mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('username and email already exists')</script>";
    }
    else if($user_password!=$confirm_user_password){
        echo "<script>alert('passwords do not match')</script>";
    }
else{
    //inset_query
 move_uploaded_file($temp_image,'./user_images/$user_image');
$insert_query="insert into user_table (username,user_email,user_password,user_image,user_ip,
user_address,user_mobile) values ('$user_username','$user_email','$hash_password',
'$user_image','$user_ip','$user_address','$user_contact')";
$sql_execute=mysqli_query($con,$insert_query);
if($result_query){
    echo "<script>alert('inserted successfully')</script>";
   }    
}
//selecting cart items
$select_cart_items="select * from cart_details where ip_address='$user_ip'";
$result_cart=mysqli_query($con,$select_cart_items);
$rows_count=mysqli_num_rows($result_cart);
if($rows_count>0){
    $_SESSION['username']=$user_username;
    echo "<script>alert('Already registered')</script>";
    echo "<script>windows.open('checkout.php','_self')</script>";
}
else{
    echo "<script>windows.open('../index.php','_self')</script>";

}

}
?>