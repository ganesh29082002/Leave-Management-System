<?php
$deptId = $_GET['deptId'];
$query = "SELECT * FROM department WHERE deptId = '$deptId'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$deptId = $row['deptId'];
$deptName = $row['deptName'];
$deptHod = $row['deptHod'];
?>