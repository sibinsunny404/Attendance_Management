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
    <link rel="stylesheet" href="css/submitbtt.css">
</head>

<body style="background-color:rgba(0, 200, 200, 0.714)">

</script>
<div class="header_fixed">
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
        <select id="sub" style="border-radius: 15px;height: 35px;width: 193px; background-color:antiquewhite;font-weight:900;border: 2px solid black;" >
        <?php 
        while($subdata = mysqli_fetch_array($subresult)){
        $displaysubData = $subdata['sub_name'];
         ?>
        <option style="border-radius: 20px;" value="<?php echo $displaysubData;?>"><?php echo $displaysubData; ?></option>

        <?php } ?>
        </select>

        <!-- subject Tag ends Here -->
 
  <!-- Select Tag ends Here -->
  <br>
        <br>
        <form method="POST">
    <table style="border-radius:20px ;">
            <thead>
                <tr>
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
                 <input type="radio"  name="attend[<?php echo $data['usn']; ?>]"  value="present" checked> 
                 <span class="check"></span>
                 <label class="container" >A 
                 <input type="radio" name="attend[<?php echo $data['usn']; ?>]"  value="absent">
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
        <br>
       
        <!-- Submit Starts From Here -->
        
        <div class="container">
  <button class="button button-1" name="submit">Submit</button>
  </div>
    <!-- Submit Button Ends Here -->
    </div>
        </form>
        </center>
   


</body>

</html>