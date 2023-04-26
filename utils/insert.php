<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $deptId = $_POST['deptId'];
    $joining = $_POST['joining'];
    $staff = $_POST['staff'];
    $user = $_POST['user'];
    $query = "INSERT INTO user(email, fullName, deptId, joiningDate, userType, position) VALUES ('$email','$fullname','$deptId','$joining','$staff','$user')";
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
