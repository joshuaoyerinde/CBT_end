<?php 

	$conn=mysqli_connect("localhost","root","","cbt_db");

	
	$fetch_Course_name="SELECT course_id, course FROM course_and_tutor";
	$query=mysqli_query($conn,$fetch_Course_name);
	$fetch_query=mysqli_fetch_all($query,MYSQLI_ASSOC);
	// echo json_encode($fetch_query);

// Script for getting total number of course_name
	$fetchNumberOfCourse="SELECT COUNT(course) as course_name FROM course_and_tutor";
	$countedCourseQuery=mysqli_query($conn,$fetchNumberOfCourse);
	$fetchCountedQuery=mysqli_fetch_all($countedCourseQuery,MYSQLI_ASSOC);

// the result
	$result= array('getcourseid' =>$fetch_query, 'totalCourse' =>$fetchCountedQuery);
	echo json_encode($result);
 ?>