<?php

$leaveId = $_GET['leaveId'];
$query = "SELECT * FROM masterdata WHERE leaveId = $leaveId";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

$leaveTypeval = $row['leaveType'];
$leaveDescval = $row['leaveDesc'];
$leaveIntervalval = $row['leaveInterval'];
$leaveincrementval = $row['increment'];

?>