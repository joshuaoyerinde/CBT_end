<?php 
	$conn=mysqli_connect("localhost","root","","cbt_db");

	$select_question="SELECT questions_id, course, course_id as courseId, question, option_1, option_2, option_3, option_4,answer FROM add_quetions JOIN course_and_tutor USING(course_id)";
	$query=mysqli_query($conn,$select_question);
	$res=mysqli_fetch_all($query,MYSQLI_ASSOC);
	session_start();
	foreach ($res as  $val) {
		$_SESSION['courseid'] = $val['courseId'];
		$_SESSION['course'] = $val['course'];
		// echo $_SESSION['courseid'];
	}
	echo json_encode($res);

 ?>