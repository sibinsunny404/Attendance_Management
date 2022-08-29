<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <link rel="stylesheet" href="css/sidebar.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=1024">
   </head>
<body>
<div class="sidebar">
    <div class="logo-details">
    <i class='bx bxs-user-circle icon'></i>
      <div class="logo_name"><?php echo $_SESSION['user']; ?></div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="admin_dash.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="attendence.php">
        <i class='bx bx-list-check'></i>
          <span class="links_name">Take Attendance</span>
        </a>
        <span class="tooltip">Attandance</span>
      </li>
      <li>
        <a href="addstudent.php">
        <i class='bx bxs-user-plus'></i>
          <span class="links_name">Add Students</span>
        </a>
        <span class="tooltip">Add Students</span>
      </li>
      <li>
        <a href="viewStudent.php">
        <i class='bx bxs-user-detail'></i>
          <span class="links_name">View Students</span>
        </a>
        <span class="tooltip">View Students</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-folder'></i>
          <span class="links_name">File Manager</span>
        </a>
        <span class="tooltip">Files</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cart-alt'></i>
          <span class="links_name">Order</span>
        </a>
        <span class="tooltip">Order</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-heart'></i>
          <span class="links_name">Saved</span>
        </a>
        <span class="tooltip">Saved</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
      <li class="profile">
        <div class="profile-details">
        <img style="height: 50px;width:50px;background-color: white;" src="assets/images/extra/tux-logo-24.png" alt="">
         <div class="name_job">
            <div class="name"><?php echo $_SESSION['user']; ?></div>
            <div class="job">Controller</div>
          </div>
        </div>
        <a href="logout.php?logout">
        <i class='bx bx-log-out' id="log_out"></i>
        </a>
      </li>
    </ul>
  </div>

  <script src="js/script.js"></script>

</body>
</html>
