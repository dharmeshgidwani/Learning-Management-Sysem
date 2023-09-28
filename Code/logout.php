<?php
 session_start();
 session_destroy();//session_destroy was missing hence the user wasnt able to logout 
 echo "<script> location.href='index.php'; </script>";
?>