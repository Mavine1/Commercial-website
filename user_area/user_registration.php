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
    autocomplete="off" required="required" name = "username" 
    class="form-control"/>
    </div>
    <!--email-->
    <div class="form-outline mb-4">
     <label for="user_email" class="form-label">UserEmail</label>
    <input type="text" id="user_email" class="form-control"
    placeholder="Enter your Email" 
    autocomplete="off" required="required" name = "user_email" 
    class="form-control"/>
    </div>
</form>
        </div>
    </div>
</div>
</body>
</html>