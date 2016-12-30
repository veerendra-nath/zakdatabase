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
echo $row["Name"];
?>
