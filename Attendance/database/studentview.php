<?php
    require_once 'connection.php';
    $query="select count(*) from students";
    $subresult = mysqli_query($connect, $query);
?>