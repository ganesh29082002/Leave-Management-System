<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();

$email = $_GET['email'];
$query = "DELETE FROM users WHERE email  = '$email'";
$result = mysqli_query($conn, $query);
if(isset($result)) 
    echo "User Deleted Successfully!";
else
    echo "User Not Deleted!";
?>
