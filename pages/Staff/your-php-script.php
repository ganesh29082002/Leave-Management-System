<?php
// Retrieve the JavaScript variable's value from the AJAX request
include "../../includes/Authentication_verified.php";

include('../../includes/_db_conn.php');
$email = $_SESSION['email'];
$conn = sql_conn();
$leaveTypeValue = $_POST['leaveTypeValue'];

// $leaveType = 'leaveType';
// $sql1 = "SELECT * FROM leavebalance where userId= (SELECT userId FROM User where email = '$email') ";
$sql1 = "SELECT * FROM leavebalance WHERE userId = (SELECT userId FROM User WHERE email = '$email') AND leaveType = '$leaveTypeValue'";
$res = mysqli_query($conn, $sql1) or die("result failed in table");
while ($row = mysqli_fetch_assoc($res)) { ?>
  <?php $balance =  $row['balance'] ?>
<?php }
// Use the PHP variable as needed
 echo  $balance;
?>