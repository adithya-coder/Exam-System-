<?php session_start() ;?>
<!DOCTYPE html>
<html>
<head>
	<title>Adithya Quizzer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header><div class="container">
	<h1>ICT Quizzer <sup>Adithya Heshan <sub>@</sub></sup></h1>
	
</div></header>
<main>
	<div class="container">
		<h2>You 're Done!</h2>
		<p>Congrats! You have compeled test</p>
		<p>Final Score:<?php  echo $_SESSION['score'];?></p>
		<a href="question.php?n=1" class="start">Take Again</a>
	</div>

</main>
<footer>
	<div class="container">
		Copyright &coppy 2019,ICT <sub>Adithya</sub>
	</div>
</footer>
</body>
</html>