
<?php
session_start();

$conn=mysqli_connect('localhost','root','','quizzer');
mysqli_select_db($conn, 'unregister');
$i =$_POST['username'];
$is = $_POST['password'];
$sql="SELECT * FROM id WHERE username='$i' and pass='$is'";

$result= mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);

if($num == 1){
	header("Location:add.php");
}else{
	header("Location: index.php");
}


?>