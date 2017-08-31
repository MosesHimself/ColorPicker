<?php
	
	
	if(!session_start()) {
		// If the session couldn't start, present an error
		header("Location: error.php");
		exit;
	}
	else  {
	
		//echo "yung money we got the gas  <br></br>";
	}
	
	if (session_status() == PHP_SESSION_NONE) {
    	//echo "yung money baby no session";
	}
	else  {
		//echo "lmao got that session";
	}
	
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	if ($loggedIn) {
		require "ColorPicker.php";
		exit;
	}
	else  {
		header("Location: login.php");
		exit;
	}
	
?>

