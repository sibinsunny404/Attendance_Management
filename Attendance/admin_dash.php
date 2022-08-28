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
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
      <div class="logo_name"></div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="#">
        <i class='bx bxs-edit'></i>
          <span class="links_name">Take Attendance</span>
        </a>
        <span class="tooltip">Attandance</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-chat'></i>
          <span class="links_name">Messages</span>
        </a>
        <span class="tooltip">Messages</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Analytics</span>
        </a>
        <span class="tooltip">Analytics</span>
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
          <img src="profile.jpg" alt="profileImg">
          <div class="name_job">
            <div class="name">Prem Shahi</div>
            <div class="job">Web designer</div>
          </div>
        </div>
        <i class='bx bx-log-out' id="log_out"></i>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="text">Dashboard</div>
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
                  <div class="media-body text-right">
                    <h3>156</h3>
                    <span>New Comments</span>
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
                  <div class="media-body text-right">
                    <h3>64.89 %</h3>
                    <span>Bounce Rate</span>
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
                  <div class="media-body text-right">
                    <h3>423</h3>
                    <span>Total Visits</span>
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
                  <div class="media-body text-left">
                    <h3 class="danger">278</h3>
                    <span>New Projects</span>
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
                  <div class="media-body text-left">
                    <h3 class="success">156</h3>
                    <span>New Clients</span>
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