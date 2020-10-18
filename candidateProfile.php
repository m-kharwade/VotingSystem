<?php
require"conn.php";

$gsuitid=$_POST["email"];
$bio=$_POST["bio"];
//$profilepic=$_POST["profilepic"];

// $gsuitid="project.voting@cumminscollege.edu.in";
// $bio="not working";

$gsuitid=stripcslashes($gsuitid);
//$gsuitid=mysql_real_escape_string($gsuitid);


$user=mysqli_query($conn,"Select email from candidatedetails where email='$gsuitid';");

$result1 = mysqli_num_rows($user);

if($result1>0)
{
	// $query="UPDATE candidateprofile SET  bio='$bio' , profilepic='$profilepic' where email='$gsuitid' ;";
	
	$query="UPDATE candidatedetails SET  bio='$bio' where email='$gsuitid' ;";
	// echo("update");
	// echo($query);ss
	
}
else
{
	
	// $query="INSERT into candidateprofile (email,bio,profilepic) VALUES ('$gsuitid','$bio','$profilepic');";
	$query="INSERT into candidatedetails (email,bio) VALUES ('$gsuitid','$bio');";
	// echo("insert");
	// echo($query);
}
	



 $result = mysqli_query($conn,$query);

	 
	 
	 
 // if (! $result) {
    // printf("Error: %s\n", mysqli_error($conn));
    // exit();
// }
	 
		if($result) 
		{
			echo"added";
		}
		else 
		{
			echo"not added"; 
		}
 
 // if (! $result) {
    // printf("Error: %s\n", mysqli_error($conn));
    // exit();
// }



?> 