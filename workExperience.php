<?php
require 'conn.php';

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
		
		$email=$_POST["email"];
		$committeeName=$_POST["committeeName"];
		$contribution=$_POST["contribution"];
		$otherWork=$_POST["otherWork"];
		
		
		$query="INSERT into addwork (email,committeeName,contribution,otherWork) VALUES ('$email','$committeeName','$contribution','$otherWork');";
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