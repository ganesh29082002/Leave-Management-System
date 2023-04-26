<?php

include('../../utils/ManageUserUtils.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/common.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/addUser.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 
    <title>Bajaj Institute of Technology, Wardha</title>
</head>

<body>
    <?php
    include "../../includes/super_admin_SideNavbar.php";
    ?>
    <section class="home-section">
        <div class="horizontal_navbar">
            <h1 class="Heading_Heder"> Bajaj Institute Technology Wardha</h1>
        </div>

 <!-- <div  class="container mt-2 d-flex justify-content-center ">
        
        <form  class="bg-white shadow pl-5 pr-5 pb-5 pt-2 mt-5 rounded-lg" action="../../utils/insert.php" method="POST">
        <h4 class="pb-3 pt-2" style="color: #11101D;">Add User</h4>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="form-control  border-top-0 border-right-0 border-left-0 border border-dark bg-white" id="inputEmail4" placeholder="User Id"  name="userId">
          </div>
          <div class="form-group col-md-6">
            <input type="email"  class="form-control bg-white border-top-0 border-right-0 border-left-0 border border-dark " id="inputEmail4" placeholder=" Email" name="email">
          </div>
          <div class="form-group col-md-6">
            <input type="Full Name"  class="form-control bg-white border-top-0 border-right-0 border-left-0 border border-dark " id="inputEmail4" placeholder="Enter FUll Name" name="fullname">
          </div>

          <div class="form-group col-md-6">
                <select name="deptId" class="form-control bg-white border-top-0 border-right-0 border-left-0 border border-dark " id="inputEmail4" >
                    <option value="Not Selected" selected disabled hidden>SELECT Department</option>
                    <?php while($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='$row[deptId]'>$row[deptId]. $row[deptName]</option>";
                    } ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control bg-white border-top-0 border-right-0 border-left-0 border border-dark " id="inputEmail4" placeholder=" Joining Date"  name="joining">
            </div>
              <div class="form-group col-md-6">
                <select name="staff" class="form-control bg-white border-top-0 border-right-0 border-left-0 border border-dark ">
                    <option value="Not Selected" selected disabled hidden>SELECT STAFF</option>
                    <option value="Teaching">Teaching</option>
                    <option value="Non Teaching">Non Teaching</option>
                </select>
            </div>
                <div class="form-group col-md-6">
                <select name="user" class="form-control bg-white border-top-0 border-right-0 border-left-0 border border-dark " >
                    <option value="Not Selected" selected disabled hidden>SELECT USER</option>
                    <option value="HOD">HOD</option>
                    <option value="FACULTY">FACULTY</option>
                    <option value="LEAVE_ADMIN">LEAVE_ADMIN</option>
                    <option value="SUPER_ADMIN">SUPER_ADMIN</option>
                </select>
            </div>

        </div>
        <div class="form-group col-md-6">  <input type="submit" name="submit" class="submitbtn"> </div>


            </form>
            </div> -->

        <div class="manageUserMain">
  

            
            <form class="addUserDiv" action="../../utils/insert.php" method="POST">

                
                <div class="rows"><label>User Id: </label><input type="text" name="userId"></div>
                <div class="rows"><label>Email: </label><input type="text" name="email"></div>
                <div class="rows"><label>Full Name: </label><input type="text" name="fullname"></div>
                <div class="rows"><label>Department: </label>
                <select name="deptid">
                    <option value="Not Selected" selected disabled hidden>SELECT</option>
                    <?php while($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='$row[deptId]'>$row[deptId]. $row[deptName]</option>";
                    } ?>
                </select></div>
                <div class="rows"><label>Joining Date: </label><input type="date" name="joining"></div>
                <div class="rows"><label>Staff: </label>
                <select name="staff">
                    <option value="Not Selected" selected disabled hidden>SELECT</option>
                    <option value="Teaching">Teaching</option>
                    <option value="Non Teaching">Non Teaching</option>
                </select></div>
                <div class="rows"><label>User Type: </label>
                <select name="user">
                    <option value="Not Selected" selected disabled hidden>SELECT</option>
                    <option value="HOD">HOD</option>
                    <option value="FACULTY">FACULTY</option>
                    <option value="LEAVE_ADMIN">LEAVE_ADMIN</option>
                    <option value="SUPER_ADMIN">SUPER_ADMIN</option>
                </select></div>
                <input type="submit" name="submit" class="submitbtn">
            </form>
        </div>
    </section>
</body>

</html>