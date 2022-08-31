<?php
    require_once 'connection.php';
    $sview="select * from students";
    $sviewres = mysqli_query($connect, $sview);
?>