<?php
require_once 'database/data_retrive.php';
require_once 'sessions.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=1024">
  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    p {
      text-transform: uppercase;
    }

    body {
      background-color: #8BC6EC;
      background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
    }

    h1 {
      text-transform: uppercase;
      font-weight: 200;
      text-align: center;
      color:black;
      background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
      display: block;
      border-radius: 10px;
      text-decoration-style: wavy;
    }
    img{
      float: right; height: 100px;width: 90px;
      text-align: left;
    }
  </style>
</head>
<body>
<?php
    require_once 'loader.html';
  ?>
  <div class="container">
    <h1>Student Detials</h1>
    <div class="row mt-3 form-group">
      <?php
      while ($subdata = mysqli_fetch_array($viewstures)) {
        $name = $subdata['name'];
      ?>
        <div class="col-3" style="padding-bottom: 20px;">
          <div class="card">
            <div class="card-body">
            <img src="student_image/<?php echo $subdata['image']; ?>">
              <h5 class="card-title"><?php echo $name ?></h5>
              <p class="card-text"><?php echo $subdata['usn'] ?></p>
              <a href="#" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>