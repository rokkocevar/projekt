
        <?php
        require_once 'baza.php';
  
        
        $fn=$_POST['fname'];
        $ln=$_POST['lname'];
        $ns=$_POST['naslov'];
      
        $sp=$_POST['spol'];
     
        $em=$_POST['email'];
        $ps=$_POST['pass'];
        
        //echo $fn;
      //   echo $ln;
          //echo $ns;
           //echo $sp;
            //echo $fn;
        
        $hp= password_hash($ps, PASSWORD_DEFAULT);
        $sql = "INSERT INTO uporabniki(ime, priimek, naslov, email, spol, geslo)
        VALUES('$fn','$ln','$ns', '$em', '$sp','$hp');";
        
         $result = mysqli_query($link, $sql);
        header("Location:login.php");

    
        ?>