<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/sideNavbar_comman.css">
    <link rel="stylesheet" href="../../css/Staff_dashboard.css">
    <script src="https://kit.fontawesome.com/65712a75e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  


</head>
<body>

<?php 
include "../../includes/Staff_SideNavbar.php";
include ('../../includes/_db_conn.php');
$conn = sql_conn();
?>
   <section class="home-section">
   <div class="horizontal_navbar">
     <h1 class="Heading_Heder"> Bajaj Institute Technology Wardha</h1> 
   </div>

      <div class="text container">Dashboard</div>
      
      <div class="container bg-white rounded-lg shadow-lg mt-3 " >
            <div class="row p-3 rounded-lg shadow-lg d-flex justify-content-sm-center  " style="transition: all all 0.5s ease; border-right:6px solid #11101D" >

            <?php  $sql1 = "SELECT * FROM masterdata";
                            $res = mysqli_query($conn, $sql1) or die("result failed in table");
                            while ($row = mysqli_fetch_assoc($res)) { ?>
                <div class="col-md-3 col-sm-12  rounded-lg m-3 bg-white shadow-lg fit-content" style="border-right:6px solid #11101D ">
                    <div class="row p-2 pr-0 ">
                        <div class="col-3 pl-3 pt-2   "><i class="fa-solid fa-users " style="font-size:25px; text-align: center;"></i></div>
                        <div class="col-6  ">
                            <div class="row pb-1 pl-2 d-flex justify-content-sm-center"><h5><?php echo $row['leaveType']?></h5></div>
                            <div class="row pt-0 pl-4 pr-0">
                               <!-- PHP CODE HERE -->
                               <h3><?php echo $row['increment']?></h3>
                          </div>
                        </div>
                    </div>
                    <div class="row border-top p-3">
                        hello
                    </div>
                </div>

                <?php }?>

                
            </div>
        </div>

  </section>
 
</body>
</html>