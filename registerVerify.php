<?php

$host="localhost";
$user="root";
$password="";
$db="test";

$a = mysqli_connect($host,$user,$password, $db);




if(!isset(_POST['uName']) && !isset(_POST['email']) && !isset(_POST['password']) && !isset(_POST['rePassword'])){
	echo "Not every field set!!!";
}
else{
	if(_POST['password'] != _POST['rePassword']){
		echo "Please enter the same password";
		}
	else{
	
		$name = $_POST['uName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "insert into register (Name,Email,Password) values($name,$email,$password)";	
		}
}


if (mysqli_query($a, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($a);
}

mysqli_close($a);



?>