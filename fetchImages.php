<?php
require"conn.php";


$email=$_GET["email"];
//$email="jj@gmail.com";
// echo($email);
 $sql="SELECT * from addimages where email='$email' ;";
// $sql="SELECT * from addimages;";

$result =mysqli_query($conn,$sql);

// $query="SELECT username from candidatedetails;";

// $result2=mysqli_query($conn,$query);


//Declare array«

$response = array();
// $response="";



while($row =mysqli_fetch_array($result))
{
	array_push($response,array("email"=>$row[1],"images"=>$row[2]));
	
	//$response=($response '{"email"=>$row[1],"bio"=>$row[2],"profilepic"=>$row[3],"username"=>$row[4]}');
	
}

//Encode result in jSON format

echo json_encode($response);



mysqli_close($conn);


?>
