<?php 
session_start();
include ('db.php');
if($dbconfig){
//echo "conect ok";
}
else
{
	header("location: db.php");

}
if(!$_SESSION['username'])
{
	header("location: index.php");
}












?>