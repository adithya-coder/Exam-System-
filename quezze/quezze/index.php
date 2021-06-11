<?php include'db.php' ;?>
<?php 
$query = "SELECT * FROM `questions` ";
$result = $mysqli->query($query);
$total = $result->num_rows;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Adithya Quizzer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header><div class="container">
	<h1>ICT Quizzer <sup>Adithya Heshan <sup>@</sup></sup></h1>
	
</div></header>
<main>
	<div class="container">
		<h2>Test your ICT Knowlage</h2>
		<p>This is a miltiple quiz to test yoyr knowledge of ICT</p>
		<ul>
			<li><strong>Number of Questions:</strong><?php  echo $total; ?></li>
			<li><strong> Type:</strong>Multiple Choice</li>
			<li><strong>Estimated Time:</strong><?php echo $total * .5; ?> Minutes</li>
			
		</ul>
		<a href="question.php?n=1" class="start">Start Quiz</a>
		<a href="singup.php?" class="start">Add Quiz</a>
	</div>

</main>
<footer>
	<div class="container">
		Copyright &coppy 2019,ICT <sub>Adithya</sub>
	</div>
</footer>
</body>
</html>