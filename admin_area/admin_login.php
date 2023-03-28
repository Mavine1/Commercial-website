<?php
include('../includes/connect.php');
include('../admin_area/functions/common_function.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
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
        <h2 class="text-center  mb-5">Admin login</h2>
</div>
    <div class="row d-flex justify-content-center ">
        <div class="col-lg-6 col-lx-5">
            <img src="../images/dairy.png" alt="Admin Registration" class="img-fluid">
        </div>
        <div class="col-lg-6 col-lx-4">
           <form action="" method="POST">
           <div class="form-outline mb-4 w-50 ">
            <label for="username" class="form-label">username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required="required"
            class="form-control">
           </div>
           <div class="form-outline mb-4 w-50">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your username" required="required"
            class="form-control">
           </div>
           <div>
           <input type="submit" class="bg-info py-2 border-0"
           name="admin_registration" value="Login">
           <p class="small fu-bold mt-2 pt-1">Don't you have an account? <a href="admin_registration.php" class="link-danger">Register</a></p>
    </div>
    </div>
        </form>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['admin_login'])){
  $username=$_POST['username'];
  $user_password=$_POST['user_password'];

  $select_query="select * from admin_table 
  where admin_table='$admin_name'";
  $result=mysqli_query($con,$select_query);
  $row_count=mysqli_num_rows($result);
  $row_data=mysqli_fetch_assoc($result);


  //cart item
  $select_query_cart="select * from admin_table where admin_name='$admin_name'";
  $select_cart=mysqli_query($con,$select_query_cart);
  $row_count_cart=mysqli_num_rows($select_cart);
  if($row_count>0){
    $_SESSION['username']=$username;
    if(password_verify($user_password,$row_data['user_password'])){
      //echo "<script>alert('login successful')</script>";
      if($row_count==1 and $row_count_cart==0){
        $_SESSION['username']=$username;
        echo "<script>alert('login successful')</script>";
        echo "<script>window.open('profile.php','_self')</script>";
      }else{
        $_SESSION['username']=$username;
        echo "<script>alert('login successful')</script>";
        echo "<script>window.open('profile.php','_self')</script>";
      }
    }else{
      echo "<script>alert('invalid credentials')</script>";
  }
    }else{

    echo "<script>alert('invalid credentials')</script>";
  }
}


?>
