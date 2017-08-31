<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
        <h1 id="header">Create an Account</h1>
        <!--
        <?php
            if ($error) {
                print "<div class=\"font\">$error</div>\n";
            }
        ?>
        -->
        <form action="newUser.php" method="POST">
            
            <input type="hidden" name="action" value="make_new">
            
            <div id='container' class="center">
                <label for="username" class='font'>Username:</label>
                <input type="text" id="username" name="username" class="font" required>
            </div>
            
            <div class="center" id='container'>
                <label for="password" class='font'>Password:</label>
                <input type="password" id="password" name="password" class="font" required>
            </div>
            
             <div id='container' class="center">
                <label for="name" class='font'>Name:</label>
                <input type="text" id="name" name="name" class="font" required>
            </div>
            
            <div id='container' class="center">
            	<input type="radio" class='font' name="gender" value="male" checked> <b class='font'>Male</b><br>
  				<input type="radio" class='font' name="gender" value="female"> <b class='font'>Female</b><br>
  				<input type="radio" class='font' name="gender" value="other"> <b class='font'>Other</b>
            </div>
            
            <div id='container' class="center">
                <label for="age" class='font'>Age:</label>
                <input type="number" id="age" min="0" name="age" class="font" required>
            </div>
            <?php
            	if ($error) {
                	print "<div class=\"font\">$error</div>\n";
            	}
        	?>
            
            <div class="center" id='container'>
                <input type="submit" id="Abutton" class='font' value="Submit">
            </div>
            
        </form>
    </div>
    <div class="center">
				
				<a class='font' href="https://ec2-35-161-141-80.us-west-2.compute.amazonaws.com/Final/login.php">Login</a>
	</div>
</body>
</html>