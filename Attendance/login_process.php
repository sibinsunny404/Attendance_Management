<?php
session_start();
require_once 'database/connection.php';
if(isset($_POST['login'])){
     if(empty($_POST['uname']) || empty($_POST['pass'])){
        header("location:index.php?Empty=PLEASE FILL THE FEILDS");
     }
     else{
        $query="select * from admin where admin_uname='".$_POST['uname']."' and passwd='".$_POST['pass']."'";
        $result=mysqli_query($connect,$query);
        if(mysqli_fetch_assoc($result)){
            $_SESSION['user']=$_POST['uname'];
            header("location:admin_dash.php");
        }
        else{
            header("location:index.php?invalid=Enter The Valid Credentials");
        }
    }
}
else{
    echo "not working";
}


?>