<!-- Add student-->
<?php
require_once 'loader.html';
require_once 'sessions.php';
require_once 'database/connection.php';
if (isset($_POST['add'])) {
  $name = $_POST["uname"];
  $usn = $_POST["usn"];
  $cls = $_POST["class"];
  $sem = $_POST["sem"];
  $dstr = $_POST["dst"];
  $dob = $_POST["dob"];
  $state = $_POST["state"];
  $mbno = $_POST["mbno"];
  $add = $_POST["add"];
  $password = md5($usn);
  $auth = "student";
  try {
  move_uploaded_file($_FILES["image"]["tmp_name"], "student_image/" . $_FILES["image"]["name"]);
  $file = $_FILES["image"]["name"];
  mysqli_query($connect, "insert into students (usn,name,class,sem,dob,mbno,district,state,address,image) 
        values ('$usn','$name','$cls','$sem','$dob','$mbno','$dstr','$state','$add','$file')");
  mysqli_query($connect, "insert into users (`username`, `password`, `auth_type`) values('$usn','$password','$auth')");
  header("location:addstudent.php?sucess=Student Detials Added Succeessfully");
} catch (\Throwable $th) {
  echo '<center><div class="alert alert-danger d-flex align-items-center" role="alert" style="width:50%;">
  <svg  class="bi flex-shrink-0 me-2" width="25" height="25" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    Duplicte Entry Not Allowed
  </div>
</div></center>';
   }
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Add students</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <!-- /<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <meta name="viewport" content="width=1024">
  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    body {
      background-color: #FFB9AA;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='100%25' gradientTransform='rotate(195,768,361)'%3E%3Cstop offset='0' stop-color='%23FFB9AA'/%3E%3Cstop offset='1' stop-color='%2311FFFC'/%3E%3C/linearGradient%3E%3Cpattern patternUnits='userSpaceOnUse' id='b' width='300' height='250' x='0' y='0' viewBox='0 0 1080 900'%3E%3Cg fill-opacity='0.08'%3E%3Cpolygon fill='%23444' points='90 150 0 300 180 300'/%3E%3Cpolygon points='90 150 180 0 0 0'/%3E%3Cpolygon fill='%23AAA' points='270 150 360 0 180 0'/%3E%3Cpolygon fill='%23DDD' points='450 150 360 300 540 300'/%3E%3Cpolygon fill='%23999' points='450 150 540 0 360 0'/%3E%3Cpolygon points='630 150 540 300 720 300'/%3E%3Cpolygon fill='%23DDD' points='630 150 720 0 540 0'/%3E%3Cpolygon fill='%23444' points='810 150 720 300 900 300'/%3E%3Cpolygon fill='%23FFF' points='810 150 900 0 720 0'/%3E%3Cpolygon fill='%23DDD' points='990 150 900 300 1080 300'/%3E%3Cpolygon fill='%23444' points='990 150 1080 0 900 0'/%3E%3Cpolygon fill='%23DDD' points='90 450 0 600 180 600'/%3E%3Cpolygon points='90 450 180 300 0 300'/%3E%3Cpolygon fill='%23666' points='270 450 180 600 360 600'/%3E%3Cpolygon fill='%23AAA' points='270 450 360 300 180 300'/%3E%3Cpolygon fill='%23DDD' points='450 450 360 600 540 600'/%3E%3Cpolygon fill='%23999' points='450 450 540 300 360 300'/%3E%3Cpolygon fill='%23999' points='630 450 540 600 720 600'/%3E%3Cpolygon fill='%23FFF' points='630 450 720 300 540 300'/%3E%3Cpolygon points='810 450 720 600 900 600'/%3E%3Cpolygon fill='%23DDD' points='810 450 900 300 720 300'/%3E%3Cpolygon fill='%23AAA' points='990 450 900 600 1080 600'/%3E%3Cpolygon fill='%23444' points='990 450 1080 300 900 300'/%3E%3Cpolygon fill='%23222' points='90 750 0 900 180 900'/%3E%3Cpolygon points='270 750 180 900 360 900'/%3E%3Cpolygon fill='%23DDD' points='270 750 360 600 180 600'/%3E%3Cpolygon points='450 750 540 600 360 600'/%3E%3Cpolygon points='630 750 540 900 720 900'/%3E%3Cpolygon fill='%23444' points='630 750 720 600 540 600'/%3E%3Cpolygon fill='%23AAA' points='810 750 720 900 900 900'/%3E%3Cpolygon fill='%23666' points='810 750 900 600 720 600'/%3E%3Cpolygon fill='%23999' points='990 750 900 900 1080 900'/%3E%3Cpolygon fill='%23999' points='180 0 90 150 270 150'/%3E%3Cpolygon fill='%23444' points='360 0 270 150 450 150'/%3E%3Cpolygon fill='%23FFF' points='540 0 450 150 630 150'/%3E%3Cpolygon points='900 0 810 150 990 150'/%3E%3Cpolygon fill='%23222' points='0 300 -90 450 90 450'/%3E%3Cpolygon fill='%23FFF' points='0 300 90 150 -90 150'/%3E%3Cpolygon fill='%23FFF' points='180 300 90 450 270 450'/%3E%3Cpolygon fill='%23666' points='180 300 270 150 90 150'/%3E%3Cpolygon fill='%23222' points='360 300 270 450 450 450'/%3E%3Cpolygon fill='%23FFF' points='360 300 450 150 270 150'/%3E%3Cpolygon fill='%23444' points='540 300 450 450 630 450'/%3E%3Cpolygon fill='%23222' points='540 300 630 150 450 150'/%3E%3Cpolygon fill='%23AAA' points='720 300 630 450 810 450'/%3E%3Cpolygon fill='%23666' points='720 300 810 150 630 150'/%3E%3Cpolygon fill='%23FFF' points='900 300 810 450 990 450'/%3E%3Cpolygon fill='%23999' points='900 300 990 150 810 150'/%3E%3Cpolygon points='0 600 -90 750 90 750'/%3E%3Cpolygon fill='%23666' points='0 600 90 450 -90 450'/%3E%3Cpolygon fill='%23AAA' points='180 600 90 750 270 750'/%3E%3Cpolygon fill='%23444' points='180 600 270 450 90 450'/%3E%3Cpolygon fill='%23444' points='360 600 270 750 450 750'/%3E%3Cpolygon fill='%23999' points='360 600 450 450 270 450'/%3E%3Cpolygon fill='%23666' points='540 600 630 450 450 450'/%3E%3Cpolygon fill='%23222' points='720 600 630 750 810 750'/%3E%3Cpolygon fill='%23FFF' points='900 600 810 750 990 750'/%3E%3Cpolygon fill='%23222' points='900 600 990 450 810 450'/%3E%3Cpolygon fill='%23DDD' points='0 900 90 750 -90 750'/%3E%3Cpolygon fill='%23444' points='180 900 270 750 90 750'/%3E%3Cpolygon fill='%23FFF' points='360 900 450 750 270 750'/%3E%3Cpolygon fill='%23AAA' points='540 900 630 750 450 750'/%3E%3Cpolygon fill='%23FFF' points='720 900 810 750 630 750'/%3E%3Cpolygon fill='%23222' points='900 900 990 750 810 750'/%3E%3Cpolygon fill='%23222' points='1080 300 990 450 1170 450'/%3E%3Cpolygon fill='%23FFF' points='1080 300 1170 150 990 150'/%3E%3Cpolygon points='1080 600 990 750 1170 750'/%3E%3Cpolygon fill='%23666' points='1080 600 1170 450 990 450'/%3E%3Cpolygon fill='%23DDD' points='1080 900 1170 750 990 750'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect x='0' y='0' fill='url(%23b)' width='100%25' height='100%25'/%3E%3C/svg%3E");
      background-attachment: fixed;
      background-size: cover;
    }

    [type="file"] {
      /* Style the color of the message that says 'No file chosen' */
      color: black;
    }

    [type="file"]::-webkit-file-upload-button {
      background: aqua;
      border: 2px solid blanchedalmond;
      border-radius: 10px;
      color: black;
      cursor: pointer;
      font-size: 12px;
      outline: none;
      padding: 10px 25px;
      text-transform: uppercase;
      transition: all 1s ease;
    }

    [type="file"]::-webkit-file-upload-button:hover {
      background: #fff;
      border: 2px solid #535353;
      color: #000;
    }

    /* GENERAL STYLING OF PAGE — NOT APPLICABLE TO EXAMPLE */
    body {
      padding: 20px;
    }

  </style>
<link rel="stylesheet" href="css/sidebar.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

  <center>

    <form method="POST" enctype="multipart/form-data">
      <div class="container" style="padding-top: 125px;">
        <div class="card" style="width: 50rem; 
        background-color: #8EC5FC;
background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
box-shadow:0 4px 8px 0 rgba(0,0,0,2);
">

          <div class="card-body">
            <?php
            if (@$_GET['sucess'] == true) {
            ?>
              <div class="col-md-6" style="background-color:#EFEEE5; border-radius: 10px;color:#274546;font-weight:500;" class=" text-backgro text-success text-center my-3"><?php echo $_GET['sucess'] ?></div>
            <?php
            }
            ?>
            <h2 style="font-style:italic;">Enter The Student Detials</h2>

            <div class="row g-3">

              <div class="col-md-6">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="uname" required>
              </div>
              <div class="col-md-6">
                <label for="usn" class="form-label">USN</label>
                <input type="text" class="form-control" id="usn" name="usn" required>
                <span id="avl"></span>
              </div>
              <div class="col-md-4">
                <label for="class" class="form-label">CLASS</label>
                <select id="class" class="form-select" name="class" required>
                  <option value="mca">MCA</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="sem" class="form-label">SEM</label>
                <select id="sem" class="form-select" name="sem" required>
                  <option value="2">2</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="dob" class="form-label">DOB</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
              </div>
              <div class="col-md-4">
                <label for="dst" class="form-label">District</label>
                <select id="dst" class="form-select" name="dst" required>
                  <option value="dk">DK</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="state" class="form-label">State</label>
                <select id="state" class="form-select" name="state" required>
                  <option value="karnataka">Karnataka</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="mbno" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="mbno" name="mbno" required>
              </div>
              <div class="col-6">
                <label for="add" class="form-label">Address</label>
                <input type="text" class="form-control" id="add" placeholder="Enter The full Address" name="add" required>
              </div>
              <div class="col-6">
                <label for="image" class="form-label">Student Image</label>
                <input type="file" name="image" id="image" value="" accept="image/x-png,image/gif,image/jpeg" required>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary" id="submit" name="submit" onclick="ad()">ADD</button>
              </div>
            </div>
          </div>

        </div>
      </div>

  </center>
  </form>




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

<script src="jQuery/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $("#usn").blur(function() {
      var susn = $(this).val();
      $.ajax({
        url: "verify.php",
        method: "POST",
        data: {
          usn: susn
        },
        dataType: "text",
        success: function(html) {
          $('#avl').html(html);
        }
      })
    })
  })
</script>

</html>