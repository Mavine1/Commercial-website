<?php
if(isset($_GET['edit_brands'])){
    $edit_brands=$_GET['edit_brands'];

    $get_categories="select * from categories where brands_id=$edit_brands";
    $mysqli_result=mysqli_query($con,$get_categories);
    $row=mysqli_fetch_array($mysqli_result);
    $brands_title=$row['brands_title'];
}

if(isset($_POST['edit_cat'])){
    $cat_title=$_POST["brands_title"];
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
    <h1 class="text-center">Edit brands</h1>
    <form action="" method="post" class ="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="brands_title" class="form-label">brands Title</label>
            <input type="text" name="brands_title" id="brands_title" class="form-control"
            required="required"  value='<?php echo $brands_title;?>'>
        </div>
        <input type="submit" value="update brands" class="btn btn-info px-3 mb-3"\
        name="edit_cat">
    </form>
</div>