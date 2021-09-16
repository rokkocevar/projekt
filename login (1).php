<!DOCTYPE html>
<html lang="sl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
        include 'glava.php';
        ?>
        <div id="body">
        <h2>Prijava</h2>
        <form action="login_check.php" method="POST">
            <input type="email" name="ema" placeholder="Vnesite email" class="form-control"><br>
            <input type="geslo" name="ges" placeholder="Vnesite geslo" class="form-control"><br>
            <br>
            <a href="register.php">Še nimate računa? Registrirajte se.</a><br>
            <button type="submit" class="btn btn-primary">Prijavi se!</button>
        </form>
        </div>
        <?php
        require 'noga.php';
        ?>
    </body>
</html>