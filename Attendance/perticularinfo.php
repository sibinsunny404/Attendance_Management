<?php
require_once 'sessions.php';
require_once 'database/connection.php';
require_once 'database/studentview.php';


$usn = $_POST['usn'];

$sview = "select * from students where usn='$usn'";
$sviewres = mysqli_query($connect, $sview);

$subsel = "SELECT DISTINCT subject FROM `attendence` WHERE usn='$usn'";
$subres = mysqli_query($connect, $subsel);



?>
<!doctype html>
<html lang="en">

<head>
  <title><?php echo $usn ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <style>
    body {
      background-color: #FFB9AA;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='100%25' gradientTransform='rotate(195,768,361)'%3E%3Cstop offset='0' stop-color='%23FFB9AA'/%3E%3Cstop offset='1' stop-color='%2311FFFC'/%3E%3C/linearGradient%3E%3Cpattern patternUnits='userSpaceOnUse' id='b' width='300' height='250' x='0' y='0' viewBox='0 0 1080 900'%3E%3Cg fill-opacity='0.08'%3E%3Cpolygon fill='%23444' points='90 150 0 300 180 300'/%3E%3Cpolygon points='90 150 180 0 0 0'/%3E%3Cpolygon fill='%23AAA' points='270 150 360 0 180 0'/%3E%3Cpolygon fill='%23DDD' points='450 150 360 300 540 300'/%3E%3Cpolygon fill='%23999' points='450 150 540 0 360 0'/%3E%3Cpolygon points='630 150 540 300 720 300'/%3E%3Cpolygon fill='%23DDD' points='630 150 720 0 540 0'/%3E%3Cpolygon fill='%23444' points='810 150 720 300 900 300'/%3E%3Cpolygon fill='%23FFF' points='810 150 900 0 720 0'/%3E%3Cpolygon fill='%23DDD' points='990 150 900 300 1080 300'/%3E%3Cpolygon fill='%23444' points='990 150 1080 0 900 0'/%3E%3Cpolygon fill='%23DDD' points='90 450 0 600 180 600'/%3E%3Cpolygon points='90 450 180 300 0 300'/%3E%3Cpolygon fill='%23666' points='270 450 180 600 360 600'/%3E%3Cpolygon fill='%23AAA' points='270 450 360 300 180 300'/%3E%3Cpolygon fill='%23DDD' points='450 450 360 600 540 600'/%3E%3Cpolygon fill='%23999' points='450 450 540 300 360 300'/%3E%3Cpolygon fill='%23999' points='630 450 540 600 720 600'/%3E%3Cpolygon fill='%23FFF' points='630 450 720 300 540 300'/%3E%3Cpolygon points='810 450 720 600 900 600'/%3E%3Cpolygon fill='%23DDD' points='810 450 900 300 720 300'/%3E%3Cpolygon fill='%23AAA' points='990 450 900 600 1080 600'/%3E%3Cpolygon fill='%23444' points='990 450 1080 300 900 300'/%3E%3Cpolygon fill='%23222' points='90 750 0 900 180 900'/%3E%3Cpolygon points='270 750 180 900 360 900'/%3E%3Cpolygon fill='%23DDD' points='270 750 360 600 180 600'/%3E%3Cpolygon points='450 750 540 600 360 600'/%3E%3Cpolygon points='630 750 540 900 720 900'/%3E%3Cpolygon fill='%23444' points='630 750 720 600 540 600'/%3E%3Cpolygon fill='%23AAA' points='810 750 720 900 900 900'/%3E%3Cpolygon fill='%23666' points='810 750 900 600 720 600'/%3E%3Cpolygon fill='%23999' points='990 750 900 900 1080 900'/%3E%3Cpolygon fill='%23999' points='180 0 90 150 270 150'/%3E%3Cpolygon fill='%23444' points='360 0 270 150 450 150'/%3E%3Cpolygon fill='%23FFF' points='540 0 450 150 630 150'/%3E%3Cpolygon points='900 0 810 150 990 150'/%3E%3Cpolygon fill='%23222' points='0 300 -90 450 90 450'/%3E%3Cpolygon fill='%23FFF' points='0 300 90 150 -90 150'/%3E%3Cpolygon fill='%23FFF' points='180 300 90 450 270 450'/%3E%3Cpolygon fill='%23666' points='180 300 270 150 90 150'/%3E%3Cpolygon fill='%23222' points='360 300 270 450 450 450'/%3E%3Cpolygon fill='%23FFF' points='360 300 450 150 270 150'/%3E%3Cpolygon fill='%23444' points='540 300 450 450 630 450'/%3E%3Cpolygon fill='%23222' points='540 300 630 150 450 150'/%3E%3Cpolygon fill='%23AAA' points='720 300 630 450 810 450'/%3E%3Cpolygon fill='%23666' points='720 300 810 150 630 150'/%3E%3Cpolygon fill='%23FFF' points='900 300 810 450 990 450'/%3E%3Cpolygon fill='%23999' points='900 300 990 150 810 150'/%3E%3Cpolygon points='0 600 -90 750 90 750'/%3E%3Cpolygon fill='%23666' points='0 600 90 450 -90 450'/%3E%3Cpolygon fill='%23AAA' points='180 600 90 750 270 750'/%3E%3Cpolygon fill='%23444' points='180 600 270 450 90 450'/%3E%3Cpolygon fill='%23444' points='360 600 270 750 450 750'/%3E%3Cpolygon fill='%23999' points='360 600 450 450 270 450'/%3E%3Cpolygon fill='%23666' points='540 600 630 450 450 450'/%3E%3Cpolygon fill='%23222' points='720 600 630 750 810 750'/%3E%3Cpolygon fill='%23FFF' points='900 600 810 750 990 750'/%3E%3Cpolygon fill='%23222' points='900 600 990 450 810 450'/%3E%3Cpolygon fill='%23DDD' points='0 900 90 750 -90 750'/%3E%3Cpolygon fill='%23444' points='180 900 270 750 90 750'/%3E%3Cpolygon fill='%23FFF' points='360 900 450 750 270 750'/%3E%3Cpolygon fill='%23AAA' points='540 900 630 750 450 750'/%3E%3Cpolygon fill='%23FFF' points='720 900 810 750 630 750'/%3E%3Cpolygon fill='%23222' points='900 900 990 750 810 750'/%3E%3Cpolygon fill='%23222' points='1080 300 990 450 1170 450'/%3E%3Cpolygon fill='%23FFF' points='1080 300 1170 150 990 150'/%3E%3Cpolygon points='1080 600 990 750 1170 750'/%3E%3Cpolygon fill='%23666' points='1080 600 1170 450 990 450'/%3E%3Cpolygon fill='%23DDD' points='1080 900 1170 750 990 750'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect x='0' y='0' fill='url(%23b)' width='100%25' height='100%25'/%3E%3C/svg%3E");
      background-attachment: fixed;
      background-size: cover;
    }

    .card-title,
    .card-text {
      text-align: left;
    }

    h2 {
      text-transform: uppercase;
      font-weight: 200;
      text-align: center;
      color: black;
      background-color: aliceblue;
      display: block;
      border-radius: 10px;
      text-decoration-style: wavy;

    }

    #card {
      background-color: #FFFCF6;
    }

    #card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 2);
    }

    progress {
      width: 100%;
      height: 30px;
    }

    h3 {
      text-transform: uppercase;
      /* color: #AFC9DC; */
      font-weight: 500;
    }

    .msg {
      /* background-color: beige; */
      color: #006A6A;
      display: inline-block;
      background-blend-mode: darken;

    }
  </style>

</head>

<body>

  <?php
  require_once 'loader.html';
  while ($subdata = mysqli_fetch_array($sviewres)) {
    $name = $subdata['name'];
    $cls = $subdata['class'];
    $sem = $subdata['sem'];
    $pic = $subdata['image'];
    $dob = $subdata['dob'];
    $fdate = date('d.m.Y', strtotime($dob));
    $mbno = $subdata['mbno'];
    $district = $subdata['district'];
    $state = $subdata['state'];
    $addres = $subdata['address'];
  }

  ?>
  <center>
    <!-- personal card starts here -->
    <div style="padding-top: 50px;">
      <div class="container">
        <h3><kbd> Personal Detials</kbd></h3>
        <!-- <div class="shadow-lg p-3 mb-5  rounded " style="max-width:50%;"> -->
        <div class="shadow-lg p-3 mb-5" class="card mb-3" style="max-width: 540px; padding-top: 30px; 
       background: #7F7FD5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        border:solid black 1px; border-bottom-right-radius:50px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img style="padding: 20px; text-align:center; border:solid white 1px;height:180px;width:200px;border-radius:45px;" class="img-fluid rounded-start" src="student_image/<?php echo $pic; ?>">
            </div>
            <div class="col-md-8">
              <div class="card-body" style="padding-left: 20px;">
                <h3 class="card-title"><?php echo $name ?></h3>
                <h5 style="text-transform:uppercase;" class="card-text"><code>USN:</code><?php echo $usn ?></h5>
                <h5 style="text-transform:uppercase;" class="card-text"><code>Class:</code><?php echo $cls ?></h5>
                <h5 class="card-text"><code>Sem:</code><?php echo $sem ?></h5>
                <h5 class="card-text"><code>DOB:</code><?php echo $fdate; ?></h5>
                <h5 class="card-text"><code>PhNo:</code><?php echo $mbno; ?></h5>
                <h5 style="text-transform:uppercase;" class="card-text"><code>District:</code><?php echo $district; ?></h5>
                <h5 style="text-transform:capitalize;" class="card-text"><code>State:</code><?php echo $state; ?></h5>
                <h5 style="text-transform:capitalize;" class="card-text"><code>Address:</code><?php echo $addres; ?></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </div>
    <!-- personal card ends here -->
    <h2>Attendance Status</h2>
    <div style="padding-bottom: 20px;width:55%;">
      <div class="card">
        <div class="card-body" id="card">
          <?php
          if (mysqli_num_rows($subres) > 0) {
            while ($sbjres = mysqli_fetch_array($subres)) {
              $subject = $sbjres['subject'];
              $atcal = "SELECT count(*) FROM `attendence` WHERE subject='$subject' AND  usn='$usn'";
              $atres = mysqli_query($connect, $atcal);
              while ($attres = mysqli_fetch_array($atres)) {
                $subcount = $attres['count(*)'];
                $atcal = "SELECT count(*) FROM `attendence` WHERE subject='$subject' AND  usn='$usn' and attend='present'";
                $atres = mysqli_query($connect, $atcal);
                while ($attres = mysqli_fetch_array($atres)) {
                  $present = $attres['count(*)'];
                  $perdisplay = ($present / $subcount) * 100;
          ?>
                  <fieldset style="border: solid black 1px;padding: 15px;">
                    <h5 class="card-title"><b><u><?php echo $subject ?></u></b></h5>
                    <?php if ($perdisplay < 75) {
                      echo '<h5 style="color:red;padding: -10px;" class="msg">Attendance Shortage🙁</h5>';
                    } elseif ($perdisplay < 100) {
                      echo '<h5 style="color:green;"class="msg">Attendance Are Clear😊</h5>';
                    } else {
                      echo '<h5 style="color:green;"class="msg">Full Attendance🤩</h5>';
                    } ?>
                    <p class="card-text"><?php


                                          if ($perdisplay == 0) {
                                            echo '<p style="color:red;">Not Attended For A Class </p>';
                                            echo '<b style="float: left;">' . round($perdisplay, 2) . '%</b>';
                                          } else {
                                            echo "<b>" . round($perdisplay, 2) . "%</b>";
                                          }

                                          ?>
                      <progress id="prog" value="<?php echo $present ?>" max="<?php echo $subcount ?>"></progress>
                  </fieldset>
              <?php
                }
              }
              ?>
              </p>


          <?php
            }
          } else {
            echo "<h2 style='color:red; background-color:black;padding:20px;'>None Of The Class Attended By Student </h2>";
          }
          ?>

        </div>
      </div>
    </div>
    </div>
  </center>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>