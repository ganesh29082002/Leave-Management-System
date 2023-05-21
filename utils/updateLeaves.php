<?php
include('../includes/_db_conn.php');
$conn = sql_conn();

$userId = $_GET['userId'];
$leaveId = $_GET['leaveId'];

if (isset($_POST['submit'])) {
    
    $balance = $_POST['balance'];
    $reason = $_POST['reason'];

    $query = "UPDATE leavebalance SET balance=$balance , lastUpdatedOn=now() WHERE userId = '$userId' and leaveId=$leaveId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: ../pages/SuperAdmin/manageLeaves.php");
        exit(0);
    } else {
        echo "Leaves Not Updated!";
        exit(0);
    }
}
?>