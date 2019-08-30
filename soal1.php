<?php
    $nilai = 9;
    echo "Nilai anda";
    echo "nama = suci putri rasmita";
    echo "Kelas = RPL ";
    echo "_________________________";
    echo "Nilai B.Indonesia : 80";
    echo "Nilai Matematika   : 70";
    echo "Nilai rata-rata : 75";
    echo "<br>";
    switch(true)
    {
        case ($nilai >= 100);
        echo"maaf nilai yang anda masukkan salah ";    
            break;

        case ($nilai >= 100):
            echo "grade A, Nilai rata-rata > 85";
            break;

        case ($nilai >= 100);
         echo "grade B,nilai rata rata > 75";
         break;

         case ($nilai >= 100);
         echo "grade C,nilai rata rata > 60";
         break;

         case ($nilai >= 100);
         echo "grade D,nilai rata rata > 60";
         break;
      }

?>