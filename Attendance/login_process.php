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
        $query = "select * from admin where admin_uname='" . $uname . "' and passwd='" . $hpass . "'";
        $result = mysqli_query($connect, $query);
        
            // if(password_verify($pass,$hpass)){
        if (mysqli_fetch_assoc($result)) {
            // session create
            $_SESSION['user'] = $_POST['uname'];
            // sessin start time
            $_SESSION['start'] = time();
            // tacking session start time
            $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
            header("location:admin_dash.php");
        } else {
            header("location:index.php?invalid=Enter The Valid Credentials");
        }
    }
    
    }
// }
 else {
    header("location:index.php");
}
