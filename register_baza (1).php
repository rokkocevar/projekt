        <?php
        include_once 'baza.php';
  
        
        $fn=$_POST['fname'];
        $ln=$_POST['lname'];
        $ns=$_POST['naslov'];
      $em=$_POST['email'];
        $sp=$_POST['spol'];
     
        
        $ps=$_POST['pass'];
        $pd=$_POST['pass2'];
        
  if (!empty($fn) && !empty($ln)
        && !empty($em) && !empty($ns)
        && !empty($sp) && !empty($ps)
        && ($ps == $pd)) {
        
       $pass = password_hash($ps, PASSWORD_DEFAULT);
    
     $sql = "INSERT INTO uporabniki(ime, priimek, naslov, email, spol, geslo)
  VALUES('$fn','$ln','$ns','$em','$sp','$pass')";
			


   $result = mysqli_query($link, $sql);
    
    header("Location: login.php");
}
else {
    header("Location: register.php");
}
?>
