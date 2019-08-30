<?php 
if (isset($_POST['REGISTER'])) {   
 $Nama   =   $_POST['Nama'];     
 $alamat   =   $_POST['Alamat']; 
 $jk   =   $_POST['jeniskelamin'];     
 $ag   =   $_POST['Agama'];
 $email   =   $_POST['email'];     
 $pass   =   $_POST['password'];
    
 if ($email == "suci@gmail.com" && $pass == "123") {      
    echo   "<h2>aktif</h2>"; 
        echo $Nama. "<br>";    
        echo $alamat. "<br>";   
        echo $jk."<br>";  
        echo $ag. "<br>";   
        echo $email. "<br>";   
    } else {   
        echo $user. "<br>";    
        echo $alamat. "<br>"; 
        echo $jk."<br>";  
        echo $ag. "<br>";   
        echo $email. "<br>";    
    echo   "<h2>tidak aktif</h2>";     
       }   
   }
   ?>
 

