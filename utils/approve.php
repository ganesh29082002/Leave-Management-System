<?php
    $flag = $_GET['flag'];
    $id = $_GET['id'];
    if($flag == 1) {
    session_start();
    include('../includes/_db_conn.php');
    $conn = sql_conn();
    $email = $_SESSION['email'];
    $user_query = "SELECT userId FROM user WHERE email = '$email'";
    $user_query_run = mysqli_query($conn, $user_query);
    $row = mysqli_fetch_array($user_query_run);
    $userId = $row['userId'];
    $query = "UPDATE leavedetails SET status = 'APPROVED_BY_HOD', approvedIdHOD = $userId WHERE leaveInsId = $id";
    $run = mysqli_query($conn, $query);
    header("location: ../pages/Hod/HOD_leave_history.php");
    }
    else {
        echo "Lecture Adjustments aren't done yet<br>";
        echo "<a href='../pages/Hod/HOD_leave_approval.php?id=".$id."'><button type='button'>Back</button></a>";
    }
?>