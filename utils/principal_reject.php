<?php
    include('../includes/_db_conn.php');
    $conn = sql_conn();
    $id = $_GET['id'];
    $query = "UPDATE leavedetails SET status = 'REJECTED_BY_PRINCIPAL' WHERE leaveInsId = '$id'";
    $run = mysqli_query($conn, $query);
    header("location: ../pages/Hod/Principal_leave_history.php");
?>