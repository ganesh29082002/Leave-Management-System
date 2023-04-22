<?php
include ('../../includes/_db_conn.php');
$conn = sql_conn();

$query = "SELECT deptId, deptName FROM department";
$result = mysqli_query($conn, $query);
?>