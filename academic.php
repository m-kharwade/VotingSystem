<?php
require 'conn.php';

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
		// $email="m@gmail.com";
		// $examName="jbjkjn";
		// $examScore="bnjk";
		// $addmoreacademics="mmknkm";
		
		
		
		$email=$_POST["email"];
		$examName=$_POST["examName"];
		$examScore=$_POST["examScore"];
		$addmoreacademics=$_POST["addmoreacademics"];
		
		
		$query="INSERT into addacademics (email,examName,examScore,addmoreacademics) VALUES ('$email','$examName','$examScore','$addmoreacademics');";
		//echo "$query";
		$result = mysqli_query($conn,$query);
		if($result) 
		{
			echo"added";
		}
		else 
		{
			echo"not added"; 
		}
	}
	
	

?>