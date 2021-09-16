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
        require_once 'baza.php'; 
        ?>
            <div id="body">
            <h2>Registracija uporabnika</h2>
                <form action="register_baza.php" method="POST">
                    <input type="text" name="fname" placeholder="Vnesite ime" class="form-control"><br>
                    <input type="text" name="lname" placeholder="Vnesite priimek" class="form-control"><br>
                    <input type="text" name="naslov" placeholder="Vnesite naslov" class="form-control"><br>
                   
                   
                    <select name="spol" placeholder="Vnesite" class="form-control">
                        <option value="0" selected disabled>Izberite spol</option>
                        <option value="M">m</option>
                        <option value="Ž">z</option>
                        
                    </select><br>
                   
                    <input type="email" name="email" placeholder="Vnesite email" class="form-control"><br>
                    <input type="password" name="pass" placeholder="Vnesite geslo" class="form-control"><br>
                    <button type="submit" class="btn btn-primary">Registrirajte se!</button><br>
                    <a href="login.php">Že imate račun? Prijavite se!</a><br>
                </form>
            </div>
        <?php
        require 'noga.php';
        ?>
        <br>
        <br>
    </body>
</html>