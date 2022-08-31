<?php
require_once 'database/connection.php';
require_once 'database/studentview.php';


$usn = $_POST['usn'];

$sview = "select * from students where usn='$usn'";
$sviewres = mysqli_query($connect, $sview);



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
      background: #83a4d4;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #b6fbff, #83a4d4);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #b6fbff, #83a4d4);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .card-title,
    .card-text {
      text-align: left;
    }
  </style>

</head>

<body>

  <?php
  while ($subdata = mysqli_fetch_array($sviewres)) {
    $name = $subdata['name'];
    $cls = $subdata['class'];
    $sem = $subdata['sem'];
    $pic = $subdata['image'];
    $dob = $subdata['dob'];
    $mbno = $subdata['mbno'];
    $district = $subdata['district'];
    $state = $subdata['state'];
    $addres = $subdata['address'];
  }

  ?>
  <center>
    <div style="padding-top: 50px;">
      <div class="container">
        <div class="card mb-3" style="max-width: 540px; padding-top: 30px; background-color:transparent;border:solid black 5px; border-radius:45px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img style="padding: 20px; text-align:center; border:solid white 1px;height:200px;width:200px;border-radius:45px;" class="img-fluid rounded-start" src="student_image/<?php echo $pic; ?>">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title"><?php echo $name ?></h3>
                <h5 class="card-text">USN:<?php echo $usn ?></h5>
                <h5 class="card-text">Class:<?php echo $cls ?></h5>
                <h5 class="card-text">Sem:<?php echo $sem ?></h5>
                <h5 class="card-text">DOB:<?php echo $dob; ?></h5>
                <h5 class="card-text">PhNo:<?php echo $mbno; ?></h5>
                <h5 class="card-text">District:<?php echo $district; ?></h5>
                <h5 class="card-text">State:<?php echo $state; ?></h5>
                <h5 class="card-text">Address:<?php echo $addres; ?></h5>
              </div>
            </div>
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