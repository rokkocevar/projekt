<!DOCTYPE html>
<html lang="sl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login check</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            require_once 'baza.php';
            include 'session.php';
            
                  $m= $_POST['ema'];
                 $p = $_POST['ges'];
          $sql="SELECT * FROM uporabniki WHERE email ='$m'; ";
           
            
            $result=mysqli_query($link, $sql);
           

            $st =mysqli_num_rows($result);
            
            
            
        $row = mysqli_fetch_array($result);
        if(password_verify($p, $row['geslo'])) {
        $_SESSION['ime']=$row['ime'];
          $_SESSION['priimek']=$row['priimek'];
            
             
              
            }
            else
            {
                header("Refresh:3 url=login.php");
                echo "Email ali geslo ni pravilno!";
            }
        ?>
    </body>
</html>