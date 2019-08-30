<?php
    $a = array('suci',21,true,14.45);
    echo $a[1];

    for($i =4; $i >= 0; $i++){
        echo $a[$i],"<br>";

        $asso = ['nama' => 'suci'.'umur' => 21.'alamat' => 'bandung'];
        
        foreach ($aso as $index){
            echo $index,"<br>"
        }
    }
?>