<?php
session_start();

if (isset($_SESSION['user'])||isset($_SESSION['student'])) {
} else {
	header("location:index.php");
}
$now = time();
if ($now > $_SESSION['expire']) {
	session_destroy();
	header("location:index.php?sexpired=Session Expired Please Relogin");
} else {
	// nothing planned
}
