<?php
for($i =1; $i <= 10; $i++){
    for ($j=1; $j <=10 ; $j++) {
        $k = $i * $j; 
        if ($k % 2 == 1){
            echo "$i*$j = $k adalah bilangan genap<br>";
            }else{
                echo"$i*$j = $k adalah bilangan ganjil<br>";
            }
    }
    
}

?> 