<?php
 $i = "si" ;
 $pago = "";
 $op = 0;
 $contidad = 0;
  $precio = 0;
  $totalpagar = 0;
  $totalpagar2 = 0;
  $totalpagar3 = 0;
  $des1 = 0;
  $dest1 = 0;
  $desto1 = 0; 
  $des2 = 0;
  $dest2 = 0;
  $desto2 = 0;
  $des3 = 0;
  $dest3 = 0;
  $desto3 = 0; 
  $des61 = 0;
  $des62 = 0;
  $des6t = 0;
  $des63 = 0;
  $dest63 = 0;
  $desto63 = 0; 
  $des64 = 0;
  $dest64 = 0;
  $dest064 = 0;
  $totaldia = 0;
  $totaldia6 = 0;
  $totaldeldia = 0;

  do {
    echo "1- LIBROS" . "\n";
    echo "2- REVISTAS" . "\n";
    echo "3- CUADERNOS" . "\n";
   $op = readline("SELECCIONE LO QUE DESEA COMPRAR" . "\n");
   switch ($op) {
    case 1:
        $contidad = readline("INGRESE EL TOTAL DE LIBROS COMPRADOS");
        $precio = readline("INGRESE EL PRECIO UNITARIO");
        $pago = readline( "COMO DESEA PAGAR CONTADO O TARJETA" . "\n");
        $totalpagar = $precio * $contidad;

        if($pago == "contado"){
            $des61 = $totalpagar * 0.28;
            $des62 = $totalpagar - $des61;
            $des6t = $des6t + $des62;
            echo "POR SU COMPRA SER AL CONTADO TIENE UN DESCUENTO DEL 22% + EL 6% SU TOTAL A PAGAR ES: $" . $des62 . "\n";
        }else{
            $des1 = $totalpagar * 0.22;
            $dest1 = $totalpagar - $des1;
            $desto1 = $desto1 + $dest1;
            echo "SU TOTAL A PAGAR POR LOS LIBROS CON UN DESCUENTO DEL 22% ES: $" . $dest1 . "\n";
        }
        break;
        case 2:
            $contidad = readline("INGRESE EL TOTAL DE REVISTAS COMPRADAS");
            $precio = readline("INGRESE EL PRECIO UNITARIO");
            $pago = readline( "COMO DESEA PAGAR CONTADO O TARJETA" . "\n");
            $totalpagar2 = $precio * $contidad;
    
            if($pago == "contado"){
                $des63 = $totalpagar2 * 0.21;
                $dest63 = $totalpagar2 - $des63;
                $desto63 = $dest63 + $dest63;
                echo "POR SU COMPRA SER AL CONTADO TIENE UN DESCUENTO DEL 16% + EL 6% SU TOTAL A PAGAR ES: $" . $dest63 . "\n";
            }else{
                $des2 = $totalpagar2 * 0.16;
                $dest2 = $totalpagar2 - $des2;
                $desto2 = $desto2 + $dest2;
               echo "SU TOTAL A PAGAR POR LOS LIBROS CON UN DESCUENTO DEL 16% ES: $" . $dest2 . "\n";
            }
            break;
            case 3:
                $contidad = readline("INGRESE EL TOTAL DE CUADERNOS COMPRADAS");
                $precio = readline("INGRESE EL PRECIO UNITARIO");
                $pago = readline( "COMO DESEA PAGAR CONTADO O TARJETA" . "\n");
                $totalpagar3 = $precio * $contidad;
               
                if ($pago == "contado")
                {
                    $des64 = $totalpagar3 * 0.16;
                    $dest64 = $totalpagar3 - $des64;
                    $dest064 = $des6t + $dest64;
                   echo "POR SU COMPRA SER AL CONTADO TIENE UN DESCUENTO DEL 10% + EL 6% SU TOTAL A PAGAR ES: $" . $dest64 . "\n";
                    
                }
                else
                {
                    $des3 = $totalpagar3 * 0.10;
                    $dest3 = $totalpagar3 - $des3;
                    $desto3 = $desto3 + $dest3;
                  echo "SU TOTAL A PAGAR POR LOS LIBROS CON UN DESCUENTO DEL 10% ES: $" . $dest3 . "\n";
                   
                    
                }
                break;

    
    default:
        echo "Opcion no valida";
        break;
   }
   $i = readline("DECEA HACER UNA COMPRA" . "\n");
    
  } while ($i == "si");
  $totaldia = ($desto1 + $desto2 + $desto3);
  $totaldia6 = ($des6t + $desto63 + $dest064);
  $totaldeldia = ($totaldia + $totaldia6);
 echo "EL TOTAL DE VENTAS DEL DIA DE LAS PERSONAS QUE PAGARON AL CONTADO FUE: $" . $totaldia6 . "\n";
 echo "EL TOTAL DE VENTAS DEL DIA DE PERSONAS QUE PAGARON CON TARJETA ES: $" . $totaldia . "\n";
 echo "EL TOTAL DEL DIA FUE: $" . $totaldeldia . "\n";
?>