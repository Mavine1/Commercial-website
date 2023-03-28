<?php
if(isset($_GET['edit_products'])){
    $edit_id=$_GET['edit_products'];
    $get_date="select * from products where product_id=$edit_id";
    $result=mysqli_query($con,$get_data);
    $roes=mysqli_fetch_assoc($result);
    $product_title=$row['product_title'];
    //echo $product_title;
    $product_description=$row['product_description'];
    $product_keyword=$row['product_keyword'];
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
    $product_image1=$row['product_image1'];
    $product_image2=$row['product_image2'];
    $product_image3=$row['product_image3'];
    $product_price=$row['product_price'];

    //fetching category name
    $select_category="select * from categories where category_id=$category_id";
    $result_category=mysqli_query($con,$select_category);
    $row_category=mysqli_fetch_assoc($result_category);
    $brand_title=$row_brand['category_title'];
   // echo $brand_title;


//fetching category name
$select_brand="select * from brands where brand_id=$brand_id";
$result_brand=mysqli_query($con,$select_brand);
$row_brand=mysqli_fetch_assoc($result_brand);
$category_title=$row_category['category_title'];
//echo $category_title;
}
?>
<div class="container nt-5">
<h1 class ="text-center">Edit product</h1>
<form action="" method="post" enctype ="multipart/form-data">
    <div class="form-outline w-50 m-auto">
        <label for="product_title" class="form-label">product Title</label>
        <input type="text" id="product_title" value="<?php  echo $product_title ?>"
        name="product_title" class="form-control"
        required="required">
    </div>
    <div class="form-outline w-50 m-auto mb-4">
        <label for="product_description" class="form-label">product Description</label>
        <input type="text" id="product_description" value="<?php  echo $product_description?>" 
        name="product_description" class="form-control"
        required="required">
    </div>
    <div class="form-outline w-50 m-auto mb-4">
        <label for="product_keyword" class="form-label">product keyword</label>
        <input type="text" id="product_keyword" value="<?php  echo $product_keyword ?>" name="product_keyword" class="form-control"
        required="required">
    </div>
    <div class="form-outline w-50 m-auto mb-4">
    <label for="product_category" class="form-label">product categories</label>
        <select name="product_category" class="form-select">
            <option value="<?php echo $category_title?>"><?php echo $category_title?></option>
            <option value="<?php echo $brand_title?>"><?php echo $brand_title?></option>
            <?php
            $select_category_all="select * from categories";
            $result_category_all=mysqli_query($con,$select_category_all);
            while($row_category_all=mysqli_fetch_assoc($result_category)){
                $category_title=$row_category_all[]
            };
            $brand_title=$row_brand['category_title'];
           // echo $brand_title;
            ?>

        </select>
    </div>
    <div class="form-outline w-50 m-auto mb-4">
    <label for="product_brand" class="form-label">product brands</label>
        <select name="product_brands" class="form-select">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
    </div>
    <div class="form-outline w-50 m-auto mb-4">
        <label for="product_image1" class="form-label">product image1</label>
        <div class="d-flex">
        <input type="file" id="product_image1" name="product_image1" class="form-control w-90 n-auto"
        required="required">
        <img src="./product_images/<?php  echo $product_image1 ?>" alt="" class="product_img">
</div>
    </div>
    <div class="form-outline w-50 m-auto mb-4">
        <label for="product_image2" class="form-label">product image2</label>
        <div class="d-flex">
        <input type="file" id="product_image2" name="product_image2" class="form-control w-90 n-auto"
        required="required">
        <img src="./product_images/<?php  echo $product_image2 ?>" alt="" class="product_img">
</div>
    </div>
    <div class="form-outline w-50 m-auto mb-4">
        <label for="product_image3" class="form-label">product image3</label>
        <div class="d-flex">
        <input type="file" id="product_image3" name="product_image3" class="form-control w-90 n-auto"
        required="required">
        <img src="./product_images/<?php  echo $product_image3 ?>" alt="" class="product_img">
</div>
    </div>
    <div class="form-outline w-50 m-auto mb-4">
        <label for="product_price" class="form-label">product price</label>
        <input type="text" id="product_price" name="product_price" class="form-control"
        required="required" value="<?php echo $product_price ?>">
    </div>
    <div class="w-50 m-auto">
        <input type="submit" name="edit_product" name="edit+product"
     class ="btn btn-info px-3 mb-3">
    </div>
</form>
</div>