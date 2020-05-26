<?php

$host="localhost";
$user="root";
$password="";
$db="test";

$a = mysqli_connect($host,$user,$password, $db);




if(isset($_POST['E-mail']) && isset($_POST['Password'])){
	
	$email=$_POST['E-mail'];
	$password=$_POST['Password'];

	$sql="select * from register where Email='".$email."'AND Password='".$password."' limit 1"; 
	
	$result=mysqli_query($a,$sql);
	
	if(mysqli_num_rows($result)==1){
		echo "You have succesfully logged in";
		exit();
		
	}
	else{
		echo " You have entered an incorrect password";
		exit();
	}
	
}
else{
	echo "You wrong son";
}

?>








