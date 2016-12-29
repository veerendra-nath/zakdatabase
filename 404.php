<!DOCTYPE html>
<meta charset="utf-8">
<html>
<body>
<link rel="stylesheet" type="text/css" href="text.css" />
<div id="menu">
  <ul  id="l1">
<li class="l2" ><a href="index.php">Home</a></li>
<li class="l2"><a href="vision.php">Vision</a></li>
<li class="l2"><a href="veerendra.php">Veerendra's page</a></li>
<li class="l2"><a href="blog">Blog</a></li>
<li class="l2" style="float:right"><a href="#about">About</a></li>
</ul>
</div>
<title>Error 404</title>
<div id="over">
 <img src="account-normal.png" alt="Logo" align="middle">
</div>
<h1 id="ppp">Error : 404</h1>
<h1 id="ppp">You came to wrong address</h1>
 <?php
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    fwrite($myfile, date("Y-m-d"));
    fwrite($myfile,"   ");
    fwrite($myfile, $_SERVER['REMOTE_ADDR'] );
    fwrite($myfile,"   ");
    fwrite($myfile,$_SERVER ['HTTP_USER_AGENT']);
    fwrite($myfile," 404  \n");
    fclose($myfile);
     ?>
<footer id="footer"><pre>Copyrights 2016  version: 18-07/16(alpha)</pre></footer>
</body>
</html>
