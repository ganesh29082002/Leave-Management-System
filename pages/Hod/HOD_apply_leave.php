<?php
include "../../includes/Authentication_verified.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/sideNavbar_comman.css">
  <link rel="stylesheet" href="../../css/common.css?v=<?php echo time(); ?>">
  <!-- <link rel="stylesheet" href="../../css/Staff_dashboard.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../../js/StaffScript.js"></script>
</head>

<body>

  <?php
    include "../../includes/HOD_SideNavbar.php";
  include('../../includes/_db_conn.php');
  $conn = sql_conn();
  ?>
  <section class="home-section">
    <div class="horizontal_navbar">
      <h1 class="Heading_Heder"> Bajaj Institute Technology Wardha</h1>
    </div>
    <div class="container mt-2 d-flex justify-content-center ">
      <form action="../../utils/insertLeave.php" method="POST" class="bg-white shadow pl-5 pr-5 pb-5 pt-2 mt-5 rounded-lg " style="border-right:6px solid #11101D;">
        <h4 class="pb-3 pt-2" style="color: #11101D;">Apply for Leave</h4>
        <div class="form-row">
          <div class="form-group col-md-6">
            <!-- <label for="inputEmail4">Email</label> -->
            <?php
            $email = $_SESSION['email'];
            $sql1 = "SELECT * FROM user where email = '$email'";
            $res = mysqli_query($conn, $sql1) or die("result failed in table");
            $row = mysqli_fetch_assoc($res) ?>
            <input type="email" readonly class="form-control border-top-0 border-right-0 border-left-0 border border-dark bg-white" id="inputEmail4" placeholder=" Email" name="email" value="<?php echo $row['email'] ?>">
          </div>
          <div class="form-group col-md-6">
            <!-- <label for="inputPassword4">Password</label> -->
            <?php
            $deptId = $_SESSION['deptId'];
            $sql1 = "SELECT * FROM department where deptId = '$deptId'";
            $res = mysqli_query($conn, $sql1) or die("result failed in table");
            $row = mysqli_fetch_assoc($res) ?>
            <input type="text" readonly class="form-control bg-white border-top-0 border-right-0 border-left-0 border border-dark " id="inputEmail4" placeholder="Department" name="dept" value="<?php echo $row['deptName'] ?>">
          </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <select id="inputState" name="leaveType" class="form-control border-top-0 border-right-0 border-left-0 border border-dark" name="leaveType">
              <option selected disable>Choose Leave Type</option>
              <?php $sql1 = "SELECT * FROM masterdata";
              $res = mysqli_query($conn, $sql1) or die("result failed in table");
              while ($row = mysqli_fetch_assoc($res)) { ?>
                <option><?php echo $row['leaveType'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group col-md-6">
            <input type="text" readonly name="date" class="form-control bg-white border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4" placeholder="Today Date" value="<?php echo date("Y/m/d") ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <input type="text" name="fromDate" placeholder="From" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4" placeholder="To">

          </div>
          <div class="form-group col-md-2">
            <select id="inputState" name="fromType" class="form-control border-top-0 border-right-0 border-left-0 border border-dark">
              <option selected disable>Day Type</option>
              <option>Half</option>
              <option>Full</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <input type="text" name="toDate" placeholder="To" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4" placeholder="To">
          </div>
          <div class="form-group col-md-2">
            <select id="inputState" name="toType" class="form-control border-top-0 border-right-0 border-left-0 border border-dark">
              <option selected disable>Day Type</option>
              <option>Half</option>
              <option>Full</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <input type="number" name="totalDays" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4" placeholder="Total Days">
          </div>
        </div>

        <!-- Adjustment Section -->

        <div class="form-row" id="dynamicadd">
          <div class="form-group col-md-3">
            <select id="inputState" name="adjustedWith" class="form-control border-top-0 border-right-0 border-left-0 border border-dark">
              <option selected disable>Lecture Adjust With.. </option>
              <?php $sql1 = "SELECT * FROM user";
              $res = mysqli_query($conn, $sql1) or die("result failed in table");
              while ($row = mysqli_fetch_assoc($res)) { ?> 
                <option><?php echo $row['email'] ?></option>

              <?php } ?>
            </select>

          </div>

          <div class="form-group col-md-2">
            <input type="text" name="lecDate" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Lecture Date" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4">
          </div>
          <div class="form-group col-md-2">
            <input type="text" name="lecStartTime" onfocus="(this.type='time')" onblur="(this.type='text')" placeholder="start Time" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4">
          </div>
          <div class="form-group col-md-2">
            <input type="time " name="lecEndTime" onfocus="(this.type='time')" onblur="(this.type='text')" placeholder="End Time" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4">
          </div>
          <div class="form-group col-md-1">
            <input type="text" name="sem" placeholder="Sem" class="form-control border-top-0 border-right-0 border-left-0  border border-dark">
          </div>
          <div class="form-group col-md-1">
            <input type="text" name="subject" placeholder="Subject" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4">
          </div>
          <div class="form-group col-sm-12 col-md-1">
            <button class=" btn" id="add" name="btn[]" style="background-color: #11101D; color:white">Add</button>
          </div>
        </div>
        <button type="submit" name="submit" class="btn mt-2" style="background-color: #11101D; color: white;">Apply</button>
      </form>
    </div>
  </section>
</body>

</html>