<?php
include 'glava.php';
include 'baza.php';
include 'session.php';
?>
<style>

   #h{
       font-size: 30px;
      
       
   }
    </style>
    <body>
    <?php
    $id = $_SESSION['idu'];
 $sql = "SELECT * FROM uporabniki WHERE uporabniki.id_u = $id";
 
 $result = mysqli_query($link, $sql);
  while($row = mysqli_fetch_array($result))
    {
       echo '<table border="0" id ="h">';
    echo '<tr>
    <th>Ime</th>
    <td>'.$row['ime_u'].' <td>
</tr><tr>
    <th>Priimek</th>
    <td>'.$row['priimek'].' <td>
    </tr><tr>
    <th>email</th>
    <td>'.$row['email'].' <td>
    </tr><tr>
    <th>naslov</th>
    <td>'.$row['naslov'].' <td>
    </tr>
    <tr>
    <th><a  class="k" ="active" href="posodobitevp.php"> posodobi profil</a></th>
    
    </tr>';    
            

    }
 
 
$i= $_SESSION['fname'];
  $l =        $_SESSION['lname'];
     $p =  $_SESSION['geslo'];
    $n= $_SESSION['naslov'];
   $e = $_SESSION['email'];
           ?>  
           <div id="a">
          <?php    



$sql2="SELECT * FROM vozila v 
INNER JOIN slike s ON v.id_v = s.vozila_id
INNER JOIN modeli m ON m.id = v.model_id
INNER JOIN znamke z ON z.id = m.znamka_id
INNER JOIN barve b ON b.id = v.barva_id
INNER JOIN uporabniki u ON u.id_u = v.uporabnik_id
WHERE v.uporabnik_id = $id;";
$result2=mysqli_query($link,$sql2);

echo '<table id ="b"    >'  ;
echo '<tr id="t"><th class="z" width="20%">slika</th><th class="z"width="35%">splošno</th><th class="z" width="30%">cena</th></tr>';
while($row=mysqli_fetch_array($result2))
{
    echo '<tr>'.'<td class="a">'.'<img src="'.$row['url'].'" width="80%"  margin-left: auto;
  margin-right: auto; >'.'<td>
  <table  >
<tr><td class="a">'.$row['ime_z'].' '.  $row['ime_m'].'</td></tr><td><b> letnik:</b> '.$row['letnik'].'</td></tr><tr><td><b>km:</b>'.$row['km'].' km</td>
</tr><tr><td><b>MOČ: </b>'.$row['kw'].' kw</td> 
</tr><tr><td><b>velikost: </b>'.$row['ccm'].' ccm</td></tr><tr><td><b>barva:</b> '.$row['ime_b'].'</td></tr><tr><td><b>kontakt :</b>'.$row['email'].'</td>
</tr>
</table>

</td><td id="u" class="a">'.$row['cena'].' €</td><td>';
 $_SESSION['sliki'] =$row['id_s'];
echo '<td class="a">'.'<a href="brisip.php?ajdi='.$row['id_v'].'"> briši </a>'.'</td>';
echo '<td class="a">'.'<a href="posodoiv.php?aj='.$row['id_v'].'">posodobi </a>'.'</td>';

echo '</tr>';

 }
        
        
echo '</table>';

 



?>
</div>
</body>
<?php
require 'noga.php';
?>
