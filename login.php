<!DOCTYPE html>
<html >
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
        <form action="login_check.php" method="post">
            <input type="email" name="em" placeholder="Vnesite email" class="form-control"><br>
            <input type="password" name="ge" placeholder="Vnesite geslo" class="form-control"><br>
            <br>
            <a href="register.php">Še nimate računa? Registrirajte se.</a><br>
            <button type="submit" class="btn btn-primary">Prijavi se!</button>
        </form>
        <?php
        
       include 'autoload.php';
                         $clientID='767811450053-2ft6kn4ant9htq4pddoqs2a2rrkdgc7i.apps.googleusercontent.com';
                         $clientSecret='AIzaSyAUJS_CpnCrFeF78P293Cp5ff9e0UrlOY8';
                         $redirectUrl = 'https://www.vozila.kocevar.xyz/login.php';
                         
                         $client = new Google_Client();
                         
                         $client->setClientId($clientID);
                         
                         $client->setClientSecret($clientSecret);
                         $client->setRedirectUri($redirectUrl);
                         $client->addScope('profile');
                         $client->addScope('email');
                        
                          if(isset($_GET['code'])){
                             $client->authenticate($_GET['code']);
                             $access_token = $client->getAccessToken();
                                
                              $gauth = new Google_Service_Oauth2($client);
                              $google_info = $gauth->userinfo->get();
                              $email = $google_info->email;
                              $name = $google_info->name;
                              $password = $google_info->password;
                              $_SESSION['namu'] = $google_info->name;
                             
               
                             header("Location: index.php");
                         
                        
                            
                        }
                        else{
                         echo "<a href='".$client->createAuthUrl()."' class='btn-google m-b-10'>
                                    <img src='prenos.png' alt='GOOGLE'>
                                    Google
                                    </a>";
                        }

                    ?>
        </div>
        <?php
        require 'noga.php';
        ?>
    </body>
</html>