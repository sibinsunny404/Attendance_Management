<?php
require_once 'connection.php';
$tnquery = "SELECT tname FROM teachers";
$tnresult = mysqli_query($connect, $tnquery);

$subquery = "SELECT sub_name FROM subjects ";
$subresult = mysqli_query($connect, $subquery);
?>