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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Donate Blood- Login Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

<style>
	html{overflow-x:hidden;}
	</style>
<link href="/donateblood/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<!-- templatemo 358 carousel -->
<!-- 
Carousel Template 
http://www.templatemo.com/preview/templatemo_358_carousel 
-->
<script type="text/javascript" src="/donateblood/js/jquery-1-4-2.min.js"></script> 
<!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script--> 
<script type="text/javascript" src="/donateblood/js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="/donateblood/js/showhide.js"></script> 
<link rel="stylesheet" href="/donateblood/css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="/donateblood/js/jquery.mousewheel.js"></script> 
<script type="text/JavaScript" src="/donateblood/js/slimbox2.js"></script> 

<link rel="stylesheet" type="text/css" href="/donateblood/css/ddsmoothmenu.css" />

<script type="text/javascript" src="/donateblood/js/jquery.min.js"></script>
<script type="text/javascript" src="/donateblood/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 

<style type="text/css">
<!--
.style8 {
	font-size: 14px;
	color: #CC0000;
}
.style9 {color: #CC0000}
.style10 {color: #000000}
-->
</style>
</head>

<body id="subpage">

<div id="templatemo_header_wrapper">
  <div id="site_title">
	<a href="/donateblood/index.html?lang=en&amp;style=style-default"
							class="appbrand pull-left"><img src="/donateblood/images/blood2.jpg" width="200" height="100"></a>
  </div>
      <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="/donateblood/index.html">Home</a></li>
            <li><a href="/donateblood/about.html" >About</a></li>
			<li><a href="/donateblood/services.html">Services</a></li>
            <li><a href="/donateblood/blog.html" >Blog</a></li>
            <li><a href="/donateblood/contact.html" >Contact Us</a></li>
			<li><a href="/donateblood/index.html">Log Out</a>
          </li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->

<div id="templatemo_main">
 
  <br/></p>
<div id="inputs" style="width:500px; height:350px; margin-left:100px; border:3px solid #a1a1a1">
<table width="500" height:350px; border="1" align="center" >
  <tr>
    <th colspan="2" rowspan="7" scope="col">
	<!-- begin table inside table-->

<form id="form1" name="form1" method="post" action="/donateblood/menu/donorslogincon.php">
<span class="style4">Personal Details</span><br/>
ID number:<br/>      
  <input name="ID" type="text" maxlength="8" id="ID" >
  <br/>
First name:<br/>    
<input name="firstname" type="text" maxlength="20" id="firstname" >
<br/>
Last name:<br/> 
<input name="lastname" type="text" maxlength="20" id="lastname" >
<br/>
Email address:<br/>
<input name="email" type="text" maxlength="50" id="email" >
<br/>
Mobile:<br/>  
<input name="mobile" type="text" maxlength="10" id="mobile" >
<br/>
Password:<br/>  
<input name="password" type="password"  id="password" >
<br/>

<br/>

<input name="update" type="submit" id="update" value="Update details"  onClick=""/>
</form>
<p><br/>
<!--second column--></th>
    <th colspan="2" bgcolor="#FFFFFF" scope="col"><span class="style9">Menu</span></th>
  </tr>
  <tr>
    <td width="150" bgcolor="#CC3366"><input name="update" type="submit" id="update" value="Update details"  onclick="location.href='/donateblood/menu/donorsupdate.php'"/></td>
    <td width="1" bgcolor="#CC3366">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CC3366"><input name="password2" type="submit" id="password2" value="Change Password" onclick="location.href='/donateblood/password/donorspassword.php'"/></td>
    <td bgcolor="#CC3366">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CC3366"><input name="hospital" type="submit" id="hospital" value="Search for hospital" onclick="location.href='/donateblood/hospitals/searchhospital.php'"/></td>
    <td bgcolor="#CC3366">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CC3366"><input name="appointment" type="submit" id="appointment" value="Book appointment" onclick="location.href='/donateblood/appointments/donorsappointments.php'"/></td>
    <td bgcolor="#CC3366">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CC3366"><input name="cancel" type="submit" id="cancel" value="Cancel appointment" onclick="location.href='/donateblood/appointments/donorscancel.php'"/></td>
    <td bgcolor="#CC3366">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CC3366">&nbsp;</td>
    <td bgcolor="#CC3366">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><div align="center"></div></td>
  </tr>
</table>
  <br/>
  <br/>
  <br/>
<!-- END of templatemo_main -->
<div id="templatemo_bottom_wrapper">
    <div id="templatemo_bottom">
    	<div class="col one_third">
        	<h4><span></span>Our Services</h4>
            <div class="bottom_box">
                <ul class="footer_list">
                    <li><a href="/donateblood/services.html">Appointments booking</a></li>
                    <li><a href="/donateblood/services.html">Blood donation services</a></li>
                    <li><a href="/donateblood/services.html">Blood transfusion services</a></li>
                    <li><a href="/donateblood/services.html">Health guidance</a></li>
                    
                </ul>  
			</div>
        </div>
        <div class="col one_third">
        	<h4><span></span>Contact us</h4>
            <div class="bottom_box">
			 <p><em> Contact us using the social links. Find contact detailsfor specific hospitals in our <a href="/donateblood/contact.html">Contact Us</a> page. </em></p><br />
                <div class="footer_social_button">
                    <a href="#"><img src="/donateblood/images/facebook.png" title="facebook" alt="facebook" /></a>
                    <a href="#"><img src="/donateblood/images/flickr.png" title="flickr" alt="flickr" /></a>
                    <a href="#"><img src="/donateblood/images/twitter.png" title="twitter" alt="twitter" /></a>
                    
                </div>
			</div>
        </div>
        <div class="col one_third no_margin_right">
        	<h4><span></span>About Us</h4>
            <div class="bottom_box">
                <p><em> Donate Blood is a combined effort of various blood banks to provide a means that 
                helps in conducting blood donation drives, facilitate registration of blood 
                donors and recipients among other blood donation activities.</em></p><br />              
               
            </div>
        </div>
        
    	<div class="cleaner"></div>
    </div> <!-- END of tempatemo_bottom -->
</div> <!-- END of tempatemo_bottom_wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    	Copyright © Donate Blood
    </div> <!-- END of templatemo_footer_wrapper -->
</div> <!-- END of templatemo_footer -->

</body>
</html>


<?php
	 
   // update details
   if (isset($_POST['update'])){
   $ID = $_POST['ID'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $password_hash=md5($password);
  
   if(!empty($ID) && !empty($firstname) && !empty($lastname) && !empty($email) && !empty($mobile) && !empty($password)){
	   if (filter_var($email, FILTER_VALIDATE_EMAIL)){
  
 $query= "UPDATE donorsreg SET firstname='$firstname',lastname='$lastname', email='$email', mobile='$mobile' WHERE ID='$ID' AND password='$password_hash'";
if ($query_run= mysqli_query($con,$query)){
echo 'record sucessfully updated';
}
else{echo 'record not updated. Ensure that your ID number and password are correct';}
}
	    else{
	   echo "invalid email address";
	   }
	   }
  else{echo 'All fields are required'.  mysqli_error($con);}
}

  
?>
