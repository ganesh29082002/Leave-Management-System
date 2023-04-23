<?php

include('../../utils/ManageDepartmentUtils.php');
include('../../utils/EditDepartmentUtils.php');
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
        </div>
        <div class="manageUserMain">
            <h1 class="heading">Update Department</h1>
            <form class="addUserDiv" action="../../utils/updateDept.php?deptId=<?php echo $deptId?>" method="POST">
                <div class="rows"><label>Department Id: </label><input type="text" name="deptId" value="<?php echo $deptId?>"></div>
                <div class="rows"><label>Department Name: </label><input type="text" name="deptName" value="<?php echo $deptName?>"></div>
                <div class="rows"><label>Department HOD Id: </label><input type="text" name="deptHod" value="<?php echo $deptHod?>"></div>
                <input type="submit" name="submit" class="submitbtn">
            </form>
        </div>
    </section>
</body>

</html>