<h3 class= "text-center text-success">All Categories</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class ="text-center">
            <th>S1no</th>
            <th>Category title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
    <?php
    $select_cat="select * from categories ";
    $result=mysqli_query($con,$select_cat);
    while($row=mysqli_fetch_assoc($result)){
        $category_id=$row['category_id'];
        $category_title=$row['']
    }
    ?>
        <tr class="bg-secondary text-light">
            <td>1</td>
            <td>Juices</td>
            <td><a href='' class='text-light'><i class='fa-solid fa-pen-to-square'></i></td>
           <td><a href=''class='text-light'><i class='fa-solid fa-trash'></i>
           </a></td> 
            
        </tr>
    </tbody>
</table>