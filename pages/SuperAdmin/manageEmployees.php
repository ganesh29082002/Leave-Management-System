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
    <link rel="stylesheet" href="../../css/manageUser.css?v=<?php echo time(); ?>">
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
            <h1 class="heading">Manage Employees</h1>
            <a href="../../pages/SuperAdmin/addUser.php"><button class="addUser">+</button></a>
            <div class="User">
                <table class="tablecontent">
                    <thead>
                        <tr>
                            <th>SR NO.</th>
                            <th>FULL NAME</th>
                            <th>EMAIL</th>
                            <th>JOINING DATE</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php
                        $query1 = "select * from Users WHERE userType='Teaching'";
                        $result = mysqli_query($conn, $query1);
                        foreach ($result as $cols) {
                            echo "<tr>";
                            echo "<td>" . $cols['userId'] . "</td>";
                            echo "<td>" . $cols['fullname'] . "</td>";
                            echo "<td>" . $cols['email'] . "</td>";
                            echo "<td>" . $cols['joiningDate'] . "</td>";
                            echo "<td><a href='../../pages/SuperAdmin/edit.php?email=$cols[email]' name='edit'><img src= ../../assets/edit.png width='10' height='20'> </a></td>";
                            echo "<td><a href='../../utils/delete.php?email=$cols[email]' name='delete'><img src= ../../assets/delete.png width='20' height='20'> </a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>