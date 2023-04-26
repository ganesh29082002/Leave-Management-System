<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();

$deptId = $_GET['deptId'];
$query = "DELETE FROM department WHERE deptId  = '$deptId'";
$result = mysqli_query($conn, $query);
if(isset($result)) {
    echo "Department Deleted Successfully!";
    header("location: ../pages/SuperAdmin/manageDepartment.php");
    exit(0);
}
else
    echo "Department Not Deleted!";
?>
