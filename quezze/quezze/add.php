
<?php include'db.php'	?>
<?php 
if(isset($_POST['submit'])){
	$index =$_POST['qn'];
    $id = $_POST['qt'];
    $correct_choice = $_POST['ccn'];

   $choices = array();
   $choices[1]= $_POST['qc1'];
   $choices[2]= $_POST['qc2'];
   $choices[3]= $_POST['qc3'];
   $choices[4]= $_POST['qc4'];
   $choices[5]= $_POST['qc5'];
   $sql="INSERT INTO `questions`(`question_no`, `text`) VALUES ('$index','$id')";

   $insert= $mysqli->query($sql);
   if($insert){
 	foreach ($choices as $Choices => $value) {
 		if($value !=''){
		    if($correct_choice==$Choices){
		    	$is_correct =1;


		     }else{
		     	$is_correct=0;
		     }

		     $query="INSERT INTO `choies`( `question_no`, `is_correct`, `text`) VALUES ('$index','$is_correct','$value')";


		     $insert =$mysqli->query($query);


		     if($insert){
		     	continue;
		     }else{
		     	die("Connection failed: " .$mysql->error);
		     }

 		}
 		# code...
 	}
 }
 $msg= 'question has been added';
 
} 

$query = "SELECT * FROM `questions` ";
 $results = $mysqli->query($query);
    $total = $results->num_rows;
    $next = $total+1;

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
		<h2>Add question</h2>
		<?php if(isset($msg)) {
			echo "<p>".$msg.'</p>';
		}?>
		<form method="post" action="add.php">
			<p><label>Question  Number:</label>
				<input type="number"  value="<?php
				echo $next ?>" name="qn">
			</p>
			<p><label>Question  Text:</label>
				<input type="text" name="qt">
			</p>
			<p><label>Choies #1:</label>
				<input type="text" name="qc1">
			</p>
			<p><label>Choies #2:</label>
				<input type="text" name="qc2">
			</p>
			<p><label>Choies #3:</label>
				<input type="text" name="qc3">
			</p>
			<p><label>Choies #4:</label>
				<input type="text" name="qc4">
			</p>
			<p><label>Choies #5:</label>
				<input type="text" name="qc5">
			</p>
			<p><label>Correct Choice Number:</label>
				<input type="number" name="ccn">
			</p>
			<p>
				<input type="submit" name="submit" value="Submit">
			</p>
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