<?php
if(isset($_GET['edit_category'])){
    $edit_category=$_GET['edit_category'];

    $get_categories="select * from categories where category_id=$edit_category";
    $result=mysqli_query($con,$get_categories);
    $row=mysqli_fetch_array($result);
    $category_title=$row['category_title'];

    
}
?>
<div class="container mt-3">
    <h1 class="text-center">Edit category</h1>
    <form action="" method="post" class ="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="category_title" class="form-label">category Title</label>
            <input type="text" name="category_title" id="category_title" class="form-control"
            required="required"  value='<?php echo $category_title;?>'>
        </div>
        <input type="submit" value="update Category" class="btn btn-info px-3 mb-3"\
        name="edit_cat">
    </form>
</div>