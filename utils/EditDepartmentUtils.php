<?php
$deptId = $_GET['deptId'];
$query = "SELECT * FROM department WHERE deptId = '$deptId'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$deptName = $row['deptName'];
$deptHod = $row['deptHod'];
$query1 = "SELECT email FROM user WHERE userId = $deptHod";
$result1 = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($result1);
$deptHodEmail = $row['email'];
?>