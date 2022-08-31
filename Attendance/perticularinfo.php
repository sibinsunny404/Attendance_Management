<?php
require_once 'database/connection.php';
require_once 'database/studentview.php';


$usn = $_POST['usn'];
echo $usn;

$sview = "select * from students where usn='$usn'";
$sviewres = mysqli_query($connect, $sview);



?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
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
  </style>

</head>

<body>

  <?php
  while ($subdata = mysqli_fetch_array($sviewres)) {
    $name = $subdata['name'];
    $cls = $subdata['class'];
    $sem = $subdata['sem'];
  }

  ?>
  name:=<?php echo $name ?>
  class:=<?php echo $cls ?>
  sem:=<?php echo $sem ?>

<div class="container">
  <div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>