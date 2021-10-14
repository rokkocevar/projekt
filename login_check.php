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
            session_start();
require_once('settings.php');
require_once('google-login-api.php');

// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}
$tz =$user_info['id'];
$zt = $user_info['email'];
//$sql3="INSERT INTO uporabniki (ime_u, priimek, naslov, email, spol, geslo)
 //VALUES('$tz',NULL, NULL, '$zt', NULL, NULL)";
   //         $result3=mysqli_query($link, $sql3);
     //          $st2=mysqli_num_rows($result3);
      echo $tz ;  
     echo $zt ; 
            
                  $ema = $_POST['em'];
                 $pass = $_POST['ge'];
                 
           
              
               
          $sql2="SELECT * FROM uporabniki WHERE email='$ema'; ";
           
            
            $result2=mysqli_query($link, $sql2);
           

            $st=mysqli_num_rows($result2);
            
         
            
         
        $row = mysqli_fetch_array($result2);
 
        
        if(password_verify($pass, $row['geslo'])) {
         $_SESSION['fname']=$row['ime_u'];
          $_SESSION['lname']=$row['priimek'];
           $_SESSION['geslo']=$row['geslo'];
            $_SESSION['naslov']=$row['naslov'];
             $_SESSION['email']=$row['email'];
              $_SESSION['idu']=$row['id_u'];
               $_SESSION['adminu']=$row['admin'];
            
            if($_SESSION['adminu'] == 1){
    header("Location: index.php");
}


else{
 header("Refresh:3 url=index.php");
}
            
              
               }
 
          
         else{
           header("Refresh:3 url=login.php");
                         }
       
        ?>
    </body>
</html>
