<?php
require 'baza.php';
include 'session.php';

$i = $_GET['ajdi'];
$r = $_SESSION ['slik'];

$sql = "DELETE from slike 

WHERE id_s = $r";

$result = mysqli_query($link,$sql);
$sql2 = "DELETE from uporabniki 

WHERE id_u = $i";

$result2 = mysqli_query($link,$sql2);
header("Location:index.php");

?>