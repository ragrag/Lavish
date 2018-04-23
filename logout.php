<?php  //Distroy current session
Session_start();
Session_destroy();
header('Location:  home.php');
?>