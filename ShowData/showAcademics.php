<?php
require"..\conn.php";

//$email=$_GET["email"];
$email="meenakshi.kharwade@cumminscollege.edu.in";
$sql="SELECT * from addacademics where email='$email';";

$result =mysqli_query($conn,$sql);


$response = array();
while($row =mysqli_fetch_array($result))
{
	array_push($response,array("email"=>$row[1],"examName"=>$row[2],"examScore"=>$row[3],"addmoreacademics"=>$row[4]));	
}

echo json_encode($response);

mysqli_close($conn);


?>
