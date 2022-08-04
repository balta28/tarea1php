<?php
$peso = 0;
$altura = 0;
$pron1 = 0;
$pron2 = 0;
$pro1 = 0;
$pro2 = 0;
$p1 = 0;
$p2 = 0;
$sig = "KG";
$s ="CM";

for ($i=0; $i < 50; $i++) { 
    $altura = readline("Ingrese su altura en cm " . ($i + 1));
    $peso = readline("Ingrese su peso en kg");
    $pron2 = $pron2 + $altura;
    $pron1 = $pron1 + $peso;
    

}
$pro2 = $pron2 / $i;
$pro1 = $pron1 / $i;
 
echo "El promedio de altura es: " .$pro2 . $s .  "\n";
echo "_______________________________________________" .  "\n";
echo "El promedio de peso es : " . $pro1 .$sig .  "\n";
?>