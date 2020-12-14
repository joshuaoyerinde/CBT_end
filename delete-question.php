<?php 
	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="cbt_db";
	// $conn=mysqli_connect("localhost","root","","cbt_db");
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	$_POST=json_decode(file_get_contents('php://input'),true);

	$id =$_POST['questions_id'];
	// echo $qid;
	
	try{
		$deleteQuest="DELETE FROM add_quetions WHERE questions_id = $id";
		$query=mysqli_query($conn,$deleteQuest);
			
			if($query){
				echo json_encode($query); 
			}else{
				$response='{"success": false}';
			} 
		}catch(Exception $e){
			echo $e->getMessage();
		}
	
 ?>



