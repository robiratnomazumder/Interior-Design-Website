<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
    <div align="center">
        <header>
            <img src="upload_pic/logo.jpg">
        </header>
    </div>
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
        <a href="contact_page_user.php"><button class="button" ><span>Contact</span></button></a>
    </div>
    <!-- ************************ Description *************************** -->

    <div style="background-color:#5f2160; color:white;padding:20px; text-align:left; margin:35px;width:95%;">

        <h2 align="center" style="font-size:28px;"> <b></b> About Us</h2>

        <?php ?>

        <table>
            <tr>

                <th style="font-size:24px;"> About NICDOS</th>
                <th></th>
                <th style="font-size:24px;">Why NICDOS?</th>

            </tr>

            <tr>
                <td>
                    <img src="logo_little.jpg" alt="logo" style="width:100px;height:100px;">
                    <p style="font-size:20px;"> NICDOS interior and home decor is an exclusive Interior design <br> firm in Bangladesh. We offer state-of-the-art interior design solution. <br>It is a specialized Interior firm for Residential & Commercial
                        <br> interior industry in Bangladesh.</p>
                </td>

                <td>
                    <div class="vertical-line" style="height: 350px;">
                </td>

                <td>
                    <p style="font-size:20px;">Affordable Interior Solution</p><br>
                    <p style="font-size:20px;">"WOW" Factor in Interior</p><br>
                    <p style="font-size:20px;">Save Time, Save Money & Be your Advocate</p><br>
                    <p style="font-size:20px;">Wide range of Resources & Services</p>
                </td>

            </tr>

        </table>
        </div>

        <div style="background-color:#5f2160; color:white;padding:20px; text-align:left; margin: 35px; width: 95%;">
            <h2 align="center"> <b></b> Designers</h2>
            <table>
                <tr>
                    <td>
                        <img src="upload_pic/naila.png" alt="naila islam" style="width:130px;height:130px;">
                        <p style="font-size:20px;"> Naila Islam </p>
                    </td>

                    <td>
                        <div class="vertical-line" style="height: 350px;">
                            </td>

                    <td>
                        <img src="upload_pic/jesin.png" alt="Jesin" style="width:130px;height:130px;">
                        <p style="font-size:20px;"> Jasin Khan </p>
                    </td>

                </tr>
            </table>
            </div>
            <div align="center">
                <footer>Copyright © 2017 Nicdos Interior. All rights reserved.</footer>
            </div>
</body>

</html>
