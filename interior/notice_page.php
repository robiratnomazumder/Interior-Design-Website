<?php
session_start();

$conn = new mysqli("localhost", "root", "robi", "reg_demo");    
if($conn->connect_error)die("Database connection failed" . $conn->connect_error);

$signal="";
if(isset($_SESSION["flag"]))
$signal=$_SESSION["flag"];

if($signal=="ok"){
?>


<!DOCTYPE html>
<html>

<head>
    <title>Notice Board</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="CSS/notice.css">
    <div align="center">
        <header>
            <img src="upload_pic/logo.jpg">
        </header>
    </div>
</head>

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

    <div style="background-color:#5f2160; color:white;padding:20px; text-align:center; margin:35px;width:92%;">

        <h2> <b></b> Notice </h2>
    </div>
	
    <form action="notice_page.php" method="post" align="center">
        <b> NEW NOTICE: </b><br>
        <textarea name="theNotice" style="height:80px;width:500px">
    </textarea>
        <br>
        <input type="submit" value="SUBMIT" name="newNotice" />
    </form>
	
<?php
	function fetchNotice1(){
		$conn = new mysqli("localhost", "root", "robi", "reg_demo");
		if($conn->connect_error)die("Database connection failed" . $conn->connect_error);
		$result= $conn->query("select * from notice");
		$arr=array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return json_encode($arr);
	}
	$jsn = json_decode(fetchNotice1());

	$c = 1;

	if (isset($_POST['delNotice'])){
		if($_POST['noticeID'] != '' ){
			for($i=(sizeof($jsn)-1);$i>=0;$i--){
				if ($_POST['noticeID'] == $jsn[$i]->id) {
					$c = 2;		
				}
			}
			if ($c == 2) {
			  	$conn->query("delete from notice where id = ".$_POST['noticeID']);
				echo "<script>alert('Notice has been deleted.');</script>";
			}else{
				echo "<script>alert('Invalid number.');</script>";
			}
		}
		else{
			echo "<script>alert('Please input an id');</script>";
		}
	}
?>
	
    <?php
	if(isset($_POST['newNotice']) && $_POST['theNotice'] !== ""){
		$conn = new mysqli("localhost", "root", "robi", "reg_demo");	
		if($conn->connect_error)die("Database connection failed" . $conn->connect_error);
		$conn->query("insert into notice values(null, current_timestamp,'".$_POST['theNotice']."')");
	}
?>

        <form action="notice_page.php" method="post" align="right">
            <br><br> <b>
		DELETE NOTICE </b><br>
            <b>INPUT ID : </b>
            <input type="text" name="noticeID" value="" size="11" maxlength="30" />
            <input type="submit" value="DELETE NOTICE" name="delNotice" />

        </form>
        <br>

        <table id="t01">
            <tr>
                <th> ID </th>
                <th> NOTICE </th>
                <th> DATE & TIME </th>
            </tr>
            <?php 
	$jsn = json_decode(fetchNotice());
	for($i=(sizeof($jsn)-1);$i>=0;$i--){
		echo "<tr>";
			echo "<td>".$jsn[$i]->id."</td>";
			echo "<td>".$jsn[$i]->text."</td>";
			echo "<td>".$jsn[$i]->timeinfo."</td>";
			echo "</tr>";
	}
	?>
        </table>
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
?>


<?php				
	
	function fetchNotice(){
		$conn = new mysqli("localhost", "root", "robi", "reg_demo");
		if($conn->connect_error)die("Database connection failed" . $conn->connect_error);
		$result= $conn->query("select * from notice");
		$arr=array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return json_encode($arr);
	}
	
/* 	function deleteNotice($id){
		$conn = new mysqli("localhost", "root", "", "reg_demo");
		if($conn->connect_error)die("Database connection failed" . $conn->connect_error);
		$result= $conn->query("delete from notice where id =".$id);
	} */
	
?>
