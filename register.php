<?php 
$con=mysqli_connect("localhost","id1404203_lilian","lilian94","id1404203_vibe");


$name=$_POST["name"];
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password'"];


$Statement=mysqli_prepare($con"INSERT INTO user (name,age,username,password) VALUES (?,?,?,?)");
mysqli_stmt_bind_param($Statement,"siss",$userID,$name,$email,$password,$username);

 mysqli_stmt_execute($Statement);
	 
 
$response = array();
$response["success"]=true;
 

echo json_encode(@$response);
?>
