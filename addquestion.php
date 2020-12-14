<?php 
	$conn=mysqli_connect("localhost","root","","cbt_db");
	
	$_POST=json_decode(file_get_contents('php://input'),true);

	$quetion=$_POST['question'];
	$opt_1=$_POST['option1'];
	$opt_2=$_POST['option2'];
	$opt_3=$_POST['option3'];
	$opt_4=$_POST['option4'];
	$answer=$_POST['correctanswer'];
	$course=$_POST['selectcourse'];

	// echo $course;

	$inserter="INSERT INTO add_quetions(question, option_1, option_2, option_3, option_4, course_id, answer) 
				VALUES ('$quetion','$opt_1','$opt_2','$opt_3','$opt_4','$course','$answer')";
	$query=mysqli_query($conn,$inserter);

	if($query){
		$response='{"success": true}';
		// echo "success";
	}else{
		$response='{"success": false}';
		// echo "not";
	}
 ?>