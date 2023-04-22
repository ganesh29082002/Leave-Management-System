<?php

include('../../utils/ManageUserUtils.php');
include('../../utils/EditUserUtils.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/common.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/addUser.css?v=<?php echo time(); ?>">
    <title>Bajaj Institute of Technology, Wardha</title>
</head>

<body>
    <?php
    include "../../includes/super_admin_SideNavbar.php";
    ?>
    <section class="home-section">
        <div class="horizontal_navbar">
            <h1 class="Heading_Heder"> Bajaj Institute Technology Wardha</h1>
            <a href="#">
                <i class="fas fa-id-card-alt"></i>
                <!-- <span class="tooltip">User</span> -->
            </a>
        </div>
        <div class="manageUserMain">
            <h1 class="heading">Update User</h1>
            <form class="addUserDiv" action="../../utils/update.php?email=<?php echo $email?>" method="POST">
                <div class="rows"><label>Email: </label><input type="text" name="email" value="<?php echo $emailval?>"></div>
                <div class="rows"><label>Full Name: </label><input type="text" name="fullname" value="<?php echo $fullnameval?>"></div>
                <div class="rows"><label>Department: </label><input type="text" name="deptid" value="<?php echo $deptid?>"></div>
                <div class="rows"><label>Joining Date: </label><input type="date" name="joining" value="<?php echo $joining?>"></div>
                <div class="rows"><label>Staff: </label><input type="text" name="staff" value="<?php echo $staff?>"></div>
                <div class="rows"><label>User Type: </label><input type="text" name="position" value="<?php echo $pos?>"></div>
                <input type="submit" name="submit" class="submitbtn">
            </form>
        </div>
    </section>
</body>

</html>