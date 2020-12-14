<?php 
session_start();
$conn=mysqli_connect("localhost","root","","cbt_db");
 $stdid = $_SESSION['id'];

 $select_result = "SELECT SUM(score),id FROM score_tb WHERE student_id=7";
 $query = mysqli_query($conn,$select_result);
 $fetch = mysqli_fetch_all($query,MYSQLI_ASSOC);
 echo json_encode($fetch);
 ?>