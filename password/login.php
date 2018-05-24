<?php 
$con=mysqli_connect("localhost","id1404203_lilian","lilian94","id1404203_vibe");

$password=@$_POST["password"];
$username=@$_POST["username"];


$statement=mysqli_prepare($con,"Select * FROM user WHERE password=? AND username=?  ");
mysqli_stmt_bind_param($statement,"ss",$password,$username);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement,$userID,$age,$username,$password);
$response=array();
$response ["success"]= false;
 
 while (mysqli_stmt_fetch($statement)){
	 $response["success"]=true;
     $response["name"]=$name;
	 $response["age"]=$age;
	 $response["password"]=$password;
	 $response["username"]=$username;
	 
 }

echo json_encode($response);

?>