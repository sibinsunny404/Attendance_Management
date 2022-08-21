<!-- Add student-->
<?php
  require_once 'sessions.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Add students</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body{
            background: #355C7D;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #C06C84, #6C5B7B, #355C7D);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #C06C84, #6C5B7B, #355C7D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
  </head>
  <body>
  <script>
        window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");

            loader.classList.add("loader--hidden");

            loader.addEventListener("transitionend", () => {
                document.body.removeChild(loader);
            });
        });
    </script>
    <link rel="stylesheet" href="css/loader.css">
    <div class="loader" style="z-index:100;"></div>
    <div style="border:0px;" class="header_fixed">
<center>

<div class="container" style="padding-top: 125px;">
    <div class="card" style="width: 50rem; border-color:crimson;
   background: #BE93C5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #7BC6CC, #BE93C5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #7BC6CC, #BE93C5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
border: radius 10%;
">

  <div class="card-body">
    
  <h2 style="font-style:italic;">Enter The Student Detials</h2>
    <form class="row g-3">
    <form method="POST">
  <div class="col-md-6">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="name" required>
  </div>
  <div class="col-md-6">
    <label for="usn" class="form-label">USN</label>
    <input type="text" class="form-control" id="usn" required>
  </div>
  <div class="col-md-4">
    <label for="class" class="form-label">CLASS</label>
    <select id="class" class="form-select" required>
      <option selected>Choose...</option>
      <option value="mca">MCA</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="sem" class="form-label">SEM</label>
    <select id="sem" class="form-select" required>
      <option selected>Choose...</option>
      <option value="2">2</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="dob" class="form-label">DOB</label>
    <input type="date" class="form-control" id="dob" required>
  </div>
  <div class="col-md-4">
    <label for="dst" class="form-label">District</label>
    <select id="dst" class="form-select" required>
      <option selected>Choose...</option>
      <option value="dk">DK</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="state" class="form-label">State</label>
    <select id="state" class="form-select" required>
      <option selected>Choose...</option>
      <option value="karnataka">Karnataka</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="mbno" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="mbno" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter The full Address" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">ADD</button>
  </div>
</form>
    </div>

    </div>
</div>
</form>
</center>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>