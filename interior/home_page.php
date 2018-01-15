
<?php
    session_start();
    if(isset($_SESSION["flag"]))
        header("Location:admin_page.php");

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
    <div align="center">
        <header>
            <img src="upload_pic/logo.jpg">
        </header>
    </div>
    <title>Home</title>
</head>

<body style="background-color: #FFFFFF">

    <!-- ************************** Buttons ************************** -->
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

    <!-- ************************** Slideshow ************************** -->

    <div class="slideshow-container">

        <div class="mySlides fade">

            <img src="111.jpg" style="width:100%">
            <div class="text"> Design </div>
        </div>

        <div class="mySlides fade">

            <img src="222.jpg" style="width:100%">
            <div class="text"> Design </div>
        </div>

        <div class="mySlides fade">

            <img src="444.jpg" style="width:100%">
            <div class="text"> Design </div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

    </script>

    <!-- ************************** Services detail ************************** -->

    <div style="background-color:#5f2160; color:white;padding:20px; text-align: center;margin: 14px;">
        <h1> <b> Services</b> </h1>
		<h3>Interior Design</h3>
		<p>Interior Studio believes natural interactive human need in design.Our design approach differs from other firms in that we measure the performance of people, not space.Our emphasis is on creativity, productivity, comfort, collaboration and privacy, flexibility, health, and sustainability.Our goal is to build environments that balance health, culture, life and work, while supporting the family.</p>
		<h3>Graphics Design</h3>
        <p>Interior Studio set a standard in Graphic Design in Bangladesh. Our graphic designers offer solution for effective identity creation, logo design, print, info-graphics and other applications.Our team of expert graphics designers & latest software makes sure more realistic image view.</p>
        </td>
		
    </div>

    <!-- ************************** button for admin use ************************** -->

    <div class="col-container">
        <div class="col" style="background:#d2a7f2; width:500px;height:350px;">
            <h2 style="font-size:24px;"> About NICDOS  </h2>
            <img src="logo_little.jpg" alt="logo" style="width:100px;height:100px;">
			<p style="font-size:18px;" > NICDOS interior and home decor
			is an exclusive Interior design firm in Bangladesh. We offer state-of-the-art interior design solution
			through turnkey interior system. It is a specialized Interior firm for Residential & Commercial 
			interior industry in Bangladesh.</p>
			
			

        </div>
		
		
		<div class="col" style="background:#8f96d6; width:500px;height:350px;">
            <h2 style="font-size:24px;"> Our Mission </h2>
			<br>
			<br> 
			<p style="font-size:18px;" > We wanted to change today's very usual concept of interior designing, new idea, 
			creativity, simplicity and customer satisfaction such stuff are highly involved with our creative mission. 
			Fine art is the mother of all arts so our professional, skilled artists can provide aesthetic sense you make 
			success of your own dream. Anyone can recognize that our work is completely innovative then others.</p>
			
			

        </div>
		
		
        <div class="col" style="background:#574c66; text-align: center">
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <form action="check_login.php" method="post">
                        <h1> ADMIN LOGIN ONLY</h1>
                        <b> USER ID </b>
                        <input type="text"  name="username" placeholder="User Id ...">
                        <br> <br>
                        <b> PASSWORD </b>
                        <input type="password"  name="password" placeholder="Password...">
                        <br>
                        <br>
                        <input type="submit" class="btn_login_btn default" style="background-color: green" value="LOGIN">

                        <a href="javascript:void(0)" class="closebtnn" onclick="closeNav()">
                            <input type="button" class="btn_login_btn default" style="background-color: red" value="CANCEL">
                        </a>

                    </form>
                </div>
            </div>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">
<br> <br>
<br> <br>
<button class="btn_login_btn default" > ONLY FOR ADMIN</button>
</span>

            <script>
                function openNav() {
                    document.getElementById("myNav").style.height = "100%";
                }

                function closeNav() {
                    document.getElementById("myNav").style.height = "0%";
                }

            </script>
        </div>
    </div>

    <div align="center">
        <footer>Copyright © 2017 Nicdos Interior. All rights reserved.</footer>
    </div>

</body>

</html>
