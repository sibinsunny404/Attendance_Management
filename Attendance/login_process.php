<?php
require_once 'database/connection.php';
if(isset($_POST['login'])){
     if(empty($_POST['uname']) || empty($_POST['pass'])){
        header("location:index1.php?Empty=PLEASE FILL THE FEILDS");
     }
}
else{
    echo "not working";
}


?>