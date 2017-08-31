<?php

?>
<!DOCTYPE html>
<!-- HG King  September 8, 2016  14207714 -->


<html>

	<head>
        <meta charset="utf-8">
		<title>Color Picker</title>
		<script src="jquery-3.1.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<script src="script.js"></script>
		<script>
		
			$(document).ready(function(){
				
    			$("#Rbutton").click(function(){
        			$.getScript('random.js');
				});
			});
			
			
		</script>	
	</head>
	<body id="bod">
		<div class='group'>
			
			<div id="recDiv">
				<a class='font' href="home.php">Resources</a>
			</div>
		</div>
				
		<div id='colorDiv'>
	
		<br></br>
		
	
		<div  class='center' id='headDiv'>
		
			<p id='header'>RGB COLOR PICKER</p>
			
		</div>	
		
		<div id='Div1' class='group red'>
			<div id='buttonDiv'>
			<button type="button" id='Abutton' onclick="decrementSlider0()" class='font'>Decrement</button>
			</div>
			<div id='sliderDiv'>
				<input type="range" id='slider0' min="0" max="255" oninput="showValue0(this.value)" onchange="showValue0(this.value)"/>
			</div>
			<div id='buttonDiv'>
				<button type="button" id='Abutton' onclick="incrementSlider0()" class='font'>Increment</button>
			</div>
			<br></br>
			<div id='textBoxDiv'>
				
				<input type="number" name="fname" id='textBox0' class='font' value="128">
				<button type="button" id='Abutton' onclick="updateSlider0()" class='font'>Update</button>
			</div>
		</div>
		
		<div id='Div1' class='group green'>
			<div id='buttonDiv'>
			<button type="button" id='Abutton' onclick="decrementSlider1()" class='font'>Decrement</button>
			</div>
			<div id='sliderDiv'>
				<input type="range" id='slider1' min="0" max="255" oninput="showValue1(this.value)" onchange="showValue1(this.value)"/>
			</div>
			<div id='buttonDiv'>
				<button type="button" id='Abutton' onclick="incrementSlider1()" class='font'>Increment</button>
			</div>
			<br></br>
			<div id='textBoxDiv'>
				
				<input type="number" name="fname" id='textBox1' class='font' value="128">
				
				<button type="button" id='Abutton' onclick="updateSlider1()" class='font'>Update</button>
			</div>
		</div>
		
		<div id='Div1' class='group blue'>
			<div id='buttonDiv'>
			<button type="button" id='Abutton' onclick="decrementSlider2()" class='font'>Decrement</button>
			</div>
			<div id='sliderDiv'>
				<input type="range" id='slider2' min="0" max="255" oninput="showValue2(this.value)" onchange="showValue2(this.value)"/>
			</div>
			<div id='buttonDiv'>
				<button type="button" id='Abutton' onclick="incrementSlider2()" class='font'>Increment</button>
			</div>
			<br></br>
			<div id='textBoxDiv'>
				
				<input type="number" name="fname" id='textBox2' class='font' value="128">
				<button type="button" id='Abutton' onclick="updateSlider2()" class='font'>Update</button>
			</div>
		</div>
		<div class='group melChapo'>
			<button type="button" id='Bbutton' onclick="makeBlack()" class='font'>Black</button>
			<button type="button" id='Rbutton'  class='font'>Random</button>
			<button type="button" id='Wbutton' onclick="makeWhite()" class='font'>White</button>
		</div>
		</div>
		
		<div class='center'>
		<p class='font'>Some music to enjoy while picking colors</p>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/5IqDR2WjVl8?list=PLNJU5p38u9YMWkjX_WRCXg3EPToyJxZU5" frameborder="0" allowfullscreen></iframe>
		<br></br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/71ubKHzujy8" frameborder="0" allowfullscreen></iframe>
		<br></br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/ayfv0SOjvRs" frameborder="0" allowfullscreen></iframe>
		</div>
	</body>
</html>


