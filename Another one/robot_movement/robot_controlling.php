<?php 



	$btn_clicked = $_POST["click"];



	$btn_letter='';
	switch ($btn_clicked) {
		case 'forwards':
			$btn_letter="F";
			break;
		case 'left':
			$btn_letter= "L";
			break;
		case 'right':
			$btn_letter= "R";
			break;
		case 'backwards':
			$btn_letter= "B";
			break;
		
		default:
			$btn_letter= "S";
			break;
	}

	echo $btn_letter;

	echo "<br>";
	echo "<br>";
	echo "<br>";


	$host='localhost';
	$user='root';
	$password='';
	$database='robot';
	$connect=new mysqli($host,$user,$password,$database) or die ("Unable to connect");
	$sql = "INSERT INTO robot_movment_history (direction)VALUES ('" .$btn_letter."')"  ;

	if ($connect->query($sql) === TRUE) {
  		echo "\nNew record created successfully";
} 	
	else {
  		echo "Error: " . $sql . "<br>" . $connect->error;
}


	$connect->close();