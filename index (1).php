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
        
        <form action=".php" method="POST">
            <div class="contentt">
        <select name="model" class="form-control" style="width: 50%" id="g">
                    <option value="0" selected disabled>Izberite model</option>
                        
                    </select>
                    
         <select name="znamka" class="form-control" style="width: 50%">
                    <option value="0" selected disabled>Izberite znamko</option>
                        
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