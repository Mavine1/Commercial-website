
    <h3 class="text-danger mb-4">Delete Account</h3>
    <form action="" method="post" class="mt-5">
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="delete"
            value="delete Account">
        </div>
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="don't_delete"
            value="Don't Delete Account" >
        </div>
    </form>
<?php
$username_session=$_SESSION['username'];
if(isset($_POST['delete'])){
    $delete_query="Delte"
}
?>