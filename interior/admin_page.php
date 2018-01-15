<?php
session_start();

$conn = new mysqli("localhost", "root", "robi", "reg_demo");	
if($conn->connect_error)die("Database connection failed" . $conn->connect_error);

$signal="";
if(isset($_SESSION["flag"])){
?>


<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="CSS/notice.css">
  
<div align="center">
  <header>
    <img src="upload_pic/logo.jpg">
  </header>
</div>
	
</head>

<!-- //////////////////////////// database ///////////// -->
<?php
require("fetch_data.php");

$jsonData= getJSONFromDB("select * from registration");

$jsn=json_decode($jsonData);

?>

<body style="background-color: #FFFFFF">

<!-- ************************ Buttons *************************** -->
<div align="center">
<a href="admin_page.php"><button class="button"><span> Contact List </span></button></a>
<a href="signup_page.php"><button class="button" ><span> Signup Admin</span></button></a>
<a href="admin_gallery.php"><button class="button" ><span>Gallery</span></button></a>    
<a href="notice_page.php"><button class="button" ><span> Notice </span></button></a>
<a href="show_admin_info.php"><button class="button" ><span> Show Info </span></button></a>
<a href="logout.php"><button class="button" ><span>Logout</span></button></a>
</div>
<!-- ************************ Description *************************** -->

<div style="background-color:#5f2160; color:white;padding:20px; text-align:center; margin:35px;width:91.5%;">
  
  <h2 align="center"> <b></b> ADMIN PAGE</h2> 
  <h3 align="center "> <b> Visitor's Messages and Information </b> </h3>
  
</div>



<?php

	function fetchNotice1(){
		$conn = new mysqli("localhost", "root", "robi", "reg_demo");
		if($conn->connect_error)die("Database connection failed" . $conn->connect_error);
		$result= $conn->query("select * from registration");
		$arr=array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return json_encode($arr);
	}
	$jsn = json_decode(fetchNotice1());

	$c = 1;

	if (isset($_POST['del_id'])){
		if($_POST['input_ID'] != '' ){
			for($i=(sizeof($jsn)-1);$i>=0;$i--){
				if ($_POST['input_ID'] == $jsn[$i]->ID) {
					$c = 2;		
				}
			}
			if ($c == 2) {
			  	$conn->query("delete from registration where id = ".$_POST['input_ID']);
				echo "<script>alert('Information has been deleted.');</script>";
			}else{
				echo "<script>alert('Invalid number.');</script>";
			}
		}
		else{
			echo "<script>alert('Please input an id');</script>";
		}
	}
?>


   <div style="margin: 35px; width: 94.5%;">

        <form action="admin_page.php" method="post" align="right">
            <br><br> <b>
		DELETE ViISITOR'S MESSAGE </b><br>
            <b>INPUT ID : </b>
            <input type="text" name="input_ID" value="" size="11" maxlength="30" />
            <input type="submit" value="DELETE INFO" name="del_id" " />

        </form>
        <br>
		<!-- onclick="showHint(this) -->
      
        <table id="t01">
          <tr>
		<th> ID </th>
		<th> Name </th>
		<th> Phone </th>
		<th> Email </th>
		<th> Message </th>

         </tr>
		 
            <?php 
	$jsn = json_decode(fetchNotice());
	for($i=(sizeof($jsn)-1);$i>=0;$i--){
		echo "<tr>";
	
	echo "<td>".$jsn[$i]->ID."</td>";
	echo "<td>".$jsn[$i]->Name."</td>";
	echo "<td>".$jsn[$i]->Phone."</td>";
	echo "<td>".$jsn[$i]->Email."</td>";
	echo "<td>".$jsn[$i]->Message."</td>";
	echo "</tr>";
	}
	?>
        </table>
		</div>
        <br>
        <br>
        <div align="center">
            <footer>Copyright © 2017 Nicdos Interior. All rights reserved.</footer>
        </div>
</body>

</html>

<?php
}
else{
	header("Location:home_page.php");
}				
	
	
	function fetchNotice(){
		$conn = new mysqli("localhost", "root", "robi", "reg_demo");
		if($conn->connect_error)die("Database connection failed" . $conn->connect_error);
		$result= $conn->query("select * from registration");
		$arr=array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return json_encode($arr);
	}
	
?>
