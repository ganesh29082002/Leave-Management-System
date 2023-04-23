<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();
$deptId = $_GET['deptId'];

if (isset($_POST['submit'])) {
    $deptId = $_POST['deptId'];
    $deptName = $_POST['deptName'];
    $deptHod = $_POST['deptHod'];
    $query = "INSERT INTO department(deptId, deptName, deptHod) VALUES ('$deptId','$deptName','$deptHod')";
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
