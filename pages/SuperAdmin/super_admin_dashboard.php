<?php

include('../../utils/_super_admin_.class.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/common.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/super_admin_dashboard.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/65712a75e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/sideNavbar_comman.css">
    <script src="https://kit.fontawesome.com/65712a75e6.js" crossorigin="anonymous"></script>
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

        <div class="container bg-white rounded-lg shadow-lg mt-3">
            <div class="row p-3 rounded-lg shadow-lg d-flex justify-content-sm-center " style="transition: all all 0.5s ease; border-right:6px solid #11101D; ">


                <div class="col-md-3 col-sm-12  col-sm-12 rounded-lg m-3 bg-white shadow-lg" style="border-right:6px solid #11101D ">
                    <div class="row p-2 pr-0">
                        <div class="col-3 pl-3 pt-3   "><i class="fa-solid fa-users " style="font-size:25px; text-align: center;"></i></div>
                        <div class="col-6 ">
                            <div class="row pb-3 pl-0 "><h5>Total Employees</h5></div>
                            <div class="row  pl-3 pr-0">
                                <h5> <?php echo  "<p class='stats' >" . SuperAdmin::getTotalEmployee()[0] . "</p>" ?> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top p-3">
                        hello
                    </div>
                </div>
                <div class="col-md-3  col-sm-12  rounded-lg m-3 bg-white shadow" style="border-right:6px solid #11101D ">
                    <div class="row p-2">
                        <div class="col-3 pl-3 pt-3   "><i class="fa-solid fa-users " style="font-size:25px; text-align: center;"></i></div>
                        <div class="col-6 ">
                            <div class="row pb-3 pl-0 "><h5>Total Department</h5></div>
                            <div class="row  pl-3">
                               <h5><?php echo  "<p class='stats' >" . SuperAdmin::getTotalLeaveTypes()[0] . "</p>" ?></h5> 

                            </div>
                        </div>
                    </div>
                    <div class="row border-top p-3">
                        hello
                    </div>
                </div>
                <div class="col-md-3  col-sm-12 rounded-lg m-3 bg-white shadow" style="border-right:6px solid #11101D;">
                    <div class="row p-2 pb-0">
                        <div class="col-3 pl-3 pt-3   "><i class="fa-solid fa-users " style="font-size:25px; text-align: center;"></i></div>
                        <div class="col-6 ">
                            <div class="row pb-3 pl-0 "><h5>Total Leave Type</h5></div>
                            <div class="row  pl-3">
                               <h5><?php echo  "<p class='stats' >" . SuperAdmin::getTotalLeaveTypes()[0] . "</p>" ?>
</h5> 
                            </div>
                        </div>
                    </div>
                    <div class="row border-top p-3">
                        hello
                    </div>
                </div>
               
                </div>
            </div>
        </div>


        <!-- DEMO -->
        
        <div class="content mt-3 row rounded-lg" >
            <div class="container clg-12  bg-white rounded-lg  " style="transition: all all 0.5s ease; border-right:6px solid #11101D">
                <div class="page-title p-4">
                    <h3> Staff Details
                        <a href="roles.html" class="btn btn-sm btn-outline-primary float-end"><i class="fas fa-user-shield"></i> Roles</a>
                    </h3>
                </div>
                <div class="box box-primary">
                    <div class="box-body">
                        <table width="100%" class="table table-hover" id="dataTables-example">
                            <?php
                            $db = mysqli_connect("localhost", "root", "", "bit_leave_management_system") or die("connectiion Failed");
                            $sql1 = "SELECT * FROM serviceprovider";
                            $res = mysqli_query($db, $sql1) or die("result failed in table");
                            if (mysqli_num_rows($res) > 0) { ?>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Type</th>
                                        <th>Charge</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            <?php } ?>

                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                    <tr>
                                        <td> <?php echo $row['faname'] . " " . $row['lname'] ?> </td>
                                        <td><?php echo $row['gmail'] ?> </td>
                                        <td><?php echo $row['sservice'] ?></td>
                                        <td><?php echo $row['scategory'] ?></td>
                                        <td><?php echo $row['charge'] ?></td>
                                        <!-- <td><a class="btn btn-danger" href="user.php?sid=<?php echo $row['sid'] ?>"></a></td> -->

                                        <td class="text-end">
                                            <a href="users.php?editid=<?php echo $row['sid'] ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="users.php?sid=<?php echo $row['sid'] ?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <!-- for  Delete button  -->
                            <?php
                            if (isset($_GET['sid'])) {
                                include "config.php";
                                $sid = $_GET['sid'];
                                $sql = "DELETE FROM serviceprovider WHERE sid=$sid";
                                $result = mysqli_query($db, $sql) or die("die in uses.php delete function");
                            }

                            if (isset($_GET['editid'])) {
                                include "config.php";
                                $editid = $_GET['editid'];
                                // $sql= "DELETE FROM serviceprovider WHERE sid=$editid";
                                // $result=mysqli_query($db,$sql) or die("die in uses.php edit function");
                            }
                            ?>


                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>





    </section>

</body>

</html>