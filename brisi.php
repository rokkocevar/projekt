<?php
require 'baza.php';

$i = $_GET['ajdi'];

$sql = "DELETE from uporabniki WHERE id_u = $i";

$result = mysqli_query($link,$sql);

header("Location:admin.php");

?>