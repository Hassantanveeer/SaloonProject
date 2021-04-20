<?php 

$host="localhost";
$user="root";
$password="";
$db="saloon";



$connection=mysqli_connect($host,$user,$password);
$dbconfig=mysqli_select_db($connection,$db);
if($dbconfig){
	//echo "connected";
}
else
{
	echo "failed";
}
?>
