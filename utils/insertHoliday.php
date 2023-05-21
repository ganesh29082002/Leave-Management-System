<?php

include ('../includes/_db_conn.php');
$conn = sql_conn();


if (isset($_POST['submit'])) {

    $holidayName = $_POST['holidayName'];
    $date = $_POST['date'];

    $query = "INSERT INTO holidays(date, holidayName) VALUES ( '$date' , '$holidayName' )";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        header("location: ../pages/SuperAdmin/manageHolidays.php");
        exit(0);
    } else {
        echo "Holidays Not Added!";
        exit(0);
    }
}

?>
