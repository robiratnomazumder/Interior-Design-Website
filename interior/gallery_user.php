<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/gallery_user.css">
    <div align="center">
        <header>
            <img src="upload_pic/logo.jpg">
        </header>
    </div>
    <title>Gallery</title>
</head>

<body style="background-color: #FFFFFF">


    <!-- ************************ Buttons *************************** -->

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

    <!-- ************************ Description *************************** -->

    <div style="background-color:#5f2160; color:white;padding:35px; text-align:center;  margin: 10px; width: 93%;">

        <h1> <b></b> Picture gallery </h1>

        <h3> LIST </h3>

        <div class="vertical-menu">
            <a href="" class="active"> <b> <h2> DESIGN CATEGORY </h2></b> </a>
            <a href="category_dining_room.php">
                <h2 style="color:#5f2160;"> <b>DINING ROOM  </b> </h2>
            </a>
            <a href="category_drawing_room.php">
                <h2 style="color:#5f2160;"> <b>  DRAWING ROOM </b> </h2>
            </a>
            <a href="category_bed_room.php">
                <h2 style="color:#5f2160;"> <b>BED ROOM </b> </h2>
            </a>
            <a href="category_study_room.php">
                <h2 style="color:#5f2160;"> <b>STUDY ROOM </b> </h2>
            </a>
            <a href="category_kitchen_room.php">
                <h2 style="color:#5f2160;"> <b>KITCHEN </b> </h2>
            </a>

        </div>

    </div>

    <div align="center">
        <footer>Copyright © 2017 Nicdos Interior. All rights reserved.</footer>
    </div>

</body>

</html>