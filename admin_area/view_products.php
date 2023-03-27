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
            $products_image=$row['product_image'];
            $product_price=$row['product_price'];
            $status=$row['status'];
            $number++;
            echo "<tr class='text-center'>
            <td>$number</td>
            <td>mango</td>
            <td>Image</td>
            <td>444</td>
            <td>0</td>
            <td>true</td>
            <td><a href='' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
        </tr>";
        }
        ?>

    </tbody>
   </table>
</body>
</html>