<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="vee.css" />
<title>Veerendra</title>
<head>
  </head>
  <body>
  </div>
  <div id="menu">
    <ul  id="l1">
      <li class="l2" ><a href="index.php">Home</a></li>
      <li class="l2"><a href="vision.php">Vision</a></li>
      <li class="l2" id ="active"><a href="veerendra.php">Veerendra's page</a></li>
      <li class="l2"><a href="blog">Blog</a></li>
<li class="l2" style="float:right"><a href="#about">About</a></li>
<li class="l2"><a href="https://www.zoho.com/mail/login.html">Mail</a></li>
 <li class="l2"><a href="">Projects</a></li>
</ul>
</div>
    <h1 id= "head" class="maint" >Veerendra Nath</h1>
    <h3 class="maint">Info will update soon</h3>
     <?php
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    fwrite($myfile, date("Y-m-d"));
    fwrite($myfile,"   ");
    fwrite($myfile, $_SERVER['REMOTE_ADDR'] );
    fwrite($myfile,"   ");
    fwrite($myfile,$_SERVER ['HTTP_USER_AGENT']);
    fwrite($myfile," nath  \n");
    fclose($myfile);
  
     ?>
    <footer id="footer"><pre>Copyrights 2016  version: 30-07/16(alpha)</pre></footer>
  </body>

</html>
