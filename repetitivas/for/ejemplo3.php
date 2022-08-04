<?php
$numero = 0;
$contador1 = 0;
$contador2 = 0;
$contador3 = 0;

for($i = 0; $i < 100; $i++){
$numero = readline("ingrese un numero #" . ($i + 1));
if($numero == 0) {
$contador1++;
}else if($numero < 0) {
    $contador2++;
    }else{
        $contador3++;
    }
    
}
echo "------------------------------------" ."\n";
echo "numeros nulos: " .$contador1 ."\n";
echo "------------------------------------" ."\n";
echo "Numeros Negativos: " .$contador2 ."\n";
echo "------------------------------------" ."\n";
echo "Numeros positivos: " .$contador3 ."\n";

?>