<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="text.css" />
<html>
<title>WELCOME</title>
  <head>
    </head>
    <body>
      <div id="over">
       <img src="account-normal.png" alt="Logo" align="middle">
       </div>
       <div id="menu">
         <ul  id="l1">
 <li class="l2" id ="active"><a href="index.html">Home</a></li>
 <li class="l2"><a href="vision.html">Vision</a></li>
 <li class="l2"><a href="veerendra.html">Veerendra's page</a></li>
 <li class="l2"><a href="blog">Blog</a></li>
 <li class="l2" style="float:right"><a  href="#about">About</a></li>
 <li class="l2"><a href="https://www.zoho.com/mail/login.html">Mail</a></li>
 <li class="l2"><a href="">Projects</a></li>
</ul>
</div>
<?php
$servername = "iot.csv7wbh4hjy3.us-west-2.rds.amazonaws.com:3306";
$username = "nath";
$password = "Sainath.3";

// Create connection
$link = mysqli_connect($servername, $username, $password,"iot");
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$sql="SELECT BUTTON FROM IOT";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
echo "id".$row["BUTTON"]."</br>";

?> 
</body>
</html>
