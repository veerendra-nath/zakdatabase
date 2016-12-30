<?php
include("head.php");
include("database.php");
include("check.php");
if(isset($_GET['m']))
{
    $m=$_GET['m'];
    $mc=1;
    if($m==1)
    {
        $msg="username not entered";
    }
    if($m==0)
    {
        $msg="password not entered";
    }
    
}
else
{
    $mc=0;
}
?>
<div id="sign-up_main">
<pre>

   </pre>
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Signup</b></div>
				
            <div style = "margin:30px">
             <form action = "signupsubmit.php" method = "post">
                  <label>Name :</label><input type = "text" name = "uname" class = "box"/><br /><br />
                  <label>Email  :</label><input type = "text" name = "Email" class = "box"/><br /><br />
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password   :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Signup " name="Signup" /><br />
               </form>
                    <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
               <div><b>
                   <?php 
                   if($mc>0)
                   echo $msg
                    ?>
                    </b>
                   </div>
					
            </div>
				
         </div>
			
      </div>

   </body>
   <?php
   include("foot.php");
   ?>