<?php
$ventas = 0;
$a = 0;
$b = 0;
$c = 0;
$i = "si";
do {
   $ventas = readline("INGRESE SU VENTA" . "\n");
   $i = readline("DESEA SEGUIR AGREGANDO COMPRAS" . "\n");
   if($ventas <= 200){
    $a++;
    
}else if($ventas > 200 && $ventas < 400){
    $b++;
    
}else if($ventas >= 400){
    $c++;
}
} while ($i == "si");
echo "SUS VENTAS IGUALES O MENORES A 200 FUERON: " . $a . "\n";
echo "SUS VENTAS MAYORES A 200 Y MENORES DE 400 FUERON: " . $b . "\n";
echo "SUS VENTAS MAYORES A 400 FUERON: " . $c . "\n";
?>