<?php
require 'conn.php';

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
		
		$email=$_POST["email"];
		$sportsName=$_POST["sportsName"];
		$sportsLevel=$_POST["sportsLevel"];
		$achievement=$_POST["achievement"];
		$club=$_POST["club"];
		$otherInfo=$_POST["otherInfo"];
		
		$query="INSERT into addsports (email,sportsName,sportsLevel,achievement,club,otherInfo) VALUES ('$email','$sportsName','$sportsLevel','$achievement','$club','$otherInfo');";
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