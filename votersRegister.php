<?php
require 'conn.php';

		   // $email="prantipawar@gmail.com";
		   // $username="Pranita Pawar";
		   // $contact="9420488274";
		   // $branch="CE";
		   // $role="2ndyear";

	

		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
				
		   $email=$_POST["email"];
		   $username=$_POST['username'];
		   $contact=$_POST["contact"];
		   $branch=$_POST["branch"];
		   $role=$_POST["role"];
		   
		   
		   
		
		
		// $query ="insert into register_table(email,username,contact,password,branch,role) values($email,$username,$contact,$password,$branch,$role);";
		
		 $query ="insert into voter_register(email,username,contact,branch,role) values('$email','$username','$contact','$branch','$role');";
		 //echo $query;
	
		
		$result=mysqli_query($conn,$query);
		
		
		// if (! $result) {
			// printf("Error: %s\n", mysqli_error($conn));
			// exit();
		// }
		
		if($result)
		{
			echo "Data Inserted";
		}
		else
		{
			echo "Not inserted";
			
		} 
		
		mysqli_close($conn);
		
				
		}
		
		
	
		
		
		

?>