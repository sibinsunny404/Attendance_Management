<?php
    require_once 'connection.php';
    $subsel="select * from students";
    $subres = mysqli_query($connect, $subsel);
?>