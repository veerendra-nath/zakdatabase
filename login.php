<?php
   include('head.php');
   include('database.php');
include_once("check.php");
if(isset($_GET['m']))
{
    $m=$_GET['m'];
    $mc=1;
    if($m==1)
    {
        $msg="Logout Success";
    }
    if($m==0)
    {
        $msg="invalid username or password";
    }
    
}
else
{
    $mc=0;
}
?>
   <pre>

   </pre>
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "loginsubmit.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password   :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
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
   include('foot.php');
?>
   
 