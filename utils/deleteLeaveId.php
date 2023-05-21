<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();

$leaveId = $_GET['leaveId'];
$query = "DELETE FROM masterdata WHERE leaveId='$leaveId' ";
print_r( $query );
$result = mysqli_query($conn, $query);
if(isset($result)){
    header("Location: http://localhost/Leave-Management-System/pages/SuperAdmin/manageMasterData.php");
}
else
    header("Location: http://localhost/Leave-Management-System/pages/SuperAdmin/manageMasterData.php");  
?>
