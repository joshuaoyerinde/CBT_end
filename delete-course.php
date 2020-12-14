<?php 
	$conn=mysqli_connect("localhost","root","","cbt_db");
	
	$_POST=json_decode(file_get_contents('php://input'),true);

	$id=$_POST['course_id'];
	try{
		$deleteCourse="DELETE FROM course_and_tutor WHERE course_id = $id";
		$query=mysqli_query($conn,$deleteCourse);
			
			if($query){
				echo json_encode($query); 
			}else{
				$response='{"success": false}';
			} 
		}catch(Exception $e){
			echo $e->getMessage();
		}
	
	// $deleteCourse="DELETE FROM course_and_tutor WHERE course_id=$id";
	// $query=mysqli_query($conn,$deleteCourse);
	// echo json_encode($query);
	// echo $query;
 ?>