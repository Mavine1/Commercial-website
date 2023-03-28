<?php
if(isset($_GET['delete_category'])){
    $delete_id=$_GET['delete_category'];
    //echo $delete_id;
    //delete query

    $delete_products="Delete from categories where category_id=$delete_category";
    $result_product=mysqli_query($con,$delete_products);
    if($result_product){
        echo "<script>alert('Category  deleted  successfully')<script>";
        echo "<script>window.open('./index.php?view_categories','_self')<script>";
    }
}