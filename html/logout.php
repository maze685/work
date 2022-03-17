<?php
   session_start();
   unset($_SESSION["name"]);
   unset($_SESSION["user_id"]);

   echo 'You have cleaned session';
   header('Refresh: 2; URL = login.php');
?>