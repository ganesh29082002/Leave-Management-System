<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();
$deptId = $_GET['deptId'];

if (isset($_POST['submit'])) {
    $deptName = $_POST['deptName'];
    $deptHod = $_POST['deptHod'];
    $query = "UPDATE department SET deptId='$deptId', deptName='$deptName', deptHod='$deptHod' WHERE deptId = '$deptId'";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        header("location: ../pages/SuperAdmin/manageDepartment.php");
        exit(0);
    } else {
        echo "Department Not Updated!";
        exit(0);
    }
}

?>
