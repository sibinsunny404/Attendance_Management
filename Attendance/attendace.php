<?php
require_once 'database/connection.php';
require_once 'database/data_retrive.php';
$query = "SELECT * FROM students";
$result = mysqli_query($connect, $query);
//Insert Query Starts From Here
// require_once 'connection.php';
// require_once 'data_retrive.php';
if(isset($_POST['submit'])){
    foreach($_POST['attend'] as $ids=>$attend){
       $usn= $_POST["usn"] [$ids]; 
        mysqli_query($connect,"insert into attendence (usn,attend) values ('$usn','$attend')");
        // echo $check_id;
       }
}
mysqli_close($connect);
//Insert Query Ends here
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- radio button style Starts from here -->
    <script>
        function c(){
            
            if(document.getElementById("a").checked){
                document.getElementById("a").style.backgroundColor="red"
            }
        }
    </script>
    <!-- radio button style ends here -->

  </head>
  <body style="background: #FC466B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3F5EFB, #FC466B);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3F5EFB, #FC466B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
<div class="container">
    

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
<div class="loader"></div>
    <!-- sub select start from here -->
      <div class="mb-3">
        <label for="" class="form-label">Select Subject</label>
        <select class="form-control" name="" id="" style="width:fit-content;">
        <?php 
        while($subdata = mysqli_fetch_array($subresult)){
        $displaysubData = $subdata['sub_name'];
         ?>
        <option style="border-radius: 15px;height: 35px;width: 193px; background:transparent;font-weight:900;border: 2px solid blue;text-align:center" value="<?php echo $displaysubData;?>"><?php echo $displaysubData; ?></option>

        <?php } ?>
        </select>
      </div>
      <!-- sub select ends here -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

            <form method="POST">
            <table class="table table-sm table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
              if (mysqli_num_rows($result) > 0) {
                  $sn=1;
                 
              while($data = mysqli_fetch_assoc($result)) {
                $att=0;
                ?>
                        <tr>
                            <td scope="row"></td>
                            <td><?php echo $sn ?></td>
                            <td><?php echo $data['usn']; ?>
                                 <input type="hidden" value="<?php echo $data['usn']; ?>" name="usn[<?php echo $data['usn']; ?>]"></td>
                            <td> <?php echo $data['name']; ?></td>
                            </td>
                            <td>
                            <link rel="stylesheet" href="css/radiobutton.css">
                            <label class="container">P
                             <input type="radio" id="p" onclick="c()"  name="attend[<?php echo $data['usn']; ?>]"  value="present" checked> 
                             <span class="check"></span>
                             <label class="container" >A 
                             <input type="radio" id="a" onclick="c()" name="attend[<?php echo $data['usn']; ?>]"  value="absent">
                             <span class="check" ></span>
                         </label>
                         </label>
                         </td>
                        </tr>
                        <?php
                        $sn++;
                        $att++;
                        }} else { ?>
                         <tr>
                             <td scope="row" colspan="3">No data found</td>
                            </tr>
                        <?php } 

                        ?>
                    </tbody>
            </table>
            <!-- Submit Starts From Here -->
            <link rel="stylesheet" href="css/submitbtt.css">
            <div class="container">
            <button class="button button-1" name="submit">Submit</button>
            </div>
            <!-- Submit Button Ends Here -->
            </div>
            </form>
    </div>
  </body>
</html>