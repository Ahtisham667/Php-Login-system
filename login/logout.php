<?php
 $conn = mysqli_connect("localhost","root","","messenger");
	session_start();
	
	if (!isset($_SESSION['user'])) {
		header("Location: index.php");
	} else if(isset($_SESSION['user'])!="") {
		 mysqli_query($conn,"UPDATE members SET m_status='red' WHERE m_id=".$_SESSION['user']);
		header("Location: home.php");
	}
	
	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: index.php");
		exit;
	}