<?php
    require_once 'connection.php';
    // student count
    $query="select count(*) from students";
    $subresult = mysqli_query($connect, $query);

    // subject Count
    $subquery="select count(*) from subjects";
    $subject = mysqli_query($connect, $subquery);

    // attendace present Count
    $date=date('Y-m-d');
    $prequery="select count(DISTINCT usn) from `attendence` where date='$date' and attend='present'";
    $present = mysqli_query($connect, $prequery);

    // sem 
    $semque="select distinct sem from subjects";
    $semc = mysqli_query($connect, $semque);
    
    // admin Count
    $admq="select distinct count(*) from users where auth_type='admin' ";
    $adminc = mysqli_query($connect, $admq);

    // total attendance
    $atque="select count(*) from `attendence` group by date";
    $attco = mysqli_query($connect, $atque);
?>