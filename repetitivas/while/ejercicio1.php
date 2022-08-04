<?php
$i = 1;
$n = 0;
$suma = 0;

while($n <= 1800){
    $n = readline("Ingrese un numero");
    if(($i % 2) == 0){
      $n += 2;
    }else{
        $n += 3;
    }
    $suma = $suma + $n;
    $i++;

    
}
echo "La suma es: " . $suma;
?>