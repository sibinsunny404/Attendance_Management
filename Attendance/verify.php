<?php

require_once 'database/connection.php';
// usn verification
if(isset($_POST['usn'])){
    $sql="select * from students where usn='".$_POST['usn']."'";
    $result=mysqli_query($connect,$sql);
    // $count=mysqli_num_rows($result);
    if(mysqli_num_rows($result)>0){
      echo '<div style="color:red"><b>Student Already Added</b></div>';
      
    }
    else{
      echo '<div style="color:green"><b>New Student</b></div>';
    }
  }
// subject Code Vrification
if(isset($_POST['subcode'])){
  $sql="select * from subjects where sub_code='".$_POST['subcode']."'";
  $result=mysqli_query($connect,$sql);
  // $count=mysqli_num_rows($result);
  if(mysqli_num_rows($result)>0){
    echo '<div style="color:red"><b>Subject Already Added</b></div>';
    
  }
  else{
    echo '<div style="color:green"><b>New Subject</b></div>';
  }
}
?>
