<?php
	session_start();
	if(isset($_SESSION['user'])){
        echo 'welcome'.$_SESSION['user'];
		echo '<a href="logout.php?logout">Logout</a>';
	}
	else{
		header("location:index.php");
	}
?>