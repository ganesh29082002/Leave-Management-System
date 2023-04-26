<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();
$deptId = $_GET['deptId'];

if (isset($_POST['submit'])) {
    $deptName = $_POST['deptName'];
    $deptHodEmail = $_POST['deptHodEmail'];
    $query1 = "SELECT userId FROM user WHERE email = '$deptHodEmail'";
    $result1 = mysqli_query($conn, $query1);
    $row = mysqli_fetch_assoc($result1);
    $deptHod = $row['userId'];
    $query = "INSERT INTO department(deptName, deptHod) VALUES ('$deptName','$deptHod')";
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
