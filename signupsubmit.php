<?php
include("database.php");
if(isset($_POST["Signup"]))
{
    //include('validatesignup.php');
    $username=$_POST["username"];
    $password=password_hash($_POST["password"], PASSWORD_BCRYPT);
    if($_POST["Email"]!=NULL)
    {
        $email=$_POST["Email"];
    }
    else
    {   
        $email=NULL;
     
     }
    if($_POST["uname"]!=NULL)
    {
        $uname=$_POST["uname"];
    }
    else
    {
        $uname="Anamika";
    }
   
    $sql="INSERT INTO users (uname,name,password,ugroup,Email) VALUES ('$username','$uname','$password','0','$email')";
 
    if(!$mysqli->query($sql))
    {
        echo "error";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>