<?php
$con=mysqli_connect('localhost','root','','commerce');
if(!$con){
    //die(mysqli_error($con));
    echo "connected";
}else{
  die(mysqli_error($con));  
}








?>