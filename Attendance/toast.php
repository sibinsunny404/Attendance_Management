<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=1024">
  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="css/toast.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body style="background-color: white;">
<div class="notification--wrapper hide" id="openToast">
	<div class="notification--reminder ptb--20 text-center col-12">
		<h3>Detials Recorded Succeessfully<a class="exit--toast" href="javascript:void(0);">Got it.</a></h3>
	</div>    
</div>

<script>
 $(document).ready(function() {
  $("#openToast").toggleClass("hide view");
  
  $('a.exit--toast').click(function() {
      $("#openToast").fadeOut(1000, 0);
  });

  $(document).on('click', function (e) {
    if ($(e.target).closest(".notification--reminder").length === 0) {
        $("#openToast").fadeOut(1000, 0);
    }
});
});
</script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>

