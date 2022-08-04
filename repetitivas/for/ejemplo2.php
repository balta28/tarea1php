<?php
$nombre = "";
$sueldo = "";
$aumento = "";
for($i = 0; $i < 50; $i++){
    $descuento = 0;
    $nombre = readline("ingrese su nombre");
    $sueldo = readline("ingrese su sueldo");
    if($sueldo < 1000){
      $aumento = $sueldo * 0.12;
    }else if($sueldo >= 1000 && $sueldo <= 25000){
        $aumento = $sueldo * 0.10;  
    }else if($sueldo > 25000){
        $aumento = $sueldo * 0.08;
    }
    echo "el sueldo es: " .$sueldo;
    echo "Aumento " .$aumento; 
    echo "Total a pagar: "  .($sueldo + $aumento);

}
?> 
