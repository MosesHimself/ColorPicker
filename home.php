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
    	echo "yung money baby no session";
	}
	else  {
		//echo "lmao got that session";
	}
	
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	if ($loggedIn) {
		//echo "fam are you forreal we logged in as " . $_SESSION['name'] . ".<br>";
		//echo "fam are you forreal we logged in";
		//exit;
	}
	else  {
		header("Location: login.php");
		exit;
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resources</title>
	<link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script src="jquery-3.1.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	<script src="script.js"></script>
	<script>
		$(document).ready(function(){
				
        	var num0 = Math.floor(Math.random() * 255);
			var num1 = Math.floor(Math.random() * 255);
			var num2 = Math.floor(Math.random() * 255);
					
			var string = "rgb("+ num0 + "," + num1 + "," + num2 + ")";
				
			document.getElementById("bod").style.backgroundColor = string;
				
		});
	</script>	
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
    
    <style>
    
    	
    
    	#container  {
    		margin: auto;
    		margin-top: 20px;
    		width: 45%;
    		border: 3px solid black;
    		padding: 10px;
			text-align: center;
    		background-color: #bfbfbf;
    		border-radius: 25px;
    		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
    	
    	}
    	
    	h1 { 
    		color: white;
			text-decoration: underline;
			letter-spacing: 3px;
			word-spacing: 10px;
			text-shadow: 4px 4px black;
			font-family: "Courier New", bold;
			font-size: 50px;
			font-weight: bold;
			-webkit-transition: 0.5s;
			transition: 0.5s;
		}
		
		#yeet  {
			border: 3px solid black;
    		//padding: 10px;
			//text-align: center;
    		background-color: #bfbfbf;
    		border-radius: 25px;
    		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
    	}
			
		
		.font  {
				font-family: "Courier New", bold;
				font-size: 22px;
		}
		
		img  {
			height: 100%;
			width: 100%;
			/*
			text-align: center;
			border: 2px solid black;
			margin: auto;
			*/
			
		}
		
    </style>
    
</head>
<body id="bod">
	<div class='group'>
		<div id="linkDiv">
			<?php
				echo "<p class='font'>Logged in as: " . $_SESSION['loggedin'] . ".</p>";
			?>
			<a class='font' href="https://ec2-35-161-141-80.us-west-2.compute.amazonaws.com/Final/logout.php">logout</a>
		</div>
		<div id="recDiv">
			<a class='font' href="https://ec2-35-161-141-80.us-west-2.compute.amazonaws.com/Final/ColorPicker.php">Picker</a>
		</div>
	</div>
    <div id="container">
        <h1>Resources</h1>
    </div>
    
    <br></br>
    <br></br>
    <div class="row">
    	<div class="col-sm-4 font">
    	<?php
		$dir = "images/";
		if (is_dir($dir)){
	  		if ($dh = opendir($dir)){
	    		while (($file = readdir($dh)) !== false){
	    			$pathParts = pathinfo($file);
	    			//echo $pathParts['extension'], "<br>";
	    			if ($pathParts['extension'] == "png")  {
	    				echo "<div id='imgDiv'><img src='images/". $file . "' alt= '". $file . "'></div>";
	    			}
	    			else if ($pathParts['extension'] == "jpg")  {
	    				echo "<div id='imgDiv'><img src='images/". $file . "' alt= '". $file . "'></div><br>";
	    			}
	    			else if ($pathParts['extension'] == "gif")  {
	    				echo "<div id='imgDiv'><img src='images/". $file . "' alt= '". $file . "'></div><br>";
	    			}
	    			else if ($pathParts['extension'] == "jpeg")  {
	    				echo "<div id='imgDiv'><img src='images/". $file . "' alt= '". $file . "'></div><br>";
	    			}
	    			
	    		}
	    	closedir($dh);
			}
		}
		else echo "could not work";
		?>
		</div>
    
  		<div class="col-sm-4 font" id="yeet">"An RGB color space is any additive color space based on the RGB color model. A particular
  		 RGB color space is defined by the three chromaticities of the red, green, and blue additive primaries, and can 
  		 produce any chromaticity that is the triangle defined by those primary colors. The complete specification of an 
  		 RGB color space also requires a white point chromaticity and a gamma correction curve. As of 2007, sRGB is by far the 
  		 most commonly used RGB color space. RGB is an abbreviation for red–green–blue." -Wikipedia
  		</div>
  		
  		<div class="col-sm-4 font">
  			<iframe width="420" height="315" src="https://www.youtube.com/embed/74Q5K5u9Sj4" frameborder="0" allowfullscreen></iframe>
  		</div>
	</div>
</body>
</html>