<?php
if(isset($_GET['delete_category'])){
    $delete_id=$_GET['delete_category'];
    //echo $delete_id;
    //delete query

    $delete_products="Delete from products where product_id=$delete_id";
    $result_product=mysqli_query($con,$delete_products);
    if($result_product){
        echo "<script>alert('product update successfully')<script>";
        echo "<script>window.open('./index.php','_self')<script>";
    }
}