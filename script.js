			function componentToHex(c) {
			    var hex = c.toString(16);
			    return hex.length == 1 ? "0" + hex : hex;
			}

			function rgbToHex(r, g, b) {
			    return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
			}

			
			function updateColor()  {
				var red = document.getElementById("slider0").value;
				var blue = document.getElementById("slider1").value;
				var green = document.getElementById("slider2").value;
				var string = "rgb("+ red + "," + blue + "," + green + ")";
				//document.getElementById("colorDiv").style.backgroundColor = string;
				document.getElementById("bod").style.backgroundColor = string;
				document.getElementById("header").style.textShadow = "4px 4px 4px "+ string;
				
				
				
				var i = 0;
				for(i = 0; i < 9; i++)  {
					
					document.getElementsByTagName("button")[i].style.backgroundColor = string;
				}
				for(i = 0; i < 3; i++)  {
					//document.getElementsByClassName("group")[i].style.borderColor = string;
				}
				/*
				document.getElementById("textBox0").style.backgroundColor = string;
				document.getElementById("textBox1").style.backgroundColor = string;
				document.getElementById("textBox2").style.backgroundColor = string;
				*/
				//document.getElementById("headDiv").style.borderColor = string; 
				
			}
			
			function showValue0(newValue)  {
				document.getElementById("textBox0").value = newValue;
				updateColor();
			}
				
			function updateSlider0()  {
				
				var value = document.getElementById("textBox0").value;
				
				
				if(value > 255)  {
					value = 255;
				}
				if(value < 0)  {
					value = 0;
				}
				
				document.getElementById("textBox0").value = value;
				document.getElementById("slider0").value = value;
				
				updateColor();
			}
			
			function incrementSlider0()  {
			
				var num = document.getElementById("slider0").value;
				
				num++;
				if(num > 255)  {
					num = 255;
				}
				
				document.getElementById("slider0").value = num;
				
				showValue0(num);
			}
			
			function decrementSlider0()  {
			
				var num = document.getElementById("slider0").value;
				
				num--;
				if(num < 0)  {
					num = 0;
				}
				
				document.getElementById("slider0").value = num;
				
				showValue0(num);
			}
		
			function showValue1(newValue)  {
				document.getElementById("textBox1").value=newValue;
				updateColor();
			}
				
			function updateSlider1()  {
				
				var value = document.getElementById("textBox1").value;
				
				
				if(value > 255)  {
					value = 255;
				}
				if(value < 0)  {
					value = 0;
				}
				
				document.getElementById("textBox1").value = value;
				document.getElementById("slider1").value = value;
				updateColor();
			}
			
			function incrementSlider1()  {
			
				var num = document.getElementById("slider1").value;
				
				num++;
				if(num > 255)  {
					num = 255;
				}
				
				document.getElementById("slider1").value = num;
				
				showValue1(num);
			}
			
			function decrementSlider1()  {
			
				var num = document.getElementById("slider1").value;
				
				num--;
				if(num < 0)  {
					num = 0;
				}
				
				document.getElementById("slider1").value = num;
				
				showValue1(num);
			}
			
			function showValue2(newValue)  {
				document.getElementById("textBox2").value=newValue;
				updateColor();
			}
				
			function updateSlider2()  {
				
				var value = document.getElementById("textBox2").value;
				
				
				if(value > 255)  {
					value = 255;
				}
				if(value < 0)  {
					value = 0;
				}
				
				document.getElementById("textBox2").value = value;
				document.getElementById("slider2").value = value;
				updateColor();
			}
			
			function incrementSlider2()  {
			
				var num = document.getElementById("slider2").value;
				
				num++;
				if(num > 255)  {
					num = 255;
				}
				
				document.getElementById("slider2").value = num;
				
				showValue2(num);
			}
			
			function decrementSlider2()  {
			
				var num = document.getElementById("slider2").value;
				
				num--;
				if(num < 0)  {
					num = 0;
				}
				
				document.getElementById("slider2").value = num;
				
				showValue2(num);
			}
			
			function makeWhite()  {
				var num = 255;
				document.getElementById("slider0").value = num;
				document.getElementById("slider1").value = num;
				document.getElementById("slider2").value = num;
				
				showValue0(num);
				showValue1(num);
				showValue2(num);
			}
			
			function makeBlack()  {
				var num = 0;
				document.getElementById("slider0").value = num;
				document.getElementById("slider1").value = num;
				document.getElementById("slider2").value = num;
				
				showValue0(num);
				showValue1(num);
				showValue2(num);
			}
			
			
			
			
			