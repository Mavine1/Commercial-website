<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view products</title>
</head>
<body>
   <h3 class="text-center text-success">All products</h3>
   <table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr>
            <th>product ID</th>
            <th>product Title</th>
            <th>product Image</th>
            <th>product Price</th>
            <th>Total sold</th>
            <th>status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    </thead>
    <tbody class="bg-secondary text-light">
        <?php
        $get_products="select * from products";
        $result=mysqli_query($con,$get_products);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_image=$row['product_image'];
            $product_price=$row['product_price'];
            $status=$row['status'];
            $number++;
            ?>
            <tr class='text-center'>
            <td><?php echo $number;?></td>
            <td><?php echo $product_title;?></td>
            <td><img src='product_images.php?php echo  $product_image;?>'class='product_img'/></td>
            <td><?php echo $product_price;?></td>
            <td><?php
            $get_count="select * from orders_pending where product_id=$product_id";
            $result_count=mysqli_query($con,$get_products);
            $rows_count=mysqli_num_rows($result_count);
            echo $rows_count;
            ?></td>
            <td><?php $status;?></td>
            <td><a href='index.php?edit' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
        </tr>
        <?php
        }
    ?>

    </tbody>
   </table>
</body>
</html>