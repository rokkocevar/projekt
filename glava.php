<?php 
    include 'session.php';
?>

<style>
    .k {
        color: black;
    }
    #ds{
        color:;
    }
    
</style>
<!DOCTYPE html>
<html lang="sl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Avtogre</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="slike/Avtogre_logo.png"></a>
  
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
        
        <?php
            if(isset($_SESSION['idu'])|| isset($_SESSION['fname']))
            {
                ?><a class="nav-link"  href="profil.php">vas profil</a>
                <a class="nav-link"  href="oglas.php">naredite oglas</a>
                <?php
                if ($_SESSION[adminu] == 1)
                {
 ?>  <a class="nav-link"  href="admin.php">admin</a><?php
                }
            }
            
            else
            {
                ?><a class="nav-link" href="register.php">Registracija</a><?php
            }
            ?>
           
            
           
        </li>
        <li class="nav-item">
            
               <?php
            if(isset($_SESSION['idu'])|| isset($_SESSION['fname'])) {
                           $imeu=$_SESSION['fname'];
                                echo '<a id="ds">prijavljeni ste kot: '.$imeu. '</a>';
                                 echo '<a  class="k" ="active" href="odjava.php"> odjava</a>';
                                    }
        else
            {
                
                ?><a class="nav-link" href="login.php">Prijava</a><?php
            }
?>
        </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>