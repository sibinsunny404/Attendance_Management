<?php
session_start();
require_once 'database/connection.php';

if (isset($_POST['login'])) {
    if (empty($_POST['uname']) || empty($_POST['pass'])) {
        header("location:index.php?Empty=PLEASE FILL THE FEILDS");
    } else {
        $hpass=md5($_POST['pass']);
        $sname=$_POST['uname'];
        $uname=preg_replace("/[^a-zA-z0-9]/","",$sname);
        $query = "select * from users where username='" . $uname . "' and password='" . $hpass . "'";
        $result = mysqli_query($connect, $query);
        $row=mysqli_fetch_array($result);
        if($row['auth_type']=='admin'){
             // session create
            $_SESSION['user'] = $_POST['uname'];
            header("location:admin_dash.php");
        }
        elseif($row['auth_type']=='student'){
            // session create
            $_SESSION['student'] = $_POST['uname'];
            header("location:studentdetilas.php");
       }
            
        else {
            header("location:index.php?invalid=Enter The Valid Credentials");
        }
    }
    
}
else {
    header("location:index.php");
}
// sessin start time
$_SESSION['start'] = time();
// tacking session start time
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
// }
