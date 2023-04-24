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
            <h1 class="heading">Add User</h1>

            <form class="addUserDiv" action="../../utils/insert.php" method="POST">
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