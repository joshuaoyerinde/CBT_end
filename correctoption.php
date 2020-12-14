<?php 
	$conn=mysqli_connect("localhost","root","","cbt_db");

	$select_question="SELECT questions_id, option_1, option_2, option_3, option_4, answer FROM add_quetions";
	$query=mysqli_query($conn,$select_question);
	$res=mysqli_fetch_all($query,MYSQLI_ASSOC);

	echo json_encode($res);

 ?>