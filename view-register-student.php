<?php 
	$conn=mysqli_connect("localhost","root","","cbt_db");

	// $_POST=json_decode(file_get_contents('php://input'),true);
	$fetchStudent="SELECT * FROM registration_tb";
	$query=mysqli_query($conn,$fetchStudent);
	$fetchstudent=mysqli_fetch_all($query,MYSQLI_ASSOC);
	// echo json_encode($fetch);

	$countStudent="SELECT COUNT(firstname) as studentname FROM registration_tb";
	$countquery=mysqli_query($conn,$countStudent);
	$fetchCountedStudent=mysqli_fetch_all($countquery,MYSQLI_ASSOC);
// the responce
	$fetching_and_counted_response = array('listOfStudent' => $fetchstudent,'totalstudent' => $fetchCountedStudent);
// ----------
	echo json_encode($fetching_and_counted_response);

 ?> 	