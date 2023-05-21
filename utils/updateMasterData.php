<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();

$leaveId = $_GET['leaveId'];

if (isset($_POST['submit'])) {

    $leavetype = $_POST['leavetype'];
    $leaveDesc = $_POST['leaveDesc'];
    $leaveInterval = $_POST['leaveInterval'];
    $leaveincrement = $_POST['leaveincrement'];
    
    $query = "UPDATE masterdata SET leavetype='$leavetype',leaveDesc='$leaveDesc',leaveInterval='$leaveInterval',increment='$leaveincrement' WHERE leaveId = $leaveId";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        header("location: ../pages/SuperAdmin/manageMasterData.php");
        exit(0);
    } else {
        echo "User Not Updated!";
        exit(0);
    }
}

?>
