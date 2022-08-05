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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attandance</title>
    <link rel="stylesheet" href="css/style.css" />
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
<div style="border:0px;" class="header_fixed">
    <center>
        <h1>Student Attendense</h1>
        <!-- Select Tag Start Here -->
        <!-- Teacher select Starts here -->
        <!-- <label for="teacher">Choose Faculty Name</label><br>
        <select id="teacher">
        <option></option>
       // <?php while($tndata = mysqli_fetch_array($tnresult)){
       // $displayData = $tndata['tname'];
        // ?>
        <option value="<?php echo $displayData;?>"><?php echo $displayData; ?></option>
                
        //<?php } ?>
        </select> -->
        <!-- Teacher Select tag ends Here -->
        <!-- subject Tag starts here -->

       <h2> <label for="dub">Choose Sub</label></h2><br>
        <select id="sub" style="border-radius: 15px;height: 35px;width: 193px; background:transparent;font-weight:900;border: 2px solid blue;text-align:center" >
        <?php 
        while($subdata = mysqli_fetch_array($subresult)){
        $displaysubData = $subdata['sub_name'];
         ?>
        <option style="border-radius: 15px;height: 35px;width: 193px; background:transparent;font-weight:900;border: 2px solid blue;text-align:center" value="<?php echo $displaysubData;?>"><?php echo $displaysubData; ?></option>

        <?php } ?>
        </select>

        <!-- subject Tag ends Here -->
 
  <!-- Select Tag ends Here -->
  <br>
        <br>
        <form method="POST">
        <div class="table-responsive">
    <table >
            <thead >
                <tr >
                    <th>SN.no</th>
                    <th>USN</th>
                    <th>Username</th>
                    <th>Attended</th>
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
                <td><?php echo $sn ?></td>
                <td><?php echo $data['usn']; ?>
                <input type="hidden" value="<?php echo $data['usn']; ?>" name="usn[<?php echo $data['usn']; ?>]">
            </td>
                
                <td>
                     <?php echo $data['name']; ?>
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
     <td colspan="3">No data found</td>
    </tr>
 <?php } 

 ?>
            </tbody>
        </table>
        </div>
        <br>
       
        <!-- Submit Starts From Here -->
        <link rel="stylesheet" href="css/submitbtt.css">
        <div class="container">
  <button class="button button-1" name="submit">Submit</button>
  </div>
    <!-- Submit Button Ends Here -->
    </div>
        </form>
        </center>
   


</body>

</html>