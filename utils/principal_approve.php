<?php
    $id = $_GET['id'];

    
    session_start();
    include('../includes/_db_conn.php');
    $conn = sql_conn();

    $email = $_SESSION['email'];

    $user_query = "SELECT userId FROM user WHERE email = '$email'";

    $user_query_run = mysqli_query($conn, $user_query);

    $row = mysqli_fetch_array($user_query_run);

    $userId = $row['userId'];

    $query = "UPDATE leavedetails SET status = 'APPROVED_BY_PRINCIPAL', approvedIdPrincipal = $userId WHERE leaveInsId = $id";
    $run = mysqli_query($conn, $query);
    header("location: ../pages/Principal/Principal_staff_approval.php");
?>