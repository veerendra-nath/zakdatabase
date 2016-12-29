<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
    $m=$_GET['m'];
     $mc=0;
    if($m==1)
    {
        $msg="Logout Success";
        $mc=1;

    }
    if($m==0)
    {
        $msg="invalid username or password";
        $mc=1;
    }
    
}
else
{
    $mc=0;
}
?>