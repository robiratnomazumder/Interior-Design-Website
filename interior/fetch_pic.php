<?php
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "robi","reg_demo");
	
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_array($result)) {
		//echo $row["name"];
		$arr[]=$row;
	}
	return json_encode($arr);
}

?>