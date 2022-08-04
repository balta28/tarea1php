<?php
$numero = 0;
$suma = 0;
$impares = 0;
$prom = 0;
$suma2 = 0;
for($i = 0; $i < 300; $i++){
    $numero = readline("Ingrese un numero # ". ($i + 1));
    if(($numero % 2) == 0){
        $suma = $suma + $numero;
 
    }else{
        $impares++;
        $suma2 = ($suma2 + $numero);
        
    
    }
}
$prom = $suma2 / $impares;
echo "Suma de numeros pares: " . number_format($suma,2) . "\n";
echo "Promedio de Numeros impares: " . number_format($prom,2) . "\n";
?>  