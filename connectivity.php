<?php
//connecting to database
$servername="mysql6.gear.host";
$username="donateblood";
$password="@lilian94";
$dbname="donateblood";


$con=new mysqli($servername,$username,$password,$dbname) or die("failed to connect to server");
if (mysqli_connect_error()){
die("connection failed:".mysqli_connect_error());
}
