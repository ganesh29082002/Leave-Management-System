<?php

$leaveId = $_GET['leaveId'];
$userId = $_GET['userId'];
$query = "SELECT * FROM leavebalance WHERE leaveId = $leaveId and userId = $userId ";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

$leaveTypeval = $row['leaveType'];
$lastUpdatedOnval = $row['lastUpdatedOn'];
$balanceval = $row['balance'];

$query = "SELECT fullName FROM user WHERE userId = $userId ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$userNameval = $row['fullName'];

?>