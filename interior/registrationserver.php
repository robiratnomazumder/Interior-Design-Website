<pre>
<?php
 if(strlen($_REQUEST['firstName'])>0 && strlen($_REQUEST['lastName'])>0 && $_REQUEST['day']!="day" && 
 $_REQUEST['month']!="month" && $_REQUEST['year']!="year" && strlen($_REQUEST['gender'])>0 && strlen($_REQUEST['phone'])>0 
 && strlen($_REQUEST['email'])>0 && strlen($_REQUEST['password'])>0 && strlen($_REQUEST['confirmPassword'])>0){

	if(strlen($_REQUEST['phone'])==11){
		
		if($_REQUEST['password'] == $_REQUEST['confirmPassword']){

			if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL) === false) {
				  require("mysql-to-json.php");
				  if(insert("INSERT INTO signup(fname,lname,day,month,year,gender,phone,email,username,password,conf_password) VALUES('".$_REQUEST['firstName']."','".$_REQUEST['lastName']."','".$_REQUEST['day']."'
				  ,'".$_REQUEST['month']."','".$_REQUEST['year']."','".$_REQUEST['gender']."','".$_REQUEST['phone']."','".$_REQUEST['email']."'
				  ,'".$_REQUEST['uname']."','".$_REQUEST['password']."','".$_REQUEST['confirmPassword']."')")>0){
						  
						  ?> 
						  <script>  //alert("successful"); </script> 
						  <?php
						  
					   }
					   
			
		}
		else{
			
				echo "<br/>Sorry invalid email!";
			}
			
		}
		else{
			echo "<br/>Sorry password mismatched!";
			
		}
	}
	else{
			echo "<br/>phone number invalid!";
			
		}
		
		 header("Location:signup_page.php");
}
	
	
else{
	echo "error";
}
?>

</pre>