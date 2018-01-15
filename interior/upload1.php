

<?php
session_start();

$conn = mysqli_connect("localhost", "root", "robi","reg_demo");

$uploadOk = 1;
$target_dir = "upload_pic/";
$target_file = $target_dir .$_FILES['fileToUpload']['name'];;
echo $target_file."<br>";
echo $_FILES["fileToUpload"]["tmp_name"]."<br>";
//$uploadOk = 1;
// Check if image file is a actual image or fake image

    if (file_exists($target_file)) {
      $_SESSION['error'] = 'Sorry, file already exists.<br>';
      header('location:admin_gallery.php');
       $uploadOk = 0;
    }
	/* else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
       && $imageFileType != "gif" ) {
       echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."."<br>";
       $uploadOk = 0;
	   } */
	else{
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$sql="insert into image (path,name,category) values('".$target_file."','".$_REQUEST['uName']."','".$_REQUEST['ct']."')";
		$result = mysqli_query($conn, $sql)or die(mysqli_error());
		echo $sql."<br>";
        echo "The file ".  $_FILES["fileToUpload"]["name"]. " has been uploaded<br>";
        $_SESSION['error'] = '';
        header('location:admin_gallery.php');
    }else {
        $_SESSION['error'] = 'Sorry, there was an error uploading your file<br>';
        header('location:admin_gallery.php');
    }
	}
?>


