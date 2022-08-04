<?php
$venta = 0;
$op = 0;
$des1 = 0;
$dest1 = 0;
$j = " si";
$i = 0;
$ventadeldia = 0;
$totaldes1 = 0;
$des2 = 0;
$dest2 = 0;
$ventadia = 0;
$totaldes2 = 0;
$ventassin = 0;
$ventas1 = 0;
$totaldes = 0;
$ventat = 0;
while($j == " si"){
$venta = readline("Ingrese su compra ". ($i + 1));
echo "1- rojo" . "\n";
echo "2- amarillo" . "\n";
echo "3- blanco" . "\n";
$op = readline("Seleccione un color");
switch ($op) {
    case 1:
        $des1 = ($venta * 0.40);
        $dest1 = $venta - $des1;
        echo "FELICIDADES TIENE UN DESCUENTO DEL 40% SU NUEVO TOTAL A PAGAR ES: $" . $dest1 . "\n";
        $ventadeldia = $ventadeldia + $dest1;
        $totaldes1 = $totaldes1 + $des1;
        break;
        case 2:
            $des2 = ($venta * 0.25);
            $dest2 = $venta - $des2;
           echo "FELICIDADES TIENE UN DESCUENTO DEL 25% SU NUEVO TOTAL A PAGAR ES: $" . $dest2 . "\n";
            $ventadia = $ventadia + $dest2;
            $totaldes2 = $totaldes2 + $des2;
            break;
            case 3:
               echo "LO SENTIMOS ESE COLOR NO TIENE NINGUN DESCUENTO" . "\n";
                $ventassin = $ventassin + $venta;
                break;
    
    default:
    echo "La opcion no existe";
        break;
}
$j = readline("Hay un nuevo cliente?");
$ventas1 = $ventas1 + $venta;
$i++;
}
$totaldes = $totaldes1 + $totaldes2;
$ventat = $ventadeldia + $ventadia;
echo "LOS DESCUENTOS APLICADOS EN EL DIA FUERON: $" . $totaldes . "\n";
echo "LAS VENTAS CON LOS DESCUENTOS APLICADOS ESTE DIA FUE: $" . $ventat . "\n";
echo "EL TOTAL DE VENTAS SIN DESCUENTO FUE: $" . $ventassin;
?>