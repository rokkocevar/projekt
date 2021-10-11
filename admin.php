<?php
include 'glava.php';
include "baza.php";
 session_start();
 if(!defined('rok'))
 {
     header("Location:index.php");
 }
?>
<style>
    
    table{
    margin: auto;
    
    }
    
    body{

    background-color: white;
   
 color: black;
}
    </style>
<div class="text">

    <?php
  
    $sql = "SELECT * FROM uporabniki ORDER BY uporabniki.priimek ASC";
  
    $result = mysqli_query($link, $sql);

    echo '<table border="1">';
    echo '<tr>
    <th>Ime</th>
    <th>Priimek</th>
    <th>email</th>
    <th>geslo</th>
    <th>rang</th>
    </tr>';
    //uporaba rezultatov poizvedbe
    while($row = mysqli_fetch_array($result))
    {
            echo '<tr><td>'.$row['ime_u'].'</td><td>'
            .$row['priimek'].'</td><td>'
            .$row['email'].'</td><td>'
            .$row['geslo'].'</td><td>'
            .$row['admin'].'</td><td>'
            .'<a href="brisi.php?ajdi='.$row['id_u'].'">brisi</a>'.'</td><td>'
.'<a href="posodobiu.php?ajdi='.$row['id_u'].'">posodobi</a>'.'</td></tr>';
            

    }
    echo '</table>';

    ?>

    
</div>

<?php
require 'noga.php';
?>