<?php 
$db_host="localhost";
$db_name="quizzer";
$db_user="root";
$db_pass="";

$mysqli= new mysqli('localhost','root','','quizzer');

if($mysqli->connect_error){
	printf("Failed to connect Mysql:", $mysqli->connect_error);
	exit();
}



 ?>
