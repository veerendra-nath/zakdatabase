<!DOCTYPE html>
<meta charset="utf-8">
<html>
<title>Vision</title>
</div>
<div id="menu">
  <ul  id="l1">
    <li class="l2" ><a href="index.php">Home</a></li>
    <li class="l2" id ="active"><a href="vision.php">Vision</a></li>
    <li class="l2"><a href="veerendra.php">Veerendra's page</a></li>
    <li class="l2"><a href="blog">Blog</a></li>
<li class="l2" style="float:right"><a  href="#about">About</a></li>
<li class="l2"><a href="https://www.zoho.com/mail/login.html">Mail</a></li>
 <li class="l2"><a href="">Projects</a></li>
</ul>
</div>
<h1 id="head">Final vision of Nath</h1>
  <p><pre id="note">Eenadu Sunday magazine</pre><pre id="date">date:17-07/2016</pre><p id="note2">This page in iframe, If not loaded <a href="http://www.eenadu.net/magazines/sunday-magazine/sunday-magazineinner.aspx?catfullstory=5360">click here to see page directly</a></p></p>
<link rel="stylesheet" type="text/css" href="dream.css" />
 <iframe id ="frame" src="http://www.eenadu.net/magazines/sunday-magazine/sunday-magazineinner.aspx?catfullstory=5360"></iframe>
  <?php
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    fwrite($myfile, date("Y-m-d"));
    fwrite($myfile,"   ");
    fwrite($myfile, $_SERVER['REMOTE_ADDR'] );
    fwrite($myfile,"   ");
    fwrite($myfile,$_SERVER ['HTTP_USER_AGENT']);
    fwrite($myfile," vision  \n");
    fclose($myfile);
     ?>
 <footer id="footer"><pre>Copyrights 2016  version: 30-07/16(alpha)</pre></footer>
</html>
