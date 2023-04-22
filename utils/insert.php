<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();

if (isset($_POST['submit'])) {
    $userId = $_POST['userId'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $deptId = $_POST['deptid'];
    $joining = $_POST['joining'];
    $staff = $_POST['staff'];
    $user = $_POST['user'];
    $query = "INSERT INTO users(userId, email, fullname, deptId, joiningDate, userType, position) VALUES ('$userId','$email','$fullname','$deptId','$joining','$staff','$user')";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        header("location: ../pages/SuperAdmin/manageEmployees.php");
        exit(0);
    } else {
        echo "User Not Added!";
        exit(0);
    }
}

?>
