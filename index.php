  <?php
  $value = $_POST['znamka'];
  ?>
  <?php
include 'session.php';
?>
  <style>
      .content
      {
          
   //  background-image: url("slika2.jpg");
     background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
  height: 600px;
      }
      .contentt
       {
         padding-top: 30px;
    
      }
      .a{
          font-weight: bold;
          font-size: 150%;
         
      }
      #u{
          font-weight: bold;
           font-size: 150%;
      }
      #p{
          text-align: center;
          text-decoration: none;
          color: black;
          font-weight: bold;
          border: 2px solid black;
          margin-left: 100px;
          
      }
      .r{
          text-decoration:none;
          color: black;
          margin-right: 20px;
      }
      
  </style>
    <body>
        <?php
        include 'glava.php';
        include 'baza.php';
         include 'session.php';
        ?>
            <div class="content">
       
        <form  method="post">
            <div class="contentt">
      <div><b>filter</b></div>
           <a href="filtri.php" class="r" >cena</a>
             <a href="index2.php" class="r" >moč</a>
              <a href="index3.php" class="r">letnik</a>
               <a href="index4.php" class="r">km</a>
       
       <?php
$sql="SELECT * FROM vozila v
INNER JOIN slike s ON v.id_v = s.vozila_id
INNER JOIN modeli m ON m.id = v.model_id
INNER JOIN znamke z ON z.id = m.znamka_id
INNER JOIN barve b ON b.id = v.barva_id
INNER JOIN uporabniki u ON u.id_u = v.uporabnik_id


;
";
$result=mysqli_query($link,$sql);

echo '<table id ="b"    >'  ;
echo '<tr id="t"><th class="z" width="20%">slika</th><th class="z"width="35%">splošno</th><th class="z" width="30%">cena</th></tr>';
while($row=mysqli_fetch_array($result))
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
if($_SESSION['adminu']>0){
    $_SESSION['slik'] =$row['id_s'];
echo '<td class="a">'.'<a href="brisiv.php?ajdi='.$row['id_v'].'"> briši </a>'.'</td>';
}


 


echo '</tr>';




 }
        
        
echo '</table>';

 


    ?>
  <?php
        include 'noga.php';
        ?>
        
        <br>
        <br>
        </div>
    </body>
</html>
