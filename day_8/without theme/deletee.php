<?php
$host="localhost";
$username="root";
$password="";
$dbname="database_1";

// Connection Function
$connection=mysqli_connect($host,$username,$password,$dbname);

$id=$_GET['deleteid'];

$q=mysqli_query($connection,"update table1_student set is_delete=1 where std_id='{$id}' ")
or die(mysqli_error($connection));

if($q){
    echo"<script>alert('Record deleted');window.location='display.php';</script>";
 }


 ?>