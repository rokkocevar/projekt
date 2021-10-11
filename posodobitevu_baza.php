<?php

 require_once 'baza.php';
 
 
 $i=$_POST['ime'];
 $t = $_POST['priimek'];
 $n = $_POST['naslov'];
 $s = $_POST['spol'];
 $k = $_POST['email'];
 $j = $_POST['geslo'];
$r = $_POST['rang'];
 $id=$_POST['skrit'];
 
 $hp= password_hash($j, PASSWORD_DEFAULT);
   $sql="UPDATE uporabniki SET ime_u='$i', priimek='$t', naslov='$n', email='$k', spol='$s', admin='$r', geslo='$hp' WHERE id_u=$id";
   
   $result = mysqli_query($link, $sql);
   
   header("Location:admin.php");