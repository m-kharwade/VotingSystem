<?php
require 'conn.php';


			// $flag=0;
			

		   // $email="meenupawar@gmail.com";
		   // $username="Pranita Pawar";
		   // $contact="9420488274";
		   // $branch="CE";
		   // $role="2ndyear";
		   // $live_backlog="yes";
		   // $dead_backlog="no";
		   
		   
// $gsuitid=stripcslashes($gsuitid);
		   
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
				
			global $conn;
			
			
		
			
		   $email=$_POST["email"];
		   $username=$_POST['username'];
		   $contact=$_POST["contact"];
		   $branch=$_POST["branch"];
		   $role=$_POST["role"];
		   $post=$_POST["post"];
		   $live_backlog=$_POST["live_backlog"];
		   $dead_backlog=$_POST["dead_backlog"];
		   
		   	   
			// $user=mysqli_query($conn,"Select email from candidatedetails where email='$email';");

			// $result1 = mysqli_num_rows($user);

			// if($result1>0)
			// {
				// $flag=0;
							// }
			// else
			// {
	
				 $query ="insert into candidatedetails(email,username,contact,branch,role,post,live_backlog,dead_backlog) values('$email','$username','$contact','$branch','$role','$post','$live_backlog','$dead_backlog');";
				 $result=mysqli_query($conn,$query);
				 // $flag=1;
				// echo("insert");
			//	echo($query);
						// if (! $result) {
						// printf("Error: %s\n", mysqli_error($conn));
						// exit();
						// }
		
			// }
					  

		if($result)
		{
			echo "Data inserted";
		}
		else
		{
			echo "Already exits";
			
		} 
		
		mysqli_close($conn);
		
				
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		

?>