<?php

include('../../utils/ManageDepartmentUtils.php');

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
    <script src="https://kit.fontawesome.com/9dcdbf7660.js" crossorigin="anonymous"></script>
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
            <h1 class="heading">Manage Departments</h1>
            <a href="../../pages/SuperAdmin/addDept.php"><button class="addUser">+</button></a>
            <div class="User">
                <table class="tablecontent">
                    <thead>
                        <tr>
                            <th>DEPARTMENT ID</th>
                            <th>DEPARTMENT NAME</th>
                            <th>DEPARTMENT HOD</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php
                        $query1 = "SELECT * FROM department";
                        $result = mysqli_query($conn, $query1);
                        foreach ($result as $cols) {
                            $userid = $cols['deptHod'];
                            $query1 = "SELECT fullName FROM user WHERE userId = $userid";
                            $result1 = mysqli_query($conn, $query1);
                            $row = mysqli_fetch_assoc($result1);
                            echo "<tr>";
                            echo "<td>" . $cols['deptId'] . "</td>";
                            echo "<td>" . $cols['deptName'] . "</td>";
                            echo "<td>" . $row['fullName'] . "</td>";
                            echo "<td><a href='../../pages/SuperAdmin/editDept.php?deptId=$cols[deptId]' name='edit'><i class='fa-solid fa-pen-to-square edit'></i></a></td>";
                            echo "<td><a href='../../utils/deleteDept.php?deptId=$cols[deptId]' name='delete'><i class='fa-solid fa-trash delete'></i></a></td>";
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