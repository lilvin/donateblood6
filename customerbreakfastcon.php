<?php

//connecting to database
$servername="localhost";
$username="root";
$password="@lilian94";
$dbname="online fast food";

$con=new mysqli($servername,$username,$password,$dbname) or die("failed to connect to server");
if (mysqli_connect_error()){
die("connection failed:".mysqli_connect_error());
}



	//////full menu 
	 if (isset($_POST['all']))
{
  
  $query ="SELECT itemno,name,price,description FROM breakfast";
  
 


  if ($query_run= mysqli_query($con,$query)){
  	
        if(mysqli_num_rows($query_run)>0){
		  echo "<table border='1'>
 <tr>
  <th> itemno</th>
  <th> name</th>
  <th> price</th>
  <th> description</th>
  </tr>";
   
   while($row= mysqli_fetch_assoc($query_run)){

echo "<tr>";
echo "<td>".$row['itemno']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['price']."</td>";
echo "<td>".$row['description']."</td>";
echo "</tr>";

}
echo "</table>";
         }
	 else{echo 'No menu items'.  mysqli_error($con);} 
   }
   
   else{echo 'Failed to select details from database'.  mysqli_error($con);}
   
        }



?>


