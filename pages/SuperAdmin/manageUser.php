<!DOCTYPE html>
<html lang="en">
<?php 
include('../../utils/ManageUserUtils.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/manageUser.css">
    <title>Bajaj Institute of Technology</title>
</head>

<body>
    <div class="manageUserMain">
        <h1 class="heading">Manage Users</h1>
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
                    $query1 = "select * from Users WHERE position='SUPER_ADMIN'";
                    $result = mysqli_query($conn, $query1);
                    foreach ($result as $cols) {
                        echo "<tr>";
                        echo "<td>" . $cols['userId'] . "</td>";
                        echo "<td>" . $cols['fullname'] . "</td>";
                        echo "<td>" . $cols['email'] . "</td>";
                        echo "<td>" . $cols['joiningDate'] . "</td>";
                        echo "<td><a href='edit.php' name='edit'><img src= ../../assets/edit.png width='10' height='20'> </a></td>";
                        echo "<td><a href='delete.php' name='delete'><img src= ../../assets/delete.png width='20' height='20'> </a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>