  <?php
        include_once 'baza.php';
  include 'session.php';
        
        $km=$_POST['km'];
        $slike=$_POST['slike'];
        $ccm=$_POST['ccm'];
        $kw=$_POST['kw'];
      $letnik=$_POST['letnik'];
        $cena=$_POST['cena'];
        $znamka = $_SESSION['znamka'];
         $model = $_POST['model'];
     $barva = $_POST['barva'];
     $id = $_SESSION['idu'];
  
      $slike = $_POST['slike'];

 

       
        
  if (!empty($km) && !empty($id)
        && !empty($ccm) && !empty($kw)
        && !empty($letnik) && !empty($cena)
        && !empty($znamka) && !empty($model) && !empty($barva)) {
        
       
    
     $sql = "INSERT INTO vozila (cena, letnik, kw, ccm, km, model_id, barva_id, uporabnik_id)
  VALUES ('$cena','$letnik','$kw','$ccm','$km','$model', '$barva', '$id')";
 
  
			$result = mysqli_query($link, $sql);
		
   
   
    $sql2="SELECT * FROM vozila WHERE cena = $cena AND letnik = $letnik AND km = $km; ";
           
            
            $result2=mysqli_query($link, $sql2);

            $st=mysqli_num_rows($result2);

         
        $row = mysqli_fetch_array($result2);
 
              $_SESSION['idv']=$row['id_v'];
	
   $p =$_SESSION['idv'];
   
  $file_name = $_FILES['slike']['name'];
        $file_temp = $_FILES['slike']['tmp_name'];
        $file_size = $_FILES['slike']['size'];
        $location="uploads/".$file_name;
        
            if(move_uploaded_file($file_temp, $location)){
                {

                    
                    $sql3 = "INSERT INTO slike(id_s, url, vozila_id)  VALUES (NULL,'$location','$p')";
                    $result3= mysqli_query($link, $sql3);
                    
                   
 header("Location: oglas.php");
}

    
  }

   
}
else {
    header("Location: index.php");
}
?>






