<?php
session_start();

if (isset($_SESSION['student'])) {
} else {
	header("location:stud_login.php");
}
$now = time();
if ($now > $_SESSION['expire']) {
	session_destroy();
	header("location:stud_login.php?sexpired=Session Expired Please Relogin");
} else {
	// nothing planned
}
