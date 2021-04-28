<?php 
include('security.php');
session_start();
if (isset($_POST['logout_btn']))
{
  
  header('Location: index.php');
  session_unset();
}
?>