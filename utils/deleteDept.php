<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();

$deptId = $_GET['deptId'];
$query = "DELETE FROM department WHERE deptId  = '$deptId'";
$result = mysqli_query($conn, $query);
if(isset($result)) 
    echo "Department Deleted Successfully!";
else
    echo "Department Not Deleted!";
?>
