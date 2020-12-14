<?php 
	$conn=mysqli_connect("localhost","root","","cbt_db");

	$query="SELECT * FROM course_and_tutor";
	$result=mysqli_query($conn,$query);
	$fetch_quest=mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($fetch_quest) ;
 ?>