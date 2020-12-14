<?php 
	$conn=mysqli_connect("localhost","root","","cbt_db");

	$_POST=json_decode(file_get_contents('php://input'),true);

	$fname=$_POST["firstname"];
	$lname=$_POST["lastname"];
	$mymail=$_POST["email"];
	$pass=$_POST["password"];

	$inserter="INSERT INTO registration_tb(firstname, lastname, email, password) VALUES ('$fname','$lname','$mymail','$pass')";
	$result=mysqli_query($conn,$inserter);

	
	// $response=[];
	if ($result) {
		// $respose = ["success"=>true];
		$response = '{"success": true}'; 
	}
	else{
		$response = '{"success": false}';

		// $respose = ["success"=>false];	
	}
	echo json_encode($response);
 ?>