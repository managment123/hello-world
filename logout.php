<?php
   session_start();
   
   if(session_destroy()) {
      header("/var/www/html: login.php");
   }
?> 


