<?php 

$host="localhost";
$user="kocevar_projekt";
$password="kocevar123";
$database="kocevar_avti";

$link = mysqli_connect($host, $user, $password) or 
     die("Povezava na streznik ni uspela.");
	 
	 
	 mysqli_select_db($link, $database) or 
	 die("Povezava na bazo ni uspela.");
	 
	 
	 mysqli_set_charset($link, "utf8");
	 
?>