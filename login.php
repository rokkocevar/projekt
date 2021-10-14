<!DOCTYPE html>
<html >
    <html >
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
           
    </head>
    <body>
        
        <?php
        include 'glava.php';
        require_once('settings.php');

$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';
        ?>
       
   
       
        <div id="body">
        <h2>Prijava</h2>
        <form action="login_check.php" method="post">
            <input type="email" name="em" placeholder="Vnesite email" class="form-control"><br>
            <input type="password" name="ge" placeholder="Vnesite geslo" class="form-control"><br>
            <br>
            
            <a href="register.php">Še nimate računa? Registrirajte se.</a><br>
            <button type="submit" class="btn btn-primary">Prijavi se!</button>
            <a href="<?= $login_url ?>">Login with Google</a>
        </form>
        


        </div>
        <?php
        require 'noga.php';
        ?>
    </body>
</html>
