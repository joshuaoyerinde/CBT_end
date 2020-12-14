<?php 

  $conn=mysqli_connect("localhost","root","","cbt_db");
  
  $fetch_questions="SELECT questions_id, course, question, option_1, option_2, option_3, option_4 FROM add_quetions JOIN course_and_tutor USING(course_id)";
  $query=mysqli_query($conn,$fetch_questions);
  $result=mysqli_fetch_all($query,MYSQLI_ASSOC);


  $fetch_q="SELECT COUNT(question) as counted FROM add_quetions";
  $res_count=mysqli_query($conn,$fetch_q);
  $sult=mysqli_fetch_all($res_count,MYSQLI_ASSOC);
  
// the responce to the front end --------------------------
  $response = array("result" => $result,"count" => $sult);

  echo json_encode($response);
 ?>