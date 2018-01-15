
<?php
session_start();
$u=$_POST['username'];
$p=$_POST['password'];

  require("mysql-to-json.php");
  $jsonData= getJSONFromDB("select * from signup");
  $flag=0;
  $jsn=json_decode($jsonData);
  for($i=0;$i<sizeof($jsn);$i++){
		if($_POST['username'] == trim($jsn[$i]->username) && $_POST['password'] == trim($jsn[$i]->password)){
			//$flag=1;
			$_SESSION["flag"]="ok";
			$flag=1;
		}
}
if($flag==1){
	header("Location:admin_page.php");
}
else{
    ?> <script> alert("pppp"); </script> <?php
	header("Location:home_page.php");
} 


?>