<?php 
	session_start();
	$conn=mysqli_connect("localhost","root","","cbt_db");
	$_POST=json_decode(file_get_contents('php://input'),true);
	$score=$_POST['score'];
	$stdid = $_SESSION['id'];
	$course = $_POST['course'];
	// echo 	$stdid;
	$insertScore="INSERT INTO score_tb(score,student_id,course_name) VALUES ('$score','$stdid','$course')";
	$query=mysqli_query($conn,$insertScore);
	echo json_encode($query);
 ?>