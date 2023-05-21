<?php
$email = $_GET['email'];
$query = "SELECT * FROM user WHERE email = '$email'";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$emailval = $row['email'];
$fullnameval = $row['fullName'];
$deptid = $row['deptId'];
$joining = $row['joiningDate'];
$staff = $row['userType'];
$pos = $row['position'];

$query = "SELECT deptId, deptName FROM department";
$result = mysqli_query($conn, $query);
?>