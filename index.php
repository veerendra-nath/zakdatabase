
<?php
include_once("check.php");
include_once('head.php');
include_once('database.php');
?>

<pre>

   </pre>
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px; text-align:middle;"><b>Welcome to Zaktitas database</b></div>
				
            <div style = "margin:30px">

                  <button type="button" align ="middle" onclick="window.location.href='login.php'">Login</button>
                  <pre></pre>
                  <div id ="signup_button">
                  <button type="button" align ="middle" onclick="window.location.href='signup.php'">Signup</button>
                  </div>
     <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
               <div><b>
                    </b>
                   </div>
					
            </div>
				
         </div>
			
      </div>

   </body>
<?php
include_once('foot.php');
?>