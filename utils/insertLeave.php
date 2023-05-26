<?php
include('../includes/_db_conn.php');
$conn = sql_conn();
if (isset($_POST['submit'])) {

  $email = $_POST['email'];
  $dept = $_POST['dept'];
  $leaveType = $_POST['leaveType'];
  $date = $_POST['date'];
  $fromDate = $_POST['fromDate'];
  $fromType = $_POST['fromType'];
  $toDate = $_POST['toDate'];
  $toType = $_POST['toType'];
  $totalDays = $_POST['totalDays'];
  $reason = $_POST['reason'];
  $adjustedWith = $_POST['adjustedWith'];
  $lecDate = $_POST['lecDate'];
  $lecStartTime = $_POST['lecStartTime'];
  $lecEndTime = $_POST['lecEndTime'];
  $sem = $_POST['sem'];
  $subject = $_POST['subject'];
  

  $query1 = "SELECT userId FROM user WHERE email = '$email'";

  $result1 = mysqli_query($conn, $query1);
  $row = mysqli_fetch_assoc($result1);

  $userId = $row['userId'];

  $query = "INSERT INTO leavedetails VALUES( NULL , $userId , 'PENDING' , '$date', '$leaveType', '$fromDate', '$fromType', '$toDate', '$toType', $totalDays, '$reason' , NULL , NULL )";

  $resultLeave = mysqli_query($conn, $query) or die('die in details');
  


//   if( $adjustedWith != "Lecture Adjust With.."  ){


//   $query = "Select leaveInsId from leavedetails where dateTime = '$date'";
//   $resultLeave = mysqli_query($conn, $query) or die('die in details');

//   $row = mysqli_fetch_assoc($resultLeave);
//   $leaveInsId = $row['leaveInsId'];

//   $query1 = "SELECT userId FROM user WHERE email = '$adjustedWith'";
//   $result1 = mysqli_query($conn, $query1);
//   $row = mysqli_fetch_assoc($result1);
 
//     $adjustedWith= $row['userId'];


// echo $adjustedWith;
// echo $lecDate;
// echo $lecStartTime;
// echo $lecEndTime;
// echo $sem;
// echo $subject;
    
//     $query2 = "INSERT INTO lectureadjustment VALUES ( NULL , $leaveInsId , $userId , $adjustedWith , 'PENDING', '$lecDate', '$lecStartTime', '$lecEndTime', $sem, '$subject')";
//     echo $query2;
//     $result2 = mysqli_query($conn, $query2) or die('die');
//     echo $query1;
//     echo $query2;

    
//     $to = "$adjustedWith";
//     $subject = "My subject";
//     $txt = "Hello sir";
//     $sender = "From:  $email";
    
    
//     // mail($to,$subject,$txt,$sender);
    
//     if(mail($to,$subject,$txt,$sender)){
//       echo "send email";
//     }
//   }

  header("location: ../pages/Staff/Staff_dashboard.php");

  }
echo "Hello";
?>