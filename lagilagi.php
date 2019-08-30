<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form ACTION="" METHOD="POST" NAME="INPUT">
    Nama Anda : <input type="text" name="nama" ><br> 
    Nilai 1 : <input type="text" name="nilai1"><br>
    Nilai 2 : <input type="text" name="nilai2"><br>
    <input   type="submit"   name="INPUT" value="INPUT">
    <input   type="reset"   nilai="reset" value="reset">
</form>
</body>
</html>
<?php

if (isset($_POST['INPUT'])) {   
           $nama_anda  =  $_POST['nama'];
           $nilaI_1  =  $_POST['nilai1'];
           $nilai_2   =  $_POST['nilai2'];
         $b = ($nilaI_1+$nilai_2)/2;
         echo "Nama Anda : <b>$nama_anda</b>";
         echo "<br>";
         echo "nilai 1 = " .$nilaI_1;
         echo "<br>";
         echo "nilai 2 = ".$nilai_2;
         echo "<br>";
         echo "nilai rata rata = " .$b;

}
      ?>


