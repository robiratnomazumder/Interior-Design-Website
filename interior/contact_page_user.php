<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>

    <link rel="stylesheet" type="text/css" href="CSS/contactpage.css">
    <div align="center">
        <header>
            <img src="upload_pic/logo.jpg">
        </header>
    </div>

    <script>
        var nm, phn, eml = false;

        function check_name(e) {
            if (e.value.length > 0) {
                nm = true;
                name_msg.innerHTML = "Name is OK";
            } else {
                nm = false;
                name_msg.innerHTML = "Name must be filled out";
            }
        }

        function check_phone(e) {
            var numbers = /^[0-9]+$/;
            if (e.value.match(numbers)) {
                phn = true;
                phone_msg.innerHTML = "Phone number is OK!";
            } else {
                phn = false;
                phone_msg.innerHTML = 'Please input numeric characters only';
            }
        }

        function check_email(e) {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(e.value)) {
                eml = true;
                email_msg.innerHTML = "E-mail is OK";
            } else {
                eml = false;
                email_msg.innerHTML = "Email Address format is Invalid!";
            }
        }

        function check_submit(elm) {
		    if(document.myfm.name.value == '' || document.myfm.phone.value == '' || document.myfm.email.value == '' || 
		document.myfm.message.value == '' ){
            alert("Please fill all value");
        }
		else{
            if (nm == true && phn == true && eml == true) {
                if (elm.getAttribute("type") == "button") {
                    document.myfm.submit();
                } else {
                    alert("Error occurs!");
                }
            }
		}
     }
/*
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
        } */
    </script>

</head>

<body>

    <!-- ****************************** Buttons ******************************** -->
    <div align="center">
        <a href="home_page.php"><button class="button" ><span>Home</span></button></a>
        <a href="about_page.php"><button class="button" ><span>About Us</span></button></a>
        <a href="service_page.php"><button class="button" ><span>Services</span></button></a>

        <div class="dropdown">
            <button class="dropbtn">Gallery</button>
            <div class="dropdown-content">
                <a href="bed_room.php">Bedroom</a>
                <a href="dining_room.php">Dining Room</a>
                <a href="drawing_room.php">Drawing Room</a>
                <a href="kitchen_room.php">Kitchen</a>
                <a href="study_room.php">Study Room</a>
            </div>
        </div>

        <a href="project_page.php"><button class="button" ><span>Project</span></button></a>
        <a href="contact_page_user.php"><button class="button" ><span>Contact</span></button></a>
    </div>

    <div class="col-container">

        <div style="background-color:#d2a1f2; color:white;padding:20px; text-align:center; margin:35px;width:95%;">
            <h1 align="center" style="color:black"><b>Office Address</b></h1>
            <h2> Visit us at: </h2>
            <address>
        House # 559<br> West Shewrapara, Mirpur<br> Dhaka, Bangladesh<br><br> Cell: 01990-251277<br><br> Email us for query
        at: nicdosinterior17@gmail.com<br>
        <br>
        <a href="https://www.facebook.com/nicdosinterior/" target="_blank">Visit Our Facebook Page </a>
      </address>
        </div>


        <div class="col" style="background:white; text-align: left;width:50%;height:100px;">

            <h1 align="center" style="color:#5F2160">Contact Form</h1>
            <br>
            <div class="container">


                <form action="contact_page.php" method="post" name="myfm" align="left">

                    <i> <b> Name: </b> </i>
                    <input type="text" name="name" placeholder="Your name..." onkeyup="check_name(this)">
                    <a id="name_msg"></a> <br> <br>
                    <i> <b> Phone: </b> </i>
                    <input type="text" name="phone" placeholder="Your phone..." onkeyup="check_phone(this)">
                    <a id="phone_msg"></a> <br> <br>
                    <i> <b> E-mail: </b> </i>
                    <input type="text" name="email" placeholder="example@example.com" onkeyup="check_email(this)">
                    <a id="email_msg"></a> <br> <br>
                    <i> <b> Message: </b> </i>
                    <textarea type="text" name="message" placeholder="Your Message..." style="height:100px"></textarea >  <a id="msg"></a><br> <br>  
<div style="text-align:center"> <!-- <input type = "submit" name="send" value = " SEND INFO & MESSAGE"> -->
 <input type="button" value=" SEND INFO & MESSAGE" onclick="check_submit(this)" > </div>
 </form>
 </div>
  </div>
</div>


<!--   //////////////////////////////    map       //////////////////////////////  --> 

<div class="col-container">
    <div class="col" style="background:black; width:520px;height:310px;"  id="googleMap1" >  
<br>  
   <script>
    function myMap() {
      var mapOptions1 = {
        center: new google.maps.LatLng(23.788010, 90.374754),
        zoom: 20,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map1 = new google.maps.Map(document.getElementById("googleMap1"), mapOptions1);
    }

  </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6YpR5Js2UUGVv1iNxuPLgF3-9XIrm2Pc&callback=myMap"></script>

<div align="center">
  <footer>Copyright © 2017 Nicdos Interior. All rights reserved.</footer>
</div>
    </div></div>

        </body>
</html>