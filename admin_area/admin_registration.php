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
           <div class="form-outline mb-4">
            <label for="username" class="form-label">username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required="required"
            class="form-control">
           </div>
           <div class="form-outline mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your username" required="required"
            class="form-control">
           </div>
           <div class="form-outline mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your username" required="required"
            class="form-control">
           
            <label for="confirm_password" class="form-label">confirm password</label>
            <input type="text" id="confirm_password" name="confirm_password" placeholder="Enter your username" required="required"
            class="form-control">
           </div>
           </div>
           <input type="submit" class="bg-info py-2 border-o"
           name="admin_registration" value="Register">
           p
           </form>
        </div>
    </div>
</body>
</html>