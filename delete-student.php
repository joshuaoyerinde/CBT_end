<?php 
	$conn=mysqli_connect("localhost","root","","cbt_db");
	
	$_POST=json_decode(file_get_contents('php://input'),true);

	$id=$_POST['id'];
	$deleteStudent="DELETE FROM registration_tb WHERE id=$id";
	$query=mysqli_query($conn,$deleteStudent);
	echo json_encode($query);
 ?>