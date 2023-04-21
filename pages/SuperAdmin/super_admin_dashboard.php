<?php

    include ('../../utils/_super_admin_.class.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/common.css">
    <link rel="stylesheet" href="../../css/super_admin_dashboard.css">
    <title>Super Admin Dashbaord</title>
</head>

<body>


    <div class="admin-dashboard-container">

        <div class="stats-container  border ">

            <div class="card total-employee">

                <p>Total Employees</p>
                <?php echo  "<p class='stats' >".SuperAdmin::getTotalEmployee()[0]."</p>" ?>

            </div>

            <div class="card total-employee">

                <p>Total Departments</p>
                <?php echo  "<p class='stats' >".SuperAdmin::getTotalDepartment()[0]."</p>" ?>

            </div>

            <div class="card total-employee">

                <p>Total Leave Types</p>
                <?php echo  "<p class='stats' >".SuperAdmin::getTotalLeaveTypes()[0]."</p>" ?>

            </div>

            <div class="card total-employee">

                <p>Total Leave Types</p>
                <?php echo  "<p class='stats' >".SuperAdmin::getTotalLeaveTypes()[0]."</p>" ?>

            </div>

            <div class="card total-employee">

                <p>Total Leave Types</p>
                <?php echo  "<p class='stats' >".SuperAdmin::getTotalLeaveTypes()[0]."</p>" ?>

            </div>

        </div>


    </div>



</body>

</html>