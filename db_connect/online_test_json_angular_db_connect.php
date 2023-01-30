<?php
$conn=new mysqli('localhost','root','','online_test_json_angular');
//$conn=new mysqli('localhost','admin','Admin@123#','pupsyothakadai');
if($conn->connect_errno)
{
echo $conn->connect_error;
echo "Database not connected";
die();
}
else
{
//echo "Database connected";
}
?>