<?php
require"..\conn.php";


//$email=$_GET["email"];
$email="kharwademeenakshi412@gmail.com";

$sql="SELECT * from addwork where email='$email';";

$result =mysqli_query($conn,$sql);


$response = array();
while($row =mysqli_fetch_array($result))
{
	array_push($response,array("email"=>$row[1],"committeeName"=>$row[2],"contribution"=>$row[3],"otherWork"=>$row[4]));	
}

echo json_encode($response);

mysqli_close($conn);


?>
