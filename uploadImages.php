<?php
require "conn.php";

$target_dir="Images/OtherPhotos";
$address="http://192.168.43.204/VotingSystem/";
$email=$_POST['email'];
$images=$_POST['images'];

if(!file_exists($target_dir))
{
	//create /Images/ProfilePic folder
	
	mkdir($target_dir,0777,true);
}




//set random image file name with time

$target_dir=$target_dir."/".rand()."_".time().".jpeg";
if(file_put_contents($target_dir,base64_decode($images)))
{
	echo json_encode([
		"Message"=>"The file has been uploaded.",
		"Status" =>"OK"
	]);
}
else
{
		echo json_encode([
		"Message"=>"Sorry,there was an error uploading your file.",
		"Status" =>"Error"
		
		]);
}

$temp=$address.$target_dir;
	
$sql="insert into addimages(email,images) values ('$email','$temp');";

$result=mysqli_query($conn,$sql);

if($result)
{
	echo "uploaded";
}
else
{
	echo "error";
}




// $sql="insert into candidateprofile(email,profilepic) values ('$email','$profilepic');";



// if(mysqli_query($conn,$sql))
// {
	// file_put_contents($upload_path,base64_decode($images));
	// echo json_encode(array('response'=>'Image Uploaded Successfully'));
	
// }
// else
// {
	// echo json_encode(array('response=>''Image Upload failed'));
	
// }

mysqli_close($conn);


?>