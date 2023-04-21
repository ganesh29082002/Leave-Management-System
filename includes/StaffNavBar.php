<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu </title>
    <link rel="stylesheet" href="StaffNavBar.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/65712a75e6.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
       <i class="fas fa-sticky-note"></i>
         <span class="links_name">Manage Leave Type</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="#">
       <i class="fa-solid fa-building-user"></i>
         <span class="links_name">Manage Department</span>
       </a>
       <span class="tooltip">Manage Department</span>
     </li>
     <li>
       <a href="#">
       <i class="fa-solid fa-users"></i>
         <span class="links_name">Manage Employees</span>
       </a>
       <span class="tooltip">Manage Employees</span>
     </li>
     
     <li>
       <a href="#">
       <i class="fas fa-user-cog"></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
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
