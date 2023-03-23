<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-login</title>
    </head>
    <!--Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<body>
<div class="container-fluid my-3">
    <h2 class="text-center">User login</h2>
    <div class="row d-flex  align-items-center justify-content-center mt-5">
        <div class="col-lg-12 col-xl-6">
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4">
        <!--username field-->
     <label for="username" class="form-label">UserName</label>
    <input type="text" id="username" class="form-control"
    placeholder="Enter your username" 
    autocomplete="off" required="required" name = "username"/>
    </div>
    
    <!--Password field-->
    <div class="form-outline mb-4">
     <label for="user_password" class="form-label">UserPassword</label>
    <input type="password" id="user_password" class="form-control"
    placeholder="Enter your password" 
    autocomplete="off" required="required" name = "user_password"/>
    </div>
   
    <div class="mt-4 pt-2">
        <input type="submit" value="Login" class="bg-info py-2 px-3
        border-0" name="user_Login">
        <p class= "small fw-bold mt-2 pt-1 mb-0"> Don't have an account ?
        <a href="user_registration.php" class="text-danger"> Register</a> </p>
    </div>
</form>
        </div>
    </div>
</div>
</body>
</html>

