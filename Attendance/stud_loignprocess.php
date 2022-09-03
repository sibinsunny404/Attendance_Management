<?php
session_start();
require_once 'database/connection.php';

if (isset($_POST['login'])) {
    if (empty($_POST['uname']) || empty($_POST['pass'])) {
        header("location:studentdetilas.php?Empty=PLEASE FILL THE FEILDS");
    } else {
        $hpass=md5($_POST['pass']);
        $sname=$_POST['uname'];
        $uname=preg_replace("/[^a-zA-z0-9]/","",$sname);
        $query = "select * from students where usn='" . $uname . "' and password='" . $hpass . "'";
        $result = mysqli_query($connect, $query);
        
            // if(password_verify($pass,$hpass)){
        if (mysqli_fetch_assoc($result)) {
            // session create
            $_SESSION['student'] = $_POST['uname'];
            // sessin start time
            $_SESSION['start'] = time();
            // tacking session start time
            $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
            header("location:studentdetilas.php");
        } else {
            header("location:stud_login.php?invalid=Enter The Valid Credentials");
        }
    }
    
    }
// }
 else {
    header("location:stud_login.php");
}
