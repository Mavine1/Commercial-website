<!--connect file-->
<?php
include('../includes/connect.php');
include('../admin_area/functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome ".$</title>
    <!--Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!---font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://kit.fontawesome.com/4b57ca4420.js" crossorigin="anonymous"></script>
     <!---Css-->
    <link rel="stylesheet" href="../style.css">
    <style>
  body{
    overflow-x:hidden;
  }
  .profile_img{
    width: 100%;
    margin: auto;
    display: block;
    /*height:100%;*/
    object-fit: contain;
}
</style>
    </head>
<body>
<!---navbar-->
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <img src="../images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php
          cart_item();?></sup></a>
          <li class="nav-item">
          <a class="nav-link" href="#"> total price: <?php total_cart_price();?>/-</a>
        </li>
        </li>
      </ul>
      <form class="d-flex" action="../includes/search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
       <input type="submit" value="search" class="btn btn-outline-light"
       name="search_data_product">

      </form>
    </div>
  </div>
</nav>
</div>
<!--calling function-->
<?php
cart();
?>
<!---Second part--->
<nav class="navbar navbar-expand-lg navbar-dark  bg-secondary">
  <ul class="navbar-nav me-auto">
  
        <?php
         if(!isset($_SESSION['username'])){
            echo "<li class='nav-item'>
            <a class='nav-link' href='#'>Welcome Guest</a>";
         }else{
           echo "<li class='nav-item'>
           <a class='nav-link' href='#'>Welcome ".$_session['username']."</a>";
         }
      
        if(!isset($_SESSION['username'])){
           echo "<li class='nav-item'>
           <a class='nav-link' href='./user_area/user_login.php'>Login</a>";
        }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href='user_area_logout.php'>Logout</a>";
        }
        ?>
  </ul>
</nav>
<!---third--->
<div class="bg-light">
  <h3 class="text-center">Store</h3>
  <p class="text-center">Communication is the heart of E-commerce and community</p>
</div>
<!--fourth child-->
<div class="row">
    <div class="col-md-2 ">
        <ul class="navbar-nav bg-secondary text-center" style="height:100vh">
            <li class ="nav-item bg-info">
   <a class="nav-link text-light" href="#"><h4>your profile</a>
            </li>
            <li class ="nav-item ">
               <img src="../images/dairy.png" class="profile_img my-4" alt="">
            </li>
            <li class ="nav-item ">
   <a class="nav-link text-light" href="#">Pending orders</a>
            </li>
            <li class ="nav-item ">
   <a class="nav-link text-light" href="#">Edit Account</a>
            </li>
            <li class ="nav-item ">
   <a class="nav-link text-light" href="#">My orders</a>
            </li>
            <li class ="nav-item ">
   <a class="nav-link text-light" href="#">Delete Account</a>
            </li>
            <li class ="nav-item ">
   <a class="nav-link text-light" href="#">Log Out</a>
            </li>
        </ul>
    </div>
    <div class="col-md-10"></div>
</div>

<!---footer-->
<!--include footer-->
<?php include("../footer.php") ?>
<!---bootstrap js link---> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>