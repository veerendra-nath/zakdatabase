<?php

include('database.php');
include('cfunctions.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $uname=$_POST['username'];
    $pass=$_POST['password'];
    $sql="SELECT * FROM `users` WHERE uname='$uname'";
    $result=$mysqli->query($sql);
    $count= mysqli_num_rows ($result );
    if($count==1)
    {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row["password"]))
        {
            $uid=$row["uid"];
            $_SESSION['uid'] = $uid;
            $_SESSION['log_stat'] = TRUE;
            redirect("dash.php");
         }
        else
        {
            redirect("login.php?m=0");
        }
    }
    if($count==0)
    {
        redirect("login.php?m=0");
    }
    
}
else{
    redirect("login.php?m=5");
}
?>