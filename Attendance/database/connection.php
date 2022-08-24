<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="student";

//connection to the database
$connect=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if($connect){
   
}
else{
    die("connection not done yet");
}
