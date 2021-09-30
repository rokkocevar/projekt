  <?php
  $value = $_POST['znamka'];
  ?>
  
  <style>
      .content
      {
          
     background-image: url("slika2.jpg");
     background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
  height: 600px;
      }
      .contentt
       {
         padding-top: 100px;
    
      }
  </style>
    <body>
        <?php
        include 'glava.php';
        include 'baza.php';
        ?>
            <div class="content">
        
        <form  method="post">
            <div class="contentt">
      
         <select name="znamka" class="form-control" style="width: 50%" onchange="this.form.submit();">
                    <option value="0" selected disabled>Izberite znamko</option>
                        <option value="1">BMW</option>
                        <option value="2">AUDI</option>
                        <option value="3">MERCEDES</option>
                        <option value="4">FORD</option>
                        <option value="5">RENAULT</option>
                    </select>
               
                    <select name="model" class="form-control" style="width: 50%" id="g">
                    <option value="0" selected disabled>Izberite model</option>
                         <?php
                            $sql1="SELECT * FROM modeli m WHERE m.znamka_id = $value ";
                            $result1=mysqli_query($link, $sql1);
                            while($row = mysqli_fetch_array($result1))
                            {
                                echo '<option value="'.$row['id'].'">'.$row['ime'].'</option>';
                            }
                        ?>
                    </select>
                <button type="submit" class="btn btn-primary">Iskanje</button>
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
