<?php 
	session_start();

	$conn=mysqli_connect("localhost","root","","cbt_db");

	$_POST=json_decode(file_get_contents('php://input'),true);
	// 

	$email=$_POST["email"];
	$pass=$_POST["password"];

	$login_inserter="SELECT id, email as Email, password as Pass FROM  registration_tb WHERE email = '$email' AND password = '$pass'";

	$login_query = mysqli_query($conn,$login_inserter);
	$result=mysqli_fetch_all($login_query, MYSQLI_ASSOC);

	foreach ($result as $value) {
		$_SESSION['id']=$value['id'];
	}
	if (isset($_SESSION['id'])) {
		$response = '{"success": true}';
		// echo $_SESSION['id'];
	}else{
		$response = '{"success": false}';
	}
	// echo json_encode($result['id']);

	if ($result) {
		$response = array('success'=>true, 'message'=>'this is correct');
	}
	else{
		// $response = '{"success": false}';
		$response = array('message'=>'the email or the password you enter is invalid');	
	}
		echo json_encode($response);
 ?>
