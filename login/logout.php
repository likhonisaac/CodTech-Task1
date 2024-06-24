<?php


  session_start();
  echo("<script language='javascript'>
        window.alert('Are you sure you want to log out?')
       
        </script> ");
      
  $_SESSION = array();
  session_unset();
  session_destroy();
echo("<script language='javascript'>
       
        window.location.href='loginn.php'
        </script> ");
  exit();


?>