<?php
if(isset($_GET['delete_brands'])){
    $delete_id=$_GET['delete_brands'];
    //echo $delete_id;
    //delete query

    $delete_products="Delete from  brand where brand_id=$delete_brands";
    $result_product=mysqli_query($con,$delete_products);
    if($result_product){
        echo "<script>alert('brand  deleted  successfully')<script>";
        echo "<script>window.open('./index.php?view_brands','_self')<script>";
    }
}