<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <title> Responsive Sidebar Menu </title>

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/65712a75e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/sideNavbar_comman.css?v=<?php echo time();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/StaffHomePage.css?v=<?php echo time();?>">

   </head>
<body>

  <div class="sidebar">
    <div class="logo-details">
    <img class="bitlogo" src="../../assets/bitlogo_transparent.png" alt="profileImg">
        <div class="logo_name">SLMSB</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>

     <li>
       <a href="../../pages/LeaveAdmin/manageMasterData.php">
       <i class="fa-solid fa-server"></i>
         <span class="links_name">Manage Master Data</span>
       </a>
       <span class="tooltip">Manage Master Data</span>
     </li>

     <li>
       <a href="../../pages/LeaveAdmin/manageLeaves.php">
       <i class="fas fa-sticky-note"></i>
         <span class="links_name">Manage Leaves</span>
       </a>
       <span class="tooltip">Manage Leaves</span>
     </li>


     <li class="profile">
         <div class="profile-details">
         <!-- <img src="assets/ganesh.jpg" alt="profileImg"> -->
         <img src="../../assets/ganesh.jpg" alt="profileImg">

           
          
           <div class="name_job">
             <div class="name">Admin</div>
             <div class="job">ID: 123456</div>
           </div>
         </div>
         <i class="fa-solid fa-right-from-bracket" id="log_out"></i>
         <!-- <i class='bx bx-log-out' id="log_out" ></i> -->
     </li>
    </ul>
  </div>

  <script src="../../js/script.js"></script>

</body>
</html>
