<!DOCTYPE html>
<html>
<head>
	<title>Database Login</title>
	<link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script src="jquery-3.1.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
    <script>
		$(document).ready(function(){
				
        	var num0 = Math.floor(Math.random() * 255);
			var num1 = Math.floor(Math.random() * 255);
			var num2 = Math.floor(Math.random() * 255);
					
			var string = "rgb("+ num0 + "," + num1 + "," + num2 + ")";
				
			document.getElementById("bod").style.backgroundColor = string;
				
		});
	</script>	
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    
    	
			
    	input[type=text] {
   				text-align: center;
				width: 50%;
    			border: 3px solid #fafafa;
    			-webkit-transition: 0.5s;
    			transition: 0.5s;
    			outline: none;
    			
    			background-color: #ccc;
			}
			input[type=password] {
   				text-align: center;
				width: 50%;
    			border: 3px solid #fafafa;
    			-webkit-transition: 0.5s;
    			transition: 0.5s;
    			outline: none;
    			
    			background-color: #ccc;
			}
		
			input[type=password]:focus {
    			border: 3px solid #555;
    			background-color: white;
			}
			
			input[type=text]:focus {
    			border: 3px solid #555;
    			background-color: white;
			}
    
    	
    		#container  {
    		
    		padding: 10px;
			
    		}
    	
    	
    	
		
    </style>
    
</head>
<body id="bod">
	

    <div class="center" id='container'>
        <h1 id="header">Login</h1>
        
        <?php
            if ($error) {
                print "<div class=\"font\">$error</div>\n";
            }
        ?>
        
        <form action="login.php" method="POST">
            
            <input type="hidden" name="action" value="do_login">
            
            <div id='container' class="center">
                <label for="username" class='font'>Username:</label>
                <input type="text" id="username" name="username" class="font" autofocus value="<?php print $username; ?>">
            </div>
            
            <div class="center" id='container'>
                <label for="password" class='font'>Password:</label>
                <input type="password" id="password" name="password" class="font">
            </div>
            
            <div class="center" id='container'>
                <input type="submit" id="Abutton" class='font' value="Submit">
            </div>
        </form>
    </div>
    
    <div class="center">
				
				<a class='font' href="https://ec2-35-161-141-80.us-west-2.compute.amazonaws.com/Final/newUser.php">Create Account</a>
	</div>
</body>
</html>