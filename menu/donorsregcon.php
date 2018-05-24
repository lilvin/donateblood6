<?php
//connecting to database
$servername="localhost";
$username="root";
$password="";
$dbname="donate blood";


$con=new mysqli($servername,$username,$password,$dbname) or die("failed to connect to MySQL:".mysql_error());
if ($con->connect_error){
die("connection failed:".$con->connect_error);
}


//inserting record
 $ID = $_POST['ID'];
  $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
    $email = $_POST['email'];
	 $mobile = $_POST['mobile'];
	  $password = $_POST['password'];
	  $password_hash=md5($password);
	  
	  if(!empty($ID) && !empty($firstname) && !empty($lastname) && !empty($email) && !empty($mobile) && !empty($password)){
	   if (filter_var($email, FILTER_VALIDATE_EMAIL)){	   
	   
	   $sql = "INSERT INTO donorsreg(ID,firstname,lastname,email,mobile,password) VALUES ('$ID','$firstname','$lastname','$email','$mobile','$password_hash')";
	   
	   if($con->query($sql)===TRUE)
	   {
	   echo"registration successfull";
	   }
	   else{
	   echo "registration failed. You might have entered an existing email address or ID number.";
	    }
		}
	    else{
	   echo "invalid email address";
	   }
	   }
  else{echo 'All fields are required'.  mysqli_error($con);}
     
	   $con->close();
?>
