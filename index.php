<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title id="myTitle">firstPractice</title>
		<link href="styles/style.css" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<?php include 'header.php';?>
		<?php include 'nav.php';?>

		<section id="section1">

			<h1>This is section1</h1>
			<p>Hello World!</p>
			<div id="imageWrapper">
				<img src='./images/google-logo.jpg' alt='Google Logo' id='googleLogo' onclick="titleChangeToGoogle()">
				<img src='./images/naver-logo.png' alt='Naver Logo' id='naverLogo' onclick="titleChangeToNaver()">
			</div>
			

		</section>

		<section id="centeringTutorials"> <!-- https://css-tricks.com/centering-css-complete-guide/ -->
			<h1>This is section for tring cetering elements</h1>
				<div class="textCentered">
					This text is centered. (inline, inline-)</div></br>
				</div>

				<div class="blockCentered">
					<img src='./images/google-logo.jpg' alt='Google Logo' id='imageForCenteringBlock'>
					This img is centered. (block)&nbsp; &nbsp; *This image's display is changed to block
				</div>
		</section></br>

		<section>
			<h1>This is section for tring PHP codes</h1>

			<form action="action_page.php" method="post">
				<fieldset>
					<legend>Personal Information</legend>
					First name : <br>
					<input type="text" name="firstName"><br>
					Last name: <br>
					<input type="text" name="lastName"><br>

					<input type="radio" name="pet" value="dog" checked> Dog<br>
					<input type="radio" name="pet" value="cat"> Cat<br>
					<input type="radio" name="pet" value="parrot"> Parrot<br>

					<input type="submit" value="Submit">
				</fieldset>
			</form>

			<?php  echo "This sentence is generated with PHP echo"; ?><br>
			<!-- Usage of variables with PHP -->
			<?php
				$color = "red";
				echo "My car is ". $color . "<br>";
			?>

			<?php
				$color = "blue";
				echo "My car is ". $color . "<br>";
			?>

			<?php
				$txt = "Hello World!";
				$x = 5;
				$y = 10.0;

				echo $txt;
				echo "<br>";
				echo $x;
				echo "<br>";
				echo $y;
				echo "<br>";
			?>

			<?php
				$txt = "Programming";
				echo "$txt is amazing!" . "<br>";
				echo $txt . " is " . "amazing!" . "<br>";
			?>

			<?php
				$x = 10;
				$y = 25;
				$z = $x + $y;
				echo $x , " plus " . $y . " is " . $z . "<br>";
			?>

			<?php
				$x = 5;
				$y = 10;

				function myTest() {
				    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; // Accessing global varibales in function.
				} 

				myTest();
				echo $y , "<br>";
			?>

			<?php
				function myTest2(){
					static $x = 0;
					echo $x;
					$x++;
				}

				myTest2();
				myTest2();
				myTest2();

				echo "<-- Static Variables" . "<br>";

				function myTest3(){
					$x = 0;
					echo $x;
					$x++;
				}

				myTest3();
				myTest3();
				myTest3();

				echo "<-- Non static variables" . "<br>";
			?>

			<?php
				$cats = array("Bonnie", "Honey", "Shasha");
				var_dump($cats);
				echo "<br>";
			?>

			<?php
				//Usage of Class
				class Cat{
					function Cat(){
						$this -> species = "persian";
					}
				}

				$cute = new Cat();

				echo $cute -> species;
			?>


		</section>

		<?php include 'footer.php';?>

		<script>
			function titleChangeToGoogle(){
				//var inputString = prompt("Please enter a new title", "firstPractice");  This code exist for getting input for title.
				document.getElementById("myTitle").innerHTML = "Google";
			}

			function titleChangeToNaver(){
				document.getElementById("myTitle").innerHTML = "Naver";
			}
		</script>
	</body>

</html>


<!-- 자바스크립트로 title 바꾸기 -->