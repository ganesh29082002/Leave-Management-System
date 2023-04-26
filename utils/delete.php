<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();

$email = $_GET['email'];
$query = "DELETE FROM user WHERE email  = '$email'";
$result = mysqli_query($conn, $query);
if(isset($result)){
    header("Location: http://localhost/Leave-Management-System/pages/SuperAdmin/manageEmployees.php");
}
else
    header("Location: http://localhost/Leave-Management-System/pages/SuperAdmin/manageEmployees.php");  
?>
