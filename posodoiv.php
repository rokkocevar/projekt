           <?php
  $value = $_GET['znamka'];
  
  
  ?>
  <!DOCTYPE html>
<html lang="sl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Avtogre</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stil.css">
    </head>
  
    <body>
        <?php
        include 'glava.php';
        include 'baza.php';
        include 'session.php';
      
        
        ?>
            <div class="content">
         <h2>posodobi oglas</h2>
        <form  method=" post" >
            <div class="contentt">
                 
         <select name="znamka" class="form-control" style="width: 50%" onchange="this.form.submit();">
                    <option value="0" selected disabled>Izberite znamko</option>
                        <option value="1">BMW</option>
                        <option value="2">AUDI</option>
                        <option value="3">MERCEDES</option>
                        <option value="4">FORD</option>
                        <option value="5">RENAULT</option>
                       
                    </select>
 
                    
                   
                    <?php
                    $_SESSION['znamkar'] = $value;
                    $sql5="SELECT * FROM znamke z WHERE z.id = $value ";
                            $result5=mysqli_query($link, $sql5);
                            $row = mysqli_fetch_array($result5);
                         $r  = $row['ime_z'];
                         ?>
                         <b>
                         Vaša znamka je: 
                         </b>
                         <?php
                         echo $r;
                            
                    ?>
                    </form>
                    
                    <form  method="post" action="posodoiv_aza.php"  enctype="multipart/form-data" >
                     <select name="model" class="form-control" style="width: 50%" id="g">
                     <option value="0" selected disabled>Izberite model</option>
                         <?php
                            $sql2="SELECT * FROM modeli m WHERE m.znamka_id = $value ";
                            $result2=mysqli_query($link, $sql2);
                            while($row = mysqli_fetch_array($result2))
                            {
                                echo '<option value="'.$row['id'].'">'.$row['ime_m'].'</option>';
                                
                            }
                           
                        ?>
                    </select>
                   <input type="number" name="cena" placeholder="vnesite ceno" class="form-control"><br>
                   <input type="number" name="letnik" placeholder="vnesite letnik" class="form-control"><br>
                   <input type="number" name="kw" placeholder="vnesite moc v kw" class="form-control"><br>
                   <input type="number" name="ccm" placeholder="vnesite velikost" class="form-control"><br>
                   
                   <select name="barva" class="form-control" style="width: 50%" id="g">
                    <option value="0" selected disabled>Izberite barvo</option>
                         <?php
                            $sql1="SELECT * FROM barve  ";
                            $result1=mysqli_query($link, $sql1);
                            while($row = mysqli_fetch_array($result1))
                            {
                                echo '<option value="'.$row['id'].'">'.$row['ime_b'].'</option>';
                            }
                        ?>
                    </select>
             
                    <input type="number" name="km"  placeholder="vnesite kilometre" class="form-control"><br>
                   <input type="file" name="slika" placeholder="vnesite sliko"><br>
                 
         
               
                <button type="submit" class="btn btn-primary">Iskanje</button>
                 <button type="reset" class="btn btn-primary">reset</button>
                 </div>
        </form>
       <?php
        include 'noga.php';
        ?>
        <br>
        <br>
        </div>
    </body>
</html>