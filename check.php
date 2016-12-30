<?php
session_start();
include("cfunctions.php");
if( isset( $_SESSION['log_stat'] )) {
      redirect("dash.php");
   }
?>