<?php
require 'conn.php';

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
		
		$email=$_POST["email"];
		$skills=$_POST["skills"];
		$query="INSERT into addskills (email,skills) VALUES ('$email','$skills');";
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