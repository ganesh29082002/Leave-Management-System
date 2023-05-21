<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();

$date = $_GET['date'];
print_r($date);

$query = "DELETE FROM holidays WHERE date = '$date'";

$result = mysqli_query($conn, $query);
if(isset($result)) {
    echo "Holiday Deleted Successfully!";
    header("location: ../pages/SuperAdmin/manageHolidays.php");
    exit(0);
}
else
    echo "Holiday Not Deleted!";
?>
