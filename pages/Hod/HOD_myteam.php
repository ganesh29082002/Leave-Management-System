<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/common.css">
    <link rel="stylesheet" href="../../css/HOD_myteam.css">
</head>
<body>
    <?php 
    include "../../includes/HOD_SideNavbar.php";
    include('../../includes/_db_conn.php');
    $conn = sql_conn();
    ?>
<section class="home-section">
        <div class="horizontal_navbar">
            <h1 class="Heading_Heder ml-3"> Bajaj Institute Technology Wardha</h1>
        </div>
        <div class="manageUserMain">
            <h1 class="heading">Manage Employees</h1>
            <div class="User">
                
                <table class="tablecontent">
                    <?php $sql1 = "SELECT * FROM leavedetails Limit 5";
                    $res = mysqli_query($conn, $sql1) or die("result failed in table");

                    if (mysqli_num_rows($res) > 0) { ?>
                        <thead>
                            <tr>
                                <th>Leave Type</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Reason</th>
                                <th>Posting Date</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    <?php } ?>

                    <tbody id="tbody">
                        <?php
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                            <tr>
                                <td> <?php echo $row['leaveType']  ?> </td>
                                <td><?php echo $row['startDate'] ?> </td>
                                <td><?php echo $row['endDate'] ?></td>
                                <td><?php echo $row['reason'] ?></td>

                                <td><?php echo $row['dateTime'] ?></td>
                                <td class="text-end">
                                    <a href="users.php?editid=<?php echo $row['userId'] ?>"><i class="fa-solid fa-pen-to-square edit"></i></a>
                                    <a href="users.php?sid=<?php echo $row['userId'] ?>"><i style="margin-left: 5px;" class="fa-solid fa-trash delete"></i></a>
                                </td>
                                <td> Approved</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </table>
            </div>
            </div>
</section>
</body>
</html>