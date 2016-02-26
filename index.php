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


		<nav>
			<a id="googleLink" href="http://www.google.com">Link to Google</a>
			<a id="naverLink" href="http://www.naver.com"><button id="naverButton">Link to Naver</button></a>
		</nav>

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
		</section>

		<footer>
			This is footer
		</footer>

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