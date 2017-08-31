<?php
	// Here we are using sessions to propagate the login
	// http://us3.php.net/manual/en/intro.session.php

    // HTTPS redirect
    if ($_SERVER['HTTPS'] !== 'on') {
		$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("Location: $redirectURL");
		exit;
	}
	
	// http://us3.php.net/manual/en/function.session-start.php
	if(!session_start()) {
		// If the session couldn't start, present an error
		header("Location: error.php");
		exit;
	}
	else  {
	
		
	}
	
	
	// Check to see if the user has already logged in
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	if ($loggedIn) {
		header("Location: ColorPicker.php");
		exit;
	}
	
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
		
        
        // Require the credentials
        //require_once '../db.conf';
        
        $dbhost = 'localhost'; 
		$dbuser = 'root'; 
		$dbpass = ''; 
		$dbname = 'FinalProj'; 

        
        // Connect to the database
        $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        // Check for errors
        if ($mysqli->connect_error) {
            $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
			require "login_form.php";
            exit;
        }
        
        // http://php.net/manual/en/mysqli.real-escape-string.php
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);
        
        
        
        // Build query
		$query = "SELECT * FROM Users WHERE userName = '$username' AND passWord = '$password'";
		
		$result = $mysqli->query($query);
		
		
		
		
        // If there was a result...
        if ($result) {

			while( $row = $result->fetch_assoc() ){
   				//print_r($row); 
   		
   				print "Username: " . $row['userName'] . ' <br></br>Password: ' . $row['password'] . ' <br></br>Name:' . $row['name']; 
   				print "<br></br>\n"; 
   			}        
   			$yeet = $row['name'];
        	
            // How many records were returned?
            $match = $result->num_rows;
			

            // Close the results
            $result->close();
            // Close the DB connection
            $mysqli->close();

            // If there was a match, login
  		    if ($match == 1) {
                $_SESSION['loggedin'] = $username;
                $_SESSION['name']= $yeet;
                header("Location: ColorPicker.php");
                exit;
            }
            else {
                $error = 'Error: Incorrect username or password';
                require "login_form.php";
                exit;
            }
        }
        // Else, there was no result
        else {
          $error = 'Login Error: Please contact the system administrator.';
          require "login_form.php";
          exit;
        }
        
        
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "login_form.php";
        exit;
	}
	
?>