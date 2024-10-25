<?php 
// $con=mysqli_connect('localhost','root','','ecommerce_1');
$con = new mysqli('enpm818n-midterm-mysql-server.cjici00cauda.us-east-1.rds.amazonaws.com','root','password','ecommerce_db');
if(!$con){
    die(mysqli_error($con));
}




?>