<?php

include('database.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $uname=$_POST['username'];
    $pass=$_POST['password'];
    $sql="SELECT * FROM `users` WHERE uname='$uname' AND password='$pass'";
    $result=$mysqli->query($sql);
    $count= mysqli_num_rows ($result );
    if($count==1)
    {
    $row = $result->fetch_assoc();
    
    $uid=$row["uid"];
    echo $uid;
    $_SESSION['uid'] = $uid;
    $_SESSION['log_stat'] = TRUE;
     header("Location:dash.php");
    }
    if($count==0)
    {
        header("Location: login.php?m=0");
    }
    
}
else{
    header("Location:login.php?m=5");
}
?>