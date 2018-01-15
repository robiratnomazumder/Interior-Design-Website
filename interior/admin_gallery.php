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
    <script>
        function validate() {
            flag = true;
            msg = document.getElementById("m");
            msg1 = document.getElementById("m1");
            category = document.getElementById("ct").value;

            if(category == ''){
                msg1.innerHTML = "<h2>Please choose category</h2>";
                msg1.style.color = "red";
                flag = false;
            }
            else{
                msg1.innerHTML = "";
                flag = true;
            }
            
            if (document.mfm.fileToUpload.value.length == 0) {
                msg.innerHTML = "<h2>file was not choosen</h2>";
                msg.style.color = "red";
                flag = false;
            }
            if (document.mfm.uName.value.length == 0) {
                msg.innerHTML = "<h2>file name is empty</h2>";
                msg.style.color = "red";
                flag = false;
            }
            return flag;
        }

    </script>
    <div style="background-color:#5f2160; color:white;padding:20px; text-align:center; margin:35px;width:92%;">

        <h2> <b></b> Picture Upload</h2>
        <form action="insert.php" method="post" enctype="multipart/form-data" name="mfm">
            <pre>
<h2> Your Name : </h2> <input type="text" name="uName" id="uName">

<h2> Select Category : </h2> 
<select name="ct" id="ct" >
   <option value="" > Category </option>
   <option value="Dining_Room" > Dining Room </option>
   <option value="Drawing_Room" > Drawing Room </option>
   <option value="Bed_Room"  > Bed Room </option>
   <option value="Study_Room"  > Study Room</option>
  <option value="Kitchen_Room" > Kitchen </option>
</select>

<h2> Select image to upload : </h2><input type="file" name="fileToUpload" id="fileToUpload">

<input type="submit" onclick="return validate();" value="Upload File" name="submit" >

</pre>
        </form>
        <p id="m"></p>
        <p id="m1"></p>
        <span><?php if(isset($_SESSION['error'])) echo $_SESSION['error']; ?></span>
</div>


<?php

    function fetchNotice5(){
        $conn = new mysqli("localhost", "root", "robi", "reg_demo");
        if($conn->connect_error)die("Database connection failed" . $conn->connect_error);
        $result= $conn->query("select * from image");
        $arr=array();
        while($row = $result->fetch_assoc()){
            $arr[] = $row;
        }
        return json_encode($arr);
    }
    $jsn = json_decode(fetchNotice5());

    $c = 1;
    $x='';

    if (isset($_POST['del_id'])) {
        if($_POST['input_ID'] != '' ){
            for($i=(sizeof($jsn)-1);$i>=0;$i--){
                if ($_POST['input_ID'] == $jsn[$i]->id) {
                    $c = 2;    
                    $x =  $jsn[$i]->path;
                }
            }
            if ($c == 2) {
                $conn->query("delete from image where id = ".$_POST['input_ID']);
                unlink($x);
                echo "<script>alert('Design has been deleted.');</script>";
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
        <form action="admin_gallery.php" method="post" align="right">
            <br><br> <b>
		    DELETE PICTURE </b><br>
            <b>INPUT ID : </b>
            <input type="text" name="input_ID" value="" size="11" maxlength="30" />
            <input type="submit" value="DELETE PICTURE" name="del_id" />
        </form>
        <br>

        <table id="t01">
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Category </th>
				
				
            </tr>
            <?php 
	$jsn = json_decode(fetchNotice());
	for($i=(sizeof($jsn)-1);$i>=0;$i--){
		echo "<tr>";
			echo "<td>".$jsn[$i]->id."</td>";
			echo "<td>".$jsn[$i]->name."</td>";
			echo "<td>".$jsn[$i]->category."</td>";
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
?>


<?php				
	
	function fetchNotice(){
		$conn = new mysqli("localhost", "root", "robi", "reg_demo");
		if($conn->connect_error)die("Database connection failed" . $conn->connect_error);
		$result= $conn->query("select * from image");
		$arr=array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return json_encode($arr);
	}
	
?>
