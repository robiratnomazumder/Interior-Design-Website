<?php
session_start();

$signal="";
if(isset($_SESSION["flag"]))
$signal=$_SESSION["flag"];

if($signal=="ok"){
?>



<!doctype html>
<title>Signup</title>

<link rel="stylesheet" type="text/css" href="CSS/signup.css">
<div align="center">
    <header>
        <img src="upload_pic/logo.jpg">
    </header>
</div>

<script>
    var fn, ln, pas, cpas, ema, phn, un = false;

    function check_fn(e) {
        if (e.value.length > 0) {
            fn = true;
            fn_msg.innerHTML = "Firstname is OK";
        } else {
            fn = false;
            fn_msg.innerHTML = "Firstname must be filled out";
        }
    }

    function check_ln(e) {
        if (e.value.length > 0) {
            ln = true;
            ln_msg.innerHTML = "Lastname is OK";
        } else {
            ln = false;
            ln_msg.innerHTML = "Lastname must be filled out";
        }
    }

    function check_phone(e) {
        var numbers = /^[0-9]+$/;
        if (e.value.match(numbers)) {
            phn = true;
            phn_msg.innerHTML = "Phone is OK";
        } else {
            phn = false;
            phn_msg.innerHTML = "Please Input Numeric Characters Only";
        }
    }

    function check_pass(e) {
        if (e.value.length > 6) {
            pas = true;
            ps_msg.innerHTML = "Password is ok";
        } else {
            pas = false;
            ps_msg.innerHTML = "Password is not ok";
        }
    }

    function check_conpass(e) {
        if (e.value == document.myfm.password.value) {
            cpas = true;
            cnps_msg.innerHTML = "Matched";
        } else {
            cpas = false;
            cnps_msg.innerHTML = "Not matched";
        }
    }

    function check_email(e) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(e.value)) {
            ema = true;
            eml_msg.innerHTML = "Email is OK!";
        } else {
            ema = false;
            eml_msg.innerHTML = "Invalid Email Address";
        }
    }

    function check_uname(e) {
        if (e.value.length > 5) {
            un = true;
          //  showUname();
		  showUname();
        } else {
            un = false;
            uname.msg.innerHTML = "Invalid Username";
        }
    }

    function check_submit(elm) {
        if(document.myfm.firstName.value == '' || document.myfm.lastName.value == '' || document.myfm.gender.value == '' || 
		document.myfm.year.value == '' || document.myfm.year.value == '' || document.myfm.gender.value == '' ){
            alert("Please fill all value");
        }
        else{
            if (document.myfm.day.value != "day" && document.myfm.month.value != "month" && document.myfm.year.value != "year" && document.myfm.gender.value.length > 0 && fn == true && ln == true && phn == true && pas == true && cpas == true && ema == true) {
                if (elm.getAttribute("type") == "button") {
                    document.myfm.submit();
                } else {
                    alert("Error occurs!");
                }
            }
        }
    }

 
 xmlhttp = new XMLHttpRequest();

        function showUname() {
            str = document.getElementById("unm").value;

            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    uname_msg.innerHTML = xmlhttp.responseText;
                }
            };
            var url = "json.php?uname=" + str;
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }
		
</script>

<html>

<head>
    <title>Registration page</title>
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
	
	
    <h2 align="center" style="font-size:40px;color:#5f2160">Signup</h2><br>

    <div class="container">
        <form action="registrationserver.php" method="post" name="myfm" align="left">
            First Name : <br/>
            <input type="text" name="firstName" onkeyup="check_fn(this)">
            <a id="fn_msg"> </a> <br/> Last Name : <br/>
            <input type="text" name="lastName" value="" onkeyup="check_ln(this)">
            <a id="ln_msg"> </a><br/> Date of Birth : <br/>
            <select name="day">
				<?php
for ($i=0; $i<=31; $i++){
	
	if($i == 0){
		
		echo "<option value='day'>Day</option>";
		
	}
	
	else{
		
		echo "<option value=$i>$i</option>";
		
	}
	
}

?>
			</select>
            <select name="month">
				<?php
for ($i=0; $i<13; $i++){
	
	if($i == 0){
		
		echo "<option value='month'>Month</option>";
		
	}
	
	else{
		
		echo "<option value=$i>$i</option>";
		
	}
	
}

?>
			</select>

            <select name="year">
				<?php
for ($i=1970; $i<2017; $i++){
	
	if($i == 1970){
		
		echo "<option value='year'>Year</option>";
		
	}
	
	else{
		
		echo "<option value=$i>$i</option>";
		
	}
	
}

?>
			</select><br/> Gender : <br><br>
            <input type="radio" name="gender" value="male" selected>Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="other">Other<br/><br> Phone : <br/>
            <input type="text" name="phone" placeholder="Phone.." onkeyup="check_phone(this)">
            <a id="phn_msg"> </a><br/> Email : <br/>
            <input type="text" name="email" placeholder="Email.." onkeyup="check_email(this)">
            <a id="eml_msg"> </a><br/> Username:
            <br/>
            <input type="text" name="uname" id="unm" value="" onkeyup="check_uname(this)">
            <a id="uname_msg"> </a><br/> Password : <br/>
            <input type="password" name="password" value="" onkeyup="check_pass(this)">
            <a id="ps_msg"> </a><br/> Confirm password : <br/>
            <input type="password" name="confirmPassword" value="" onkeyup="check_conpass(this)">
            <a id="cnps_msg"> </a><br/>
            <br>
            <input type="button" value="Submit" onclick="check_submit(this)" name="btn"> <br/>
        </form>
    </div>
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