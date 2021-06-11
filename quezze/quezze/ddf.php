<?php include'db.php'; ?>
<?php 
  $number=(int)$_GET['n'];
  $query="SELECT * FROM `questions` WHERE question_no = $number";
  $result= $mysqli->query($query) or die($mysqli->error.__LINE__);
$question= $result->fetch_assoc();
?>
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
		<div class="current">Question 1 of 5</div>
		<p class="question">
			<?php echo $questions['text'];?>
		</p>
		<form method="post" action="process.php">
			<ul class="choices">
				<li><input type="radio" name="choice" value="1"> ICT:Information communication Technology</li>
				<li><input type="radio" name="choice" value="1"> ICT:Iionnformat communication Technology</li>
				<li><input type="radio" name="choice" value="1"> ICT: communication Information Technology</li>
				<li><input type="radio" name="choice" value="1"> ICT:communication Technology Information </li>
				<li><input type="radio" name="choice" value="1"> ICT: Technology Information communication </li>

			</ul>
			<input type="submit" value="Submit"></input>
		</form>
	</div>

</main>
<footer>
	<div class="container">
		Copyright &coppy 2019,ICT <sub>Adithya</sub>
	</div>
</footer>
</body>
</html>
