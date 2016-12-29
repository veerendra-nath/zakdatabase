<?php
session_start();
if( isset( $_SESSION['log_stat'] )) {
      header("Location:dash.php");
   }else
   {
     
   }
?>