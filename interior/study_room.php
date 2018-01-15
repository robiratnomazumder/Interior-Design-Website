<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/gallery.css">
    <div align="center">
        <header>
            <img src="upload_pic/logo.jpg">
        </header>
    </div>
    <title>Study Room</title>
</head>

<body style="background-color: #FFFFFF">

    <!-- ************************ Buttons *************************** -->
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
        <a href="contact_page1.php"><button class="button" ><span>Contact</span></button></a>
    </div>
    <!-- ************************ Description *************************** -->

    <div style="background-color:#5f2160; color:white;padding:20px; text-align:center; margin:35px;width:95%;">

        <h2> <b></b> Picture gallery </h2>

        <h4> STUDY ROOM </h4>

        <?php
require("fetch_pic.php");
$jsonData= getJSONFromDB("select * from image where category = 'Study_room'; ");
$jsn=json_decode($jsonData);
?>

            <tr>
                <?php
for($i=0;$i<sizeof($jsn);$i++){
	  ?>
                    <div>

                        <td>
                            <?php echo $jsn[$i]->name; ?>
                        </td>

                        <td>
                            <img class="picture" src="<?php echo $jsn[$i]->path;?>">
                        </td>

                    </div>
                    <?php	
}
?>
            </tr>
    </div>
    <div align="center">
        <footer>Copyright © 2017 Nicdos Interior. All rights reserved.</footer>
    </div>
</body>

</html>
