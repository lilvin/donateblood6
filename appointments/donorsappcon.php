<?php
//connecting to database
$servername="localhost";
$username="root";
$password="";
$dbname="donate blood";


$con=new mysqli($servername,$username,$password,$dbname) or die("failed to connect to server");
if (mysqli_connect_error()){
die("connection failed:".mysqli_connect_error());
}



 if (isset($_POST['book'])){
 $ID = $_POST['ID'];
 $mobile = $_POST['mobile'];
  $location = $_POST['location'];
   $hospital = $_POST['hospital'];
    $date = $_POST['date'];
	  if(!empty($ID)&& !empty($mobile)  && !empty($location) && !empty($hospital) && !empty($date)){
	   
	   $sql = "INSERT INTO donorsappointments(ID,mobile,location,hospital,date) VALUES ('$ID','$mobile','$location','$hospital','$date')";
	   
	   if($con->query($sql)===TRUE)
	   {
	   echo"booking successfull. You will be contacted for further guidance.";
	   }
	   else{
	   echo "Error:" . $sql. "<br>" . $con->error;
	   }
	   $con->close();
	   }
	    else{echo 'Please insert all booking details'.  mysqli_error($con);}
	   }
	   
	   
	   
	   //cancel appointment
	   if (isset($_POST['cancel']))
{
$ID = $_POST['ID'];
$date =$_POST['date'];
  $password =$_POST['password'];
 
  
  if(!empty($ID) && !empty($password)){
  $query ="SELECT * FROM donorsreg WHERE (ID='$ID' AND password='$password')";
  
  if ($query_run= mysqli_query($con,$query)){
  	
        if(mysqli_num_rows($query_run)==1){
   
   echo 'yees';
   while($row= $query_run->fetch_assoc()){
  if (isset($_POST['delete'])){

 $ID = $_POST['ID'];
 
 $query= "DELETE FROM donorsappointments WHERE ID='$ID' AND date='$date'";
if ($query_run= mysqli_query($con,$query)){
echo 'record sucessfully deleted';
}
else{echo 'An error occured..record not deleted';}
}

}
         }
	 else{echo 'Wrong ID/password combination'.  mysqli_error($con);} 
   }
   
   else{echo 'Failed to select details from database'.  mysqli_error($con);}
   }
  else{echo 'Please insert your ID number and password'.  mysqli_error($con);}
     }
?>

