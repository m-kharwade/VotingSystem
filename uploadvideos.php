<?php
require "conn.php";

$target_dir="Videos/";
echo($target);
$target_file_name=$target_dir.basename($_FILES["file"]["name"]);
echo($target_file_name);
$response=array();
echo($response);

if(isset($_FILES["file"]))
{
	if(move_uploaded_file($FILES["file"]["tmp_name"].$target_file_name))
	{
		$success='true';
		$message='Succesfully Uploaded';
	}
	else
	{
		$success='false';
		$message='Error loading page';
	}
		
}
else
	{
		$success='false';
		$message='Error loading page';
	}
$response["success"]=$success;
$response["message"]=$message;

//$response=[{ "disposal_type_category": { "category_entry_total": "21" }, "disposal_types": [{ "ID": "78", "entries":[{ "ID": 2584, "entry_tally": "1" }, { "ID": 2578, "entry_tally": "1" } ] }, { "ID": "1323", "entries": [{ "ID": 2583, "entry_tally": "1" },{ "ID": 2579, "entry_tally": "1" } ] } ] }, { "disposal_type_category":{ "category_entry_total": "25.2" }, "disposal_types": [{ "ID": "80", "entries": [] }, { "ID": "84", "entries": [] } ] } ]

//echo json_encode($response);


?>