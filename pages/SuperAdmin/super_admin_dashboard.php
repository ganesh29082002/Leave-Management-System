<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Staff/StaffHomePage.css">
    <link rel="stylesheet" href="../../includes/StaffNavBar.css?v=<?php echo time();?>">
    <script src="https://kit.fontawesome.com/65712a75e6.js" crossorigin="anonymous"></script>


</head>
<body>

<?php 
include "../../includes/StaffNavBar.php";
?>
   <section class="home-section">
   <div class="horizontal_navbar">
     <h1 class="Heading_Heder"> Bajaj Institute Technology Wardha</h1> 
     
     <a href="#">
     <i class="fas fa-id-card-alt"></i>
     <!-- <span class="tooltip">User</span> -->
         
        </a>
     
   </div>

      <div class="text">Dashboard</div>
      <div>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est eligendi officiis at nemo eum deleniti natus, incidunt perspiciatis. Ipsum quos dolorum sint optio maiores ratione recusandae ea explicabo nam dignissimos.
      </div>
  </section>
 
</body>
=======
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

>>>>>>> 6d3b099609a908879eb8f2f0bede75d87ca51c32
</html>