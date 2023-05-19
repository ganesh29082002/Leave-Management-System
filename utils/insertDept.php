<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();
$sql = "SELECT * FROM department";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if ($count == 0)
  $deptId = 1;
else {
  $sql = "SELECT MAX(deptId) FROM department";
  $result1 = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result1);
  $deptId = $row['MAX(deptId)'] + 1;
}

if (isset($_POST['submit'])) {
    $deptName = $_POST['deptName'];
    $deptHodEmail = $_POST['deptHodEmail'];
    $query1 = "SELECT userId FROM user WHERE email = '$deptHodEmail'";
    $result1 = mysqli_query($conn, $query1);
    $row = mysqli_fetch_assoc($result1);
    $deptHod = $row['userId'];
    $query = "INSERT INTO department(deptId, deptName, deptHod) VALUES ('$deptId', '$deptName','$deptHod')";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        header("location: ../pages/SuperAdmin/manageDepartment.php");
        exit(0);
    } else {
        echo "Department Not Added!";
        exit(0);
    }
}

?>
