<?php

 require_once 'baza.php';
 include 'session.php';
 
 $i=$_POST['ime'];
 $t = $_POST['priimek'];
 $n = $_POST['naslov'];
$id = $_SESSION['idu'];
 $k = $_POST['email'];
 $j = $_POST['geslo'];

 
 $hp= password_hash($j, PASSWORD_DEFAULT);
   $sql="UPDATE uporabniki SET ime_u='$i', priimek='$t', naslov='$n', email='$k', geslo='$hp' WHERE id_u= '$id'";
   
   $result = mysqli_query($link, $sql);
   
   header("Location:profil.php");