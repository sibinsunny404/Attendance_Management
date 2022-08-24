<?php 
require_once 'connection.php';
// require_once 'data_retrive.php';
if(isset($_POST['submit'])){
    foreach($_POST['attend'] as $ids=>$attend){
       $usn= $_POST["usn"] [$ids]; 
       echo $usn;
        mysqli_query($connect,"insert into attendence (usn,attend) values ('$usn','$attend')");
        // echo $check_id;
       }
       echo "Data added success fully!";
}
mysqli_close($connect);
?>
