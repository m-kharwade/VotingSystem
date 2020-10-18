<?php
require"..\conn.php";

//$email=$_GET["email"];
$email="kharwademeenakshi412@gmail.com";
$sql="SELECT * from addsports where email='$email';";

$result =mysqli_query($conn,$sql);


$response = array();
while($row =mysqli_fetch_array($result))
{
	array_push($response,array("email"=>$row[1],"sportsName"=>$row[2],"sportsLevel"=>$row[3],"achievement"=>$row[4],"club"=>$row[5] ,"otherInfo"=>$row[6]));	
}

echo json_encode($response);

mysqli_close($conn);


?>
