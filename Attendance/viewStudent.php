<?php
require_once 'sessions.php';
require_once 'database/data_retrive.php';
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
      background-color: #CCACA1;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 1200'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='0' y2='100%25' gradientTransform='rotate(0,768,361)' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23ebebeb'/%3E%3Cstop offset='0.02' stop-color='%23CCACA1'/%3E%3Cstop offset='0.02' stop-color='%23c7c2c0'/%3E%3Cstop offset='0.032' stop-color='%23CCACA1'/%3E%3Cstop offset='0.032' stop-color='%23d9c3bc'/%3E%3Cstop offset='0.056' stop-color='%23CCACA1'/%3E%3Cstop offset='0.056' stop-color='%23bea8a1'/%3E%3Cstop offset='0.07' stop-color='%23CCACA1'/%3E%3Cstop offset='0.07' stop-color='%23544d4a'/%3E%3Cstop offset='0.1' stop-color='%23CCACA1'/%3E%3Cstop offset='0.1' stop-color='%23cec8c7'/%3E%3Cstop offset='0.126' stop-color='%23CCACA1'/%3E%3Cstop offset='0.126' stop-color='%23b2968d'/%3E%3Cstop offset='0.142' stop-color='%23CCACA1'/%3E%3Cstop offset='0.142' stop-color='%23b19a93'/%3E%3Cstop offset='0.159' stop-color='%23CCACA1'/%3E%3Cstop offset='0.159' stop-color='%23c7b7b1'/%3E%3Cstop offset='0.17' stop-color='%23CCACA1'/%3E%3Cstop offset='0.17' stop-color='%23817875'/%3E%3Cstop offset='0.197' stop-color='%23CCACA1'/%3E%3Cstop offset='0.197' stop-color='%23cbb0a7'/%3E%3Cstop offset='0.218' stop-color='%23CCACA1'/%3E%3Cstop offset='0.218' stop-color='%23f5f4f3'/%3E%3Cstop offset='0.239' stop-color='%23CCACA1'/%3E%3Cstop offset='0.239' stop-color='%23c1aea8'/%3E%3Cstop offset='0.254' stop-color='%23CCACA1'/%3E%3Cstop offset='0.254' stop-color='%23e8dfdc'/%3E%3Cstop offset='0.283' stop-color='%23CCACA1'/%3E%3Cstop offset='0.283' stop-color='%23d7d0ce'/%3E%3Cstop offset='0.294' stop-color='%23CCACA1'/%3E%3Cstop offset='0.294' stop-color='%23c4a9a0'/%3E%3Cstop offset='0.305' stop-color='%23CCACA1'/%3E%3Cstop offset='0.305' stop-color='%23cac4c2'/%3E%3Cstop offset='0.332' stop-color='%23CCACA1'/%3E%3Cstop offset='0.332' stop-color='%23baa39b'/%3E%3Cstop offset='0.346' stop-color='%23CCACA1'/%3E%3Cstop offset='0.346' stop-color='%238e7b74'/%3E%3Cstop offset='0.362' stop-color='%23CCACA1'/%3E%3Cstop offset='0.362' stop-color='%23dcd0cd'/%3E%3Cstop offset='0.381' stop-color='%23CCACA1'/%3E%3Cstop offset='0.381' stop-color='%23888381'/%3E%3Cstop offset='0.415' stop-color='%23CCACA1'/%3E%3Cstop offset='0.415' stop-color='%23959393'/%3E%3Cstop offset='0.428' stop-color='%23CCACA1'/%3E%3Cstop offset='0.428' stop-color='%23d5c0b9'/%3E%3Cstop offset='0.442' stop-color='%23CCACA1'/%3E%3Cstop offset='0.442' stop-color='%23ccb4ac'/%3E%3Cstop offset='0.456' stop-color='%23CCACA1'/%3E%3Cstop offset='0.456' stop-color='%23c2b8b5'/%3E%3Cstop offset='0.498' stop-color='%23CCACA1'/%3E%3Cstop offset='0.498' stop-color='%23dcd7d5'/%3E%3Cstop offset='0.511' stop-color='%23CCACA1'/%3E%3Cstop offset='0.511' stop-color='%23817977'/%3E%3Cstop offset='0.532' stop-color='%23CCACA1'/%3E%3Cstop offset='0.532' stop-color='%2384736d'/%3E%3Cstop offset='0.541' stop-color='%23CCACA1'/%3E%3Cstop offset='0.541' stop-color='%23b2aba9'/%3E%3Cstop offset='0.56' stop-color='%23CCACA1'/%3E%3Cstop offset='0.56' stop-color='%23beb7b4'/%3E%3Cstop offset='0.581' stop-color='%23CCACA1'/%3E%3Cstop offset='0.581' stop-color='%23e7dcd9'/%3E%3Cstop offset='0.6' stop-color='%23CCACA1'/%3E%3Cstop offset='0.6' stop-color='%23cdb0a7'/%3E%3Cstop offset='0.618' stop-color='%23CCACA1'/%3E%3Cstop offset='0.618' stop-color='%237e7674'/%3E%3Cstop offset='0.656' stop-color='%23CCACA1'/%3E%3Cstop offset='0.656' stop-color='%23ccb2a9'/%3E%3Cstop offset='0.679' stop-color='%23CCACA1'/%3E%3Cstop offset='0.679' stop-color='%23ece9e8'/%3E%3Cstop offset='0.689' stop-color='%23CCACA1'/%3E%3Cstop offset='0.689' stop-color='%23b3a4a0'/%3E%3Cstop offset='0.720' stop-color='%23CCACA1'/%3E%3Cstop offset='0.720' stop-color='%239f9c9b'/%3E%3Cstop offset='0.734' stop-color='%23CCACA1'/%3E%3Cstop offset='0.734' stop-color='%23dbd0cd'/%3E%3Cstop offset='0.748' stop-color='%23CCACA1'/%3E%3Cstop offset='0.748' stop-color='%23888787'/%3E%3Cstop offset='0.764' stop-color='%23CCACA1'/%3E%3Cstop offset='0.764' stop-color='%23c9b0a7'/%3E%3Cstop offset='0.788' stop-color='%23CCACA1'/%3E%3Cstop offset='0.788' stop-color='%237a6e6a'/%3E%3Cstop offset='0.808' stop-color='%23CCACA1'/%3E%3Cstop offset='0.808' stop-color='%23d4bfb8'/%3E%3Cstop offset='0.831' stop-color='%23CCACA1'/%3E%3Cstop offset='0.831' stop-color='%23bc9f95'/%3E%3Cstop offset='0.856' stop-color='%23CCACA1'/%3E%3Cstop offset='0.856' stop-color='%23cdafa5'/%3E%3Cstop offset='0.872' stop-color='%23CCACA1'/%3E%3Cstop offset='0.872' stop-color='%23aca19d'/%3E%3Cstop offset='0.894' stop-color='%23CCACA1'/%3E%3Cstop offset='0.894' stop-color='%23cfb1a7'/%3E%3Cstop offset='0.914' stop-color='%23CCACA1'/%3E%3Cstop offset='0.914' stop-color='%238e8a89'/%3E%3Cstop offset='0.942' stop-color='%23CCACA1'/%3E%3Cstop offset='0.942' stop-color='%23b29f98'/%3E%3Cstop offset='0.957' stop-color='%23CCACA1'/%3E%3Cstop offset='0.957' stop-color='%237e6f6a'/%3E%3Cstop offset='0.973' stop-color='%23CCACA1'/%3E%3Cstop offset='0.973' stop-color='%23ceb4ac'/%3E%3Cstop offset='1' stop-color='%23CCACA1'/%3E%3Cstop offset='1' stop-color='%23c1b3ae'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' x='0' y='0' width='100%25' height='100%25'/%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
    }

    h1 {
      text-transform: uppercase;
      font-weight: 200;
      text-align: center;
      color: black;
      background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
      display: block;
      border-radius: 10px;
      text-decoration-style: wavy;
    }

    img {
      float: right;
      height: 100px;
      width: 90px;
      text-align: left;
    }

    #card {
      
      background: #83a4d4;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #b6fbff, #83a4d4);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #b6fbff, #83a4d4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
    h5,p{
      color:black;
    }
  </style>
</head>

<body>
  <?php
  require_once 'loader.html';
  ?>

  <div class="container-fluid">
    <h1>Student Detials</h1>
    <div class="row  form-group">
      <?php
      require_once 'database/data_retrive.php';
      while ($subdata = mysqli_fetch_array($viewstures)) {
        $name = $subdata['name'];
        $usn = $subdata['usn'];
      ?>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3" style="padding-bottom: 20px;">
          <div class="card">
            <div class="card-body" id="card">
              <form action="perticularinfo.php" method="POST">
                <img style="border:solid white 1px; border-radius:45px;" src="student_image/<?php echo $subdata['image']; ?>">
                <h5 class="card-title"><?php echo $name ?></h5>
                <p class="card-text" name="name"><?php echo $usn ?></p>
                <input type="hidden" name="usn" value="<?php echo $usn ?>">
                <button class="btn btn-primary" type="submit">View</button>
              </form>
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