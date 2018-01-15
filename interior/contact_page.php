<?php 
try{
$con = new PDO ("mysql:host = localhost;dbname=reg_demo","root","robi");

   $name  = $_POST['name']; 
   $phone = $_POST['phone'];  
   $email = $_POST['email'];  
   $message = $_POST['message'];  
   
   if($name != NULL && $phone != NULL && $email != NULL && $message != NULL){
   $insert = $con -> prepare ("INSERT INTO registration (name,phone,email,message) 
   values(:name,:phone,:email,:message)");
   
   $insert -> bindParam (':name',$name);
   $insert -> bindParam (':phone',$phone); 
   $insert -> bindParam (':email',$email); 
   $insert -> bindParam (':message',$message); 
   $insert -> execute();
   header('Location: contact_page_user.php');
     }
	 else echo "error";
   }
 
catch(PDOException $e){
echo "error".$e-> getMessage();
}
?>