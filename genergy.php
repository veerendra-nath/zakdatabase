<?php
include_once("head.php");
include("database.php");
include('cfunctions.php');

session_start();
if(!isset( $_SESSION['log_stat'] ) ) {
    redirect("/");
}
$uid=$_SESSION['uid'];
$sql="SELECT * FROM `users` where uid='$uid'";
$res=$mysqli->query($sql);
$count= mysqli_num_rows ($res);
$sql="SELECT * FROM urank where uid='$uid'";
$res1=$mysqli->query($sql);
$row1 = $res1->fetch_assoc();
if($count==0)
{
    if(session_destroy())
{
header("Location: login.php?m=1");
}
}
$row = $res->fetch_assoc();

?>
<body id="main_body" >
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<div id="wlogout">
<div class="userwelcome" >
    <p>Welcome <?php echo $row["Name"]; ?> </p>
</div>
<div id="user_count">
    <pre>Your total submit count:<?php echo $row1["rank"]; ?></pre>
</div>
<div class ="log_out_button">
        <button type="button" align ="middle" onclick="window.location.href='logout.php'">Logout</button>
</div>
<pre></pre>
<div class ="home_button">
        <button type="button" align ="middle" onclick="window.location.href='dash.php'">HOME</button>
</div>
</div>

	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<form id="form_2782" class="appnitro" action = "formsub.php"  method="post" action="">
					<div class="form_description">
			<h2>Green energy</h2>
			<p>Please enter the relative .</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Title </label>
		<div>
			<input id="element_1" name="title" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Description </label>
		<div>
			<textarea id="element_2" name="description" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Link1 </label>
		<div>
			<input id="element_3" name="link1" class="element text large" type="text" maxlength="2000" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Link2 </label>
		<div>
			<input id="element_4" name="link2" class="element text large" type="text" maxlength="2000" value=""/> 
		</div> 
		</li>
        
			
					<li class="buttons">
			    <input type="hidden" name="id" value="genergy" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
        <div id="footers">
			This form theme Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
		</form>	
          </div>
        </body>
      
<?php
include('foot.php');
?>
