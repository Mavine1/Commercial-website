<h3 class= "text-center text-success">All users</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
       
        <?php
        $Get_payments="select * from user_payments";
        $result=mysqli_query($con,$Get_payments);
        $row_count=mysqli_num_rows($result);
        
if($row_count==0){
    echo "<h2 class='text-danger text-center mt-5'>No record </h2>";
}else{
    echo "<tr>
        <th>S1 no</th>
        <th>username</th>
        <th>user email</th>
        <th>user image</th>
        <th>user address</th>
        <th>user mobile</th>
        <th>Delete </th>
    </tr>
</thead>
<tbody class='bg-secondary text-light'>";

    $number=0;
    while($row_data=mysqli_fetch_assoc($result)){
        $user_id=$row_data['user_id'];
        $username=$row_data['username'];
        $user_email=$row_data['user_email'];
        $user_image=$row_data['user_image'];
        $user_address=$row_data['user_address'];
        $user_mobile=$row_data['user_mobile'];
        $number++;
        echo " <tr>
        <td>$number</td>
        <td>$username</td>
        <td>$user_email</td>
        <td><img src='../user_area/user_images/$user_image'alt='$username'
         alt='$username' class='product_img'/></td>
      
        <td>$user_address</td>
        <td>$user_mobile</td>
        <td><a href='' class='text-light'><i class='fa-solid fa-trash'></i>

    </tr>";
    }
}
        ?>
       
         

    </tbody>
</table>