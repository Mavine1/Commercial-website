<h3 class= "text-center text-success">All Orders</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
       
        <?php
        $get_orders+"select * from user_orders";
        $result=mysqli_query($con,$get_orders);
        $row_count=mysqli_num_rows($result);
        echo "<tr>
        <th>S1 no</th>
        <th>Due Amount</th>
        <th>invoice number</th>
        <th>Total products</th>
        <th>Order data</th>
        <th>Status</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody class='bg-secondary text-light'>";

if
        ?>
         

    </tbody>