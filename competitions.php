<?php
require 'conn.php';

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
		
		$email=$_POST["email"];
		$eventName=$_POST["eventName"];
		$eventRank=$_POST["eventRank"];
		$otherEvent=$_POST["otherEvent"];
		
		$query="INSERT into addcompetitions (email,eventName,eventRank,otherEvent) VALUES ('$email','$eventName','$eventRank','$otherEvent');";
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