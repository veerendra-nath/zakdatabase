<?php
include_once("head.php");
include('database.php');
include('cfunctions.php');

session_start();
if(!isset( $_SESSION['log_stat'] ) ) {
    redirect("index.php");
}
$uid=$_SESSION['uid'];
$sql="SELECT * FROM `users` where uid='$uid'";
$res=$mysqli->query($sql);
$count= mysqli_num_rows ($res);
if($count==0)
{
    if(session_destroy())
{
header("Location: login.php?m=1");
}
}
$row = $res->fetch_assoc();

?>
<div id="wlogout">
<div class="userwelcome" >
    <p>Welcome <?php echo $row["Name"]; ?> </p>
</div>
<div class ="log_out">
        <button type="button" align ="middle" onclick="window.location.href='logout.php'">Logout</button>
</div>
</div>
<div class="imageo">
    <div class="container bimage">
        <a href="electronics.php"><img src="electronics.png" height="200" width="200"/>
        <p>Electronics</p></a>
    </div>
    <div class="container bimage">
        <a href="<?php echo rawurlencode("green energy.php"); ?>"><img class="middle-img" src="genergy.png" height="200" width="200"/>
        <p>Green Energy</p></a>
    </div>
    <div class="container bimage" >
         <a href="agriculture.php"><img src="agriculture.png" height="200" width="200"/>
        <p>Agriculture</p></a>
    </div>
</div>
<?php
include_once("foot.php");

?>
