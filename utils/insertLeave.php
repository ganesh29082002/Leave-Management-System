<?php
include('../includes/_db_conn.php');
$conn = sql_conn();
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $dept = $_POST['dept'];
  $leaveType = $_POST['leaveType'];
  $date = $_POST['date'];
  $fromDate = $_POST['fromDate'];
  $fromType = $_POST['fromType'];
  $toDate = $_POST['toDate'];
  $toType = $_POST['toType'];
  $totalDays = $_POST['totalDays'];
  $adjustedWith = $_POST['adjustedWith'];
  $lecDate = $_POST['lecDate'];
  $lecStartTime = $_POST['lecStartTime'];
  $lecEndTime = $_POST['lecEndTime'];
  $sem = $_POST['sem'];
  $subject = $_POST['subject'];
  $sql = "SELECT * FROM leavedetails";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  if ($count == 0)
    $leaveInsId = 1;
  else {
    $sql = "SELECT MAX(leaveInsId) FROM leavedetails";
    $result1 = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result1);
    $leaveInsId = $row['MAX(leaveInsId)'] + 1;
  }
  $query1 = "SELECT userId FROM user WHERE email = '$email'";
  $result1 = mysqli_query($conn, $query1);
  $row = mysqli_fetch_assoc($result1);
  $userId = $row['userId'];
  $query = "INSERT INTO leavedetails VALUES($leaveInsId, $userId, '$date', '$leaveType', '$fromDate', '$fromType', '$toDate', '$toType', $totalDays, 'Sick', 0, 0)";
  $resultLeave = mysqli_query($conn, $query);
  $sql = "SELECT * FROM lectureadjustment";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  if ($count == 0)
    $adjustId = 1;
  else {
    $sql = "SELECT MAX(leaveInsId) FROM leavedetails";
    $result1 = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result1);
    $adjustId = $row['MAX(leaveInsId)'] + 1;
  }
  $query1 = "SELECT userId FROM user WHERE email = '$email'";
  $result1 = mysqli_query($conn, $query1);
  $row = mysqli_fetch_assoc($result1);
  $adjusterId = $row['userId'];
  $query2 = "INSERT INTO lectureadjustment VALUES ($adjustId, $leaveInsId, $userId, $adjusterId, 'Pending', '$lecDate', '$lecStartTime', '$lecEndTime', $sem, '$subject')";
  echo $query2;
  $result2 = mysqli_query($conn, $query2);
  echo $query1;
  echo $query2;
}
echo "Hello";
?>