<?php
	
	//echo "at the top";
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	//echo $action;
	if ($action == 'make_new') {
		//echo "gonna handle login";
		handle_create();
	} 
	else {
		//echo "need one of them shits boy";
		new_form();
	}
	
	function new_form() {
		//$username = "";
		$error = "";
		require "newUser_form.php";
        exit;
	}
	
	function handle_create() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
		
        
        
        
        $dbhost = 'localhost'; 
		$dbuser = 'root'; 
		$dbpass = ''; 
		$dbname = 'FinalProj'; 

        
        // Connect to the database
        $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        $link= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        // Check for errors
        if ($mysqli->connect_error) {
            $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
			require "newUser_form.php";
            exit;
        }
        
        // http://php.net/manual/en/mysqli.real-escape-string.php
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);
        
        //echo "boy im trying some rowdy shit here";
        
        // Build query
		$query = "SELECT * FROM Users WHERE userName = '$username'";
		
		
        
		// Run the query
		$result = $mysqli->query($query);
		
		//print_r($result);
		
        // If there was a result...
        if ($result) {
        
        $match = $result->num_rows;
			
            // If there was a match, login
  		    if ($match == 1) {
			
				//echo "boy it was found";
            	$error = 'This username is already in use';
            	require "newUser_form.php";
            
				// Close the results
        		$result->close();
            	// Close the DB connection
            	$mysqli->close();
            	exit;
            
        	}
        	// Else, there was no result
        	else {
        		
        		
        		$query = "INSERT INTO Users VALUES (?,?,?,?,?)";
        		//echo "<br></br>";
        		//echo $query;
        		
        		if($statement = mysqli_prepare($link, $query))  {
        			//echo "inside statement";
        			mysqli_stmt_bind_param($statement, "sssss", $_POST['username'], $_POST['password'], $_POST['name'], $_POST['age'], $_POST['gender']);
        			//echo "parameters binded";
        			if(mysqli_stmt_execute($statement))  {
        				//echo "executing statement";
        				$error = 'Your acount has been created';
        				//echo "it happened";
        			}
        			else{
        			 //echo "it didntwork";
        			}
        		}
        		else{ 
        			//echo "couldnt prepare statement";
        		}
        		
        		
          		
          		require "newUser_form.php";
          
				// Close the results
        		$result->close();
            	// Close the DB connection
            	$mysqli->close();
          		exit;
        	}
        
        }
        
        
        
	}