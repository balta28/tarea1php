<?php
$venta1 = 0;
$venta2 = 0;
$ventat1 = 0;
$ventat2 = 0;
$op = " si";
$i = 0;
$total = 0;
while($op == " si"){
$venta1 = readline("Ingrese las compras del mismo precio o marca " . ($i + 1));
$venta2 = readline("Ingrese las demas compras");
$op = readline("Desea seguir comprando");
$ventat1 = $ventat1 + $venta1;
$ventat2 = $ventat2 + $venta2;
$i++;
}
$total = $ventat1 + $ventat2;
echo "El total de compras del mismo precio es:" . "\n";
echo number_format($ventat1,2) . "\n"; 
echo "El total de las demas compras es:" . "\n";
echo number_format($ventat2,2) . "\n"; 
echo "El total de compras es:" . "\n";
echo number_format($total,2) . "\n"; 
?>