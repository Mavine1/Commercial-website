<?php
if(isset($_GET['edit_brands'])){
    $edit_brands=$_GET['edit_brands'];

    $get_brands="select * from brands where brand_id=$edit_brands";
    $mysqli_result=mysqli_query($con,$get_brands);
    $row=mysqli_fetch_array($mysqli_result);
    $brand_title=$row['brand_title'];
}

if(isset($_POST['edit_brand'])){
    $cat_title=$_POST["brand_title"];
    $update_query="update categories set brands_title='cat_title' where
    brands_id=$edit_brands";
    $result_cat=mysqli_query($con,$update_query);
    if($result_cat){
        echo "<script>alert('brands has been updated successfully')</script>";
        echo "<script>window.open('.index.php?/view_categories.php','_self')</script>";
    }
}
?>
<div class="container mt-3">
    <h1 class="text-center">Edit brand</h1>
    <form action="" method="post" class ="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="brand_title" class="form-label">brands Title</label>
            <input type="text" name="brands_title" id="brand_title" class="form-control"
            required="required"  value='<?php echo $brand_title;?>'>
        </div>
        <input type="submit" value="update brand" class="btn btn-info px-3 mb-3"\
        name="edit_brand">
    </form>
</div>