<?php 
if (isset($_POST['SIMPAN'])) {   
 $PENDAFTARAN   =   $_POST['PENDAFTARAN'];     
 $NISN   =   $_POST['NISN']; 
 $NAMA   =   $_POST['NAMA'];     
 $ALAMAT  =   $_POST['ALAMAT'];
 $TEMPATLAHIR  =   $_POST['TEMPATLAHIR'];     
 $TANGGALLAHIR   =   $_POST['TANGGALLAHIR'];
 $jeniskel  =   $_POST['jeniskelamin'];     
 $NAMAAYAH   =   $_POST['NAMAAYAH']; 
 $PERKERJAANAYAH   =   $_POST['PERKERJAANAYAH'];  
 $NAMAIBU   =  $_POST['NAMAIBU'];
 $PERKERJAANIBU   =  $_POST['PERKERJAANIBU'];   
 $AGAMA  =   $_POST['AGAMA'];
 $HOBI   =   $_POST['HOBI'];     
    
 
        echo "PENDAFTARAN : " .$PENDAFTARAN ."<br>";    
        echo "NISN  : " .$NISN . "<br>";   
        echo "NAMA : " . $NAMA . "<br>";  
        echo "ALAMAT : " . $ALAMAT . "<br>";   
        echo "TEMPAT LAHIR : "  .$TEMPATLAHIR . "<br>";   
        echo "TANGGAL LAHIR  :" . $TANGGALLAHIR . "<br>";    
        echo "jeniskelamin : " . $jeniskelamin . "<br>"; 
        echo "NAMA AYAH  : "  .$NAMAAYAH . "<br>";  
        echo "PERKERJAAN AYAH : "  .$PERKERJAANAYAH . "<br>";   
        echo "NAMA IBU :" . $NAMAIBU . "<br>";
        echo "PERKERJAAN IBU :"  .$PERKERJAANIBU . "<br>";
        echo "HOBI : "  .$HOBI . "<br>";

         
       }   
   ?>
