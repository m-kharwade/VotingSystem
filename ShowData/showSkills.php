<?php
require"..\conn.php";

//$email=$_GET["email"];
$email="kharwademeenakshi412@gmail.com";

$sql="SELECT * from addskills where email='$email';";

$result =mysqli_query($conn,$sql);


$response = array();
while($row =mysqli_fetch_array($result))
{
	array_push($response,array("email"=>$row[1],"skills"=>$row[2]));	
}

echo json_encode($response);

mysqli_close($conn);


?>
