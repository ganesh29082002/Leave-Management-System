<?php
$email = $_GET['email'];
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$userid = $row['userId'];
$emailval = $row['email'];
$fullnameval = $row['fullname'];
$deptid = $row['deptId'];
$joining = $row['joiningDate'];
$staff = $row['userType'];
$pos = $row['position'];
?>