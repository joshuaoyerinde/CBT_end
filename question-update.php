<?php 
		$conn=mysqli_connect("localhost","root","","cbt_db");

		$_POST=json_decode(file_get_contents('php://input'),true);
		$question = $_POST['question'];
		$opt1 = $_POST['option1'];
		$opt2 = $_POST['option2'];
		$opt3 = $_POST['option3'];
		$opt4 = $_POST['option4'];
		$correct = $_POST['correctanswer'];

		$quest_id = $_POST['qid'];
		
		// echo $quest_id
		// ."_". $question
		// ."_". $opt1
		// ."_". $opt2
		// ."_". $opt3
		// ."_". $opt4;

		try{
			
			$editQuestion="UPDATE add_quetions SET question='$question',option_1='$opt1',option_2='$opt2',option_3='$opt3',option_4='$opt4',answer='$correct' WHERE questions_id = $quest_id";

			$query = mysqli_query($conn,$editQuestion);
			 // echo 5;
			if($query){
				$response='{"success": true}';
				// echo $query."sss";

			}else{
				$response='{"success": false}';
				// echo $query."fail";
			} 
		}catch(Exception $e){
			echo $e->getMessage();
		}

 ?>