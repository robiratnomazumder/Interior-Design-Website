<?php

$con = mysqli_connect("localhost","root","robi");
mysqli_select_db($con,"reg_demo");

$sql = "delete from registration where ID ='$GET[id]'";

if(mysqli_query($con,$sql))
  header("refresh:1 url=admin_page.php");
  else echo "not deleted";
 
 ?>