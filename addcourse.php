<?php 
	// session_start();
	$conn=mysqli_connect("localhost","root","","cbt_db");
	
	$_POST=json_decode(file_get_contents('php://input'),true);

	$tutorsname=$_POST['tutors'];
	$coursename=$_POST['course'];
	
	$inserter="INSERT INTO course_and_tutor(tutorsname, course) VALUES ('$tutorsname','$coursename')";
	$connect_inserter=mysqli_query($conn,$inserter);
	if($connect_inserter){
		$response='{"success": true}';
	}else{
		$response='{"success": false}';
	}
 ?>