<?php
require"..\conn.php";


//$email=$_GET["email"];
$email="meenakshi.kharwade@cumminscollege.edu.in";
//$email="jj@gmail.com";
$sql="SELECT * from candidatedetails where email='$email';";

$result =mysqli_query($conn,$sql);


$response = array();
while($row =mysqli_fetch_array($result))
{
	array_push($response,array("email"=>$row[1],"username"=>$row[2],"contact"=>$row[3],"branch"=>$row[4],"role"=>$row[5] ,"post"=>$row[6],"live_backlog"=>$row[7],"dead_backlog"=>$row[8],"profilepic"=>$row[9],"bio"=>$row[10]));	
}

echo json_encode($response);

mysqli_close($conn);


?>
