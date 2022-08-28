<?php
require_once 'connection.php';
// $tnquery = "SELECT tname FROM teachers";
// $tnresult = mysqli_query($connect, $tnquery);

$subquery = "SELECT sub_name,sem,sub_code FROM subjects ";
$subresult = mysqli_query($connect, $subquery);

$viewStu = "select * from students";
$viewstures = mysqli_query($connect,$viewStu);