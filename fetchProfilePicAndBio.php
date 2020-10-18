<?php
require"conn.php";

$post=$_GET["post"];
echo($post);

$sql="SELECT * from candidatedetails where post='$post';";

$result =mysqli_query($conn,$sql);

// $query="SELECT username from candidatedetails;";

// $result2=mysqli_query($conn,$query);


//Declare array«

$response = array();
//$response="";





while($row =mysqli_fetch_array($result))
{
	array_push($response,array("email"=>$row[1],"username"=>$row[2],"contact"=>$row[3],"branch"=>$row[4],"role"=>$row[5] ,"post"=>$row[6],"live_backlog"=>$row[7],"dead_backlog"=>$row[8],"profilepic"=>$row[9],"bio"=>$row[10]));
	
	
	
	//$response=($response '{"email"=>$row[1],"bio"=>$row[2],"profilepic"=>$row[3],"username"=>$row[4]}');
	
}

//print_r($response);

//Encode result in jSON format
echo json_encode($response);



mysqli_close($conn);


?>
