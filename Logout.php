<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   echo 'here';
   header('Refresh: 2; URL = Login.php');
?>
