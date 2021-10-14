 <?php
        include_once 'baza.php';
  include 'session.php';
        
        $km=$_POST['km'];
        
        $ccm=$_POST['ccm'];
        $kw=$_POST['kw'];
      $letnik=$_POST['letnik'];
        $cena=$_POST['cena'];
        $znamka = $_SESSION['znamkar'];
         $model = $_POST['model'];
     $barva = $_POST['barva'];
   $po =$_SESSION['modelp'];
 $to = $_SESSION['barvap'];
  $tz = $_SESSION['cenap'];
  $tu= $_SESSION['letnikp'];
   
if (!empty($model))
{
    $ii = $model;
}

else
{
$ii = $_SESSION['modelp'];
}
if (!empty($barva))
{
    $O = $barva;
}

else
{
$O = $_SESSION['barvap'];
}

if (!empty($cena))
{
    $cenap = $cena;
}

else
{
$cenap = $_SESSION['cenap'];
}
if (!empty($letnik))
{
    $letp = $letnik;
}

else
{
$letp = $_SESSION['letnikp'];
}

if (!empty($kw))
{
    $kwp = $kw;
}
else
{
$kwp = $_SESSION['kwpu'];
}

if (!empty($ccm))
{
    $ccmp = $ccm;
}
else
{
$ccmp = $_SESSION['ccmu'];
}

if (!empty($km))
{
    $kmp = $km;
}
else
{
$kmp = $_SESSION['kmu'];
}
   
 
   
$sql="SELECT * FROM vozila 
    WHERE (model_id = '$po') AND (barva_id = '$to')AND (cena = '$tz') AND (letnik='$tu');";
   
   $result = mysqli_query($link, $sql);
     $row = mysqli_fetch_array($result);
    $lo =$row['id_v'];
    
   
     $sql2="UPDATE vozila 
      SET model_id='$ii', barva_id='$O', cena='$cenap', letnik='$letp', kw='$kwp', ccm='$ccmp', km='$kmp' WHERE id_v='$lo' ";
   
   $result2 = mysqli_query($link, $sql2);
   
$sql3 = "DELETE from slike 

WHERE vozilo_id = $lo";

$result3 = mysqli_query($link,$sql3);
   
   $file_name = $_FILES['slika']['name'];
        $file_temp = $_FILES['slika']['tmp_name'];
        $file_size = $_FILES['slika']['size'];
        $location="uploads/".$file_name;
        
            if(move_uploaded_file($file_temp, $location)){
                

                    
                    $sql4 = "INSERT INTO slike(id_s, url, vozila_id)  VALUES (NULL,'$location','$lo')";
                    $result4= mysqli_query($link, $sql4);
   
                        }
   
   
   
   
   
   
   
   
  
 header("Location:profil.php");
?>