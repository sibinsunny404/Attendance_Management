<?php
require_once 'sessions.php';
require_once 'database/data_for_home.php';
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Admin Dashboard </title>
  <link rel="stylesheet" href="css/sidebar.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background-color: #FFB9AA;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='100%25' gradientTransform='rotate(195,768,361)'%3E%3Cstop offset='0' stop-color='%23FFB9AA'/%3E%3Cstop offset='1' stop-color='%2311FFFC'/%3E%3C/linearGradient%3E%3Cpattern patternUnits='userSpaceOnUse' id='b' width='300' height='250' x='0' y='0' viewBox='0 0 1080 900'%3E%3Cg fill-opacity='0.08'%3E%3Cpolygon fill='%23444' points='90 150 0 300 180 300'/%3E%3Cpolygon points='90 150 180 0 0 0'/%3E%3Cpolygon fill='%23AAA' points='270 150 360 0 180 0'/%3E%3Cpolygon fill='%23DDD' points='450 150 360 300 540 300'/%3E%3Cpolygon fill='%23999' points='450 150 540 0 360 0'/%3E%3Cpolygon points='630 150 540 300 720 300'/%3E%3Cpolygon fill='%23DDD' points='630 150 720 0 540 0'/%3E%3Cpolygon fill='%23444' points='810 150 720 300 900 300'/%3E%3Cpolygon fill='%23FFF' points='810 150 900 0 720 0'/%3E%3Cpolygon fill='%23DDD' points='990 150 900 300 1080 300'/%3E%3Cpolygon fill='%23444' points='990 150 1080 0 900 0'/%3E%3Cpolygon fill='%23DDD' points='90 450 0 600 180 600'/%3E%3Cpolygon points='90 450 180 300 0 300'/%3E%3Cpolygon fill='%23666' points='270 450 180 600 360 600'/%3E%3Cpolygon fill='%23AAA' points='270 450 360 300 180 300'/%3E%3Cpolygon fill='%23DDD' points='450 450 360 600 540 600'/%3E%3Cpolygon fill='%23999' points='450 450 540 300 360 300'/%3E%3Cpolygon fill='%23999' points='630 450 540 600 720 600'/%3E%3Cpolygon fill='%23FFF' points='630 450 720 300 540 300'/%3E%3Cpolygon points='810 450 720 600 900 600'/%3E%3Cpolygon fill='%23DDD' points='810 450 900 300 720 300'/%3E%3Cpolygon fill='%23AAA' points='990 450 900 600 1080 600'/%3E%3Cpolygon fill='%23444' points='990 450 1080 300 900 300'/%3E%3Cpolygon fill='%23222' points='90 750 0 900 180 900'/%3E%3Cpolygon points='270 750 180 900 360 900'/%3E%3Cpolygon fill='%23DDD' points='270 750 360 600 180 600'/%3E%3Cpolygon points='450 750 540 600 360 600'/%3E%3Cpolygon points='630 750 540 900 720 900'/%3E%3Cpolygon fill='%23444' points='630 750 720 600 540 600'/%3E%3Cpolygon fill='%23AAA' points='810 750 720 900 900 900'/%3E%3Cpolygon fill='%23666' points='810 750 900 600 720 600'/%3E%3Cpolygon fill='%23999' points='990 750 900 900 1080 900'/%3E%3Cpolygon fill='%23999' points='180 0 90 150 270 150'/%3E%3Cpolygon fill='%23444' points='360 0 270 150 450 150'/%3E%3Cpolygon fill='%23FFF' points='540 0 450 150 630 150'/%3E%3Cpolygon points='900 0 810 150 990 150'/%3E%3Cpolygon fill='%23222' points='0 300 -90 450 90 450'/%3E%3Cpolygon fill='%23FFF' points='0 300 90 150 -90 150'/%3E%3Cpolygon fill='%23FFF' points='180 300 90 450 270 450'/%3E%3Cpolygon fill='%23666' points='180 300 270 150 90 150'/%3E%3Cpolygon fill='%23222' points='360 300 270 450 450 450'/%3E%3Cpolygon fill='%23FFF' points='360 300 450 150 270 150'/%3E%3Cpolygon fill='%23444' points='540 300 450 450 630 450'/%3E%3Cpolygon fill='%23222' points='540 300 630 150 450 150'/%3E%3Cpolygon fill='%23AAA' points='720 300 630 450 810 450'/%3E%3Cpolygon fill='%23666' points='720 300 810 150 630 150'/%3E%3Cpolygon fill='%23FFF' points='900 300 810 450 990 450'/%3E%3Cpolygon fill='%23999' points='900 300 990 150 810 150'/%3E%3Cpolygon points='0 600 -90 750 90 750'/%3E%3Cpolygon fill='%23666' points='0 600 90 450 -90 450'/%3E%3Cpolygon fill='%23AAA' points='180 600 90 750 270 750'/%3E%3Cpolygon fill='%23444' points='180 600 270 450 90 450'/%3E%3Cpolygon fill='%23444' points='360 600 270 750 450 750'/%3E%3Cpolygon fill='%23999' points='360 600 450 450 270 450'/%3E%3Cpolygon fill='%23666' points='540 600 630 450 450 450'/%3E%3Cpolygon fill='%23222' points='720 600 630 750 810 750'/%3E%3Cpolygon fill='%23FFF' points='900 600 810 750 990 750'/%3E%3Cpolygon fill='%23222' points='900 600 990 450 810 450'/%3E%3Cpolygon fill='%23DDD' points='0 900 90 750 -90 750'/%3E%3Cpolygon fill='%23444' points='180 900 270 750 90 750'/%3E%3Cpolygon fill='%23FFF' points='360 900 450 750 270 750'/%3E%3Cpolygon fill='%23AAA' points='540 900 630 750 450 750'/%3E%3Cpolygon fill='%23FFF' points='720 900 810 750 630 750'/%3E%3Cpolygon fill='%23222' points='900 900 990 750 810 750'/%3E%3Cpolygon fill='%23222' points='1080 300 990 450 1170 450'/%3E%3Cpolygon fill='%23FFF' points='1080 300 1170 150 990 150'/%3E%3Cpolygon points='1080 600 990 750 1170 750'/%3E%3Cpolygon fill='%23666' points='1080 600 1170 450 990 450'/%3E%3Cpolygon fill='%23DDD' points='1080 900 1170 750 990 750'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect x='0' y='0' fill='url(%23b)' width='100%25' height='100%25'/%3E%3C/svg%3E");
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
</head>

<body>
  <?php
    require_once 'loader.html';
  ?>
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
        <a href="addsub.php">
        <i class='bx bxs-book-add'></i>
          <span class="links_name">Add Subject</span>
        </a>
        <span class="tooltip">Add Subject</span>
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
  <section class="home-section">
    <div class="text" style="color:black">Dashboard</div>
    <!-- card body start from here -->
    <div class="container">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
      <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
      <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
      <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="font-large-2 float-left"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAAAXNSR0IArs4c6QAAAqhJREFUeF7tmYFNxDAMRX2TAJvAJMAkwCTAJMAksAnoSzVYlnOJ094lRT8S4tQmbf36v52kB2H7JXAgiz8ChGHUQBiEEScHKmOQMi5F5FlE7kXka8bEvVYZCBDtbgkQQb4XAn0Tkeul382MQHphAAIAPASBA8iriDyac/ht+6LPdEB6YODt4i3XGhSilgCMWxFRJWHsdECyMBDMZ42COf+yAMGhCAhgoc8ULQtDfZ95eBuwtwvUA7tM0TIwWu3hA4MdrsxBKMvaBeemqC4ZGEiYKI3Z5mHgGriWtmmskoHhg8hAgRW05HqFPbnKk7nupn0zMLzfMw9irfAvYPTmDECz0D3UXSojW1ZVOb5ieBi7zBkIrqe02nzhgfrkmrHe5n0zOQM3z6rDq8LDnMYi3sutpJE7UFnsXCEa60FEpdmqpvX+J+uXVYY+SHahdmyOgpwBcMMnXr0wLBSA0T8E5Zfwuo+hfUoqGr7PsRZGVrKwGJby+B9N24cu63tg6BtGQBcFGh+L7EsbPRiLJb2dluNSQ5f1rTAAAG/UP3yLMqLNHh0XLeuHVZgWGGtmnhaW3eyxx6Np/pAqU4OxZj0Sqaakkin2OY7B2BqEwgEQLacW2PB9jhKMraxRyinRNNzDt1uGLblpdZ8SjJ41SPZhokTp1VGzcfaeR/tHN+vd0co+WKQO/xLOuiUYwVizo5UF4quGv/dZq0oEw0s1G2Cmv7cKVInJmDacL03cMvdp6hvB+G4auU2nqT8VnLqKROsR+xlhG8SdV/HKIAwDUvcpOtmmh6Gi7PbzYjraPQ0466RmdjCEYd4QYRBGbFgqg8qgMqrFjDahTWgT2qRKgDahTaoiYTWhTWgT2qRKgDahTaoiYTWhTWgT2qRKgDahTaoiYTWhTWiTqk1+ANt/gkTpN+XEAAAAAElFTkSuQmCC"/></i>
                  </div>
                  <?php
                  while ($subdata = mysqli_fetch_array($subresult)) {
                    $scount = $subdata['count(*)'];
                  }
                  ?>
                  <div class="media-body text-right">
                    <h3 style="font-weight:500;"><?php echo $scount ?></h3>
                    <span>Number of Students</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-speech warning font-large-2 float-left"></i>
                  </div>
                  <?php
                  while ($subno = mysqli_fetch_array($subject)) {
                    $subcount = $subno['count(*)'];
                  }
                  ?>
                  <div class="media-body text-right">
                    <h3><?php echo $subcount; ?></h3>
                    <span>Number of Subjects</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-graph success font-large-2 float-left"></i>
                  </div>
                  <?php
                  while ($preno = mysqli_fetch_array($present)) {
                    $precount = $preno['count(DISTINCT usn)'];
                  }
                  ?>
                  <div class="media-body text-right">
                    <h3><?php 
                    if(($precount)==0){
                      echo "<h4 style='color:red;'>Attendace Not Tacked</h4>";
                    }
                    else
                    echo "<h3>$precount</h3>" ?></h3>
                    <span>Student Precent Today</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-pointer danger font-large-2 float-left"></i>
                  </div>
                  <?php
                  while ($semn = mysqli_fetch_array($semc)) {
                    $sem = $semn['sem'];
                  }
                  ?>
                  <div class="media-body text-right">
                    <h3><?php echo $sem;?></h3>
                    <span>Curent Semister</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                <?php
                  while ($attcount = mysqli_fetch_array($attco)) {
                    $attc = $attcount['count(*)'];
                  }
                  ?>
                  <div class="media-body text-left">
                    <h3 class="danger"><?php echo $attc;?></h3>
                    <span>Total Attendance Tacked</span>
                  </div>
                  <div class="align-self-center">
                    <i class="icon-rocket danger font-large-2 float-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                <?php
                  while ($admincount = mysqli_fetch_array($adminc)) {
                    $admin = $admincount['count(*)'];
                  }
                  ?>
                  <div class="media-body text-left">
                    <h3 class="success"><?php echo $admin;?></h3>
                    <span>Total Admin</span>
                  </div>
                  <div class="align-self-center">
                    <i class="icon-user success font-large-2 float-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- card scetion ends here -->
  </section>

  <script src="js/script.js"></script>

</body>

</html>