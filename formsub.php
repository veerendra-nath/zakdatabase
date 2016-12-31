<?php
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
if($count==0)
{
    if(session_destroy())
{
redirect("login.php?m=1");
}
}
if(isset($_POST["submit"]))
{
	$id=$_POST["id"];
	$sqll="INSERT INTO ".$id;
	$title=$_POST["title"];
	$des=$_POST["description"];
	$link1=$_POST["link1"];
	$link2=$_POST["link2"];
	$sqll.=" (title,description,link,link2,ouid) VALUES ( '$title', '$des', '$link1', '$link2', '$uid' ) ";
	if($mysqli->query($sqll)!=NULL)
	{
		$sql="SELECT * FROM urank WHERE uid='$uid'";
		$result=$mysqli->query($sql);
		$row= $result->fetch_assoc();
		if($row["rank"]==NULL)
		$row["rank"]=1;
		else
		$row["rank"]+=1;
		$rank=$row["rank"];
		$sql="UPDATE urank SET rank='$rank' WHERE uid='$uid'";
		$mysqli->query($sql);
	redirect($id.".php");
	}

}
?>
