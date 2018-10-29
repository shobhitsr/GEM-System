<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have successfully logged out<br />';
   echo 'Now you will be redirected to the login page';
   header('Refresh: 2; URL = Login.php');
?>
