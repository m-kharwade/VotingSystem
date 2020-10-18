<?php
require"conn.php";

$gsuitid=$_POST["gsuitid"];
// $gsuitid="maithili.warkhedkar@cumminscollege.edu.in";     // --------------valid user
// $gsuitid="meenakshi.kharwade@cumminscollege.edu.in";     //---------------already exist
// $gsuitid="ruchika.warkhedkar@cumminscollege.edu.in";    //--------------enter valid id
//$gsuitid="vedanti.manjule@cumminscollege.edu.in";           //---------------already exist


$gsuitid=stripcslashes($gsuitid);
//$gsuitid=mysql_real_escape_string($gsuitid);

$query="Select * from gsuite where gsuitid='$gsuitid';";


	$result = mysqli_query($conn,$query);

	$row=mysqli_fetch_array($result);
	 
	 
	 
	$user=mysqli_query($conn,"Select email from candidatedetails where email='$gsuitid';");

	$result1 = mysqli_num_rows($user);
	 
	 
		if($row['gsuitid']==$gsuitid) 
		{
			
			if($result1>0)
			{
				// echo"Already Exists";
				echo "2";
			}
			else
			{
				echo"1";
			}
			
		}
		else 
		{
			echo "0"; 
		}
?> 