<?php
include('db_connect/online_test_json_angular_db_connect.php');
$sql = "SELECT question, qtype, optone, opttwo, optthree, optfour FROM online_test_data";
$result = mysqli_query($conn, $sql);
$json_array = array();
while($row = mysqli_fetch_assoc($result))
{
    $json_array[] = $row;
}
echo json_encode($json_array);
?>