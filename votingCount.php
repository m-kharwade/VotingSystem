<?php
require"conn.php";

$voteremail=$_POST["voteremail"];
$post=$_POST["post"];
// $namecandidate=$_POST["namecandidate"];
// $status=$_POST["status"];

 // $query="INSERT into votingcount (voteremail,post,namecandidate,status) VALUES ('$voteremail','$post','$namecandidate','$status');";
  $query="INSERT into votingcount (voteremail,post) VALUES ('$voteremail','$post');";
	
 $result = mysqli_query($conn,$query);

	
	 
		if($result) 
		{
			echo"added";
		}
		else 
		{
			echo"not added"; 
		}

?> 