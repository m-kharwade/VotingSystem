<?php
require"conn.php";

$sql="SELECT * from addvideos;";

$result =mysqli_query($conn,$sql);

// $query="SELECT username from candidatedetails;";

// $result2=mysqli_query($conn,$query);


//Declare array«

$response = array();
//$response="";



while($row =mysqli_fetch_array($result))
{
	array_push($response,array("email"=>$row[1],"videos"=>$row[2]));
	
	//$response=($response '{"email"=>$row[1],"bio"=>$row[2],"profilepic"=>$row[3],"username"=>$row[4]}');
	
}

//Encode result in jSON format
echo json_encode($response);



mysqli_close($conn);


?>
