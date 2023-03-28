
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
    <title>Admin Registration</title>
    <!--Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!---font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://kit.fontawesome.com/4b57ca4420.js" crossorigin="anonymous"></script>
     <!---Css-->
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center  mb-5">Admin Registration</h2>
</div>
    <div class="row d-flex justify-content-center ">
        <div class="col-lg-6 col-lx-4">
            <img src="../images/dairy.png" alt="Admin Registration" class="img-fluid">
        </div>
        <div class="col-lg-6 col-lx-4">
           <form action="" method="POST">
           <div class="form-outline mb-4 w-50">
            <label for="username" class="form-label">username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required="required"
            class="form-control">
           </div>
           <div class="form-outline mb-4 w-50">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your username" required="required"
            class="form-control">
           </div>
            <!--image field-->
          <div class="form-outline mb-4">
          <label for="user_image" class="form-label">User image</label>
           <input type="file" id="user_image" class="form-control"
            required="required" name = "user_image"/>
             </div>
           <div class="form-outline mb-4 w-50">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your username" required="required"
            class="form-control">
           
            <label for="confirm_password" class="form-label">confirm password</label>
            <input type="text" id="confirm_password" name="confirm_password" placeholder="Enter your username" required="required"
            class="form-control">
           </div>
           <div>
           <input type="submit" class="bg-info py-2 border-0"
           name="admin_registration" value="Register">
           <p class="small fu-bold mt-2 pt-1">Don't you have an account? <a href="admin_login.php" class="link-danger">Login</a></p>
    </div>
    </div>
        </form>
        </div>
    </div>
</body>
</html>

<!--php code-->
<?php

if(isset($_POST['admin_register'])){
    $admin_name=$_POST['admin_name'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $confirm_user_password=$_POST['confirm_user_password'];
    $user_address=$_POST['user_address'];
    $user_image=$_FILES['user_image'];['name'];
    $user_image=$_FILES['user_image'];['tmp_name'];
    $user_image_tmp=$_FILES['user_image'];['name'];['tmp_name'];
    $user_ip=getIPAddress();

    //select_query
    $select_query="select * from admin_table where admin_name='admin_name'
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
move_uploaded_file($user_image_tmp_name,"./user_image/$user_image");
$insert_query="insert into user_table (username,user_email,user_password,user_image,user_ip,
user_address,user_mobile) values ('$user_username','$user_email','$hash_password'
'$user_image','$user_ip','$user_address','$user_contact')";
$sql_execute=mysqli_query($con,$insert_query);
}
}
?>