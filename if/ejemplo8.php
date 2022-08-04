<?php
$precio = 0;
$marca = "";
$descuento = 0;
$total = 0;
$mensaje = "";
if (isset($_POST['enviar'])) {
    $precio = floatval ($_POST['precio']);
    $marca =  ($_POST['marca']);

    if($marca == "volkswagen"){
     $descuento = $precio * 0.08;
     $mensaje = "<div role='alert'> 8%</div>";
    }else if($marca == "toyota"){
     $descuento = $precio * 0.09;
     $mensaje = "<div class= role='alert'> 9%</div>";
    }else if($marca == "hyundai"){
        $descuento = $precio * 0.06;
        $mensaje = "<div role='alert'> 6%</div>";
    }else if($marca == "mazda"){
        $descuento = $precio * 0.05;
        $mensaje = "<div  role='alert'> 5%</div>";
    }
   $total = $precio - $descuento;
    
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>selectiva</title>
</head>

<body>
    <div class="alert alert-success" role="alert">
        EJEMPLO 7
    </div>
    <div class="container">
        <form method="POST" action="ejemplo8.php">
        <div class="form-group">
                <label for="">Seleccione la Marca:</label>
                <select name="marca" id="marca" class="form-control">
                    <option value="seleccionar">seleccionar</option>
                  <option value="volkswagen">volkswagen</option>
                   <option value="toyota">toyota</option>
                       <option value="hyundai">hyundai</option>
                     <option value="mazda">mazda</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="">Precio:</label>
                <input type="number" class="form-control" placeholder="ingrese el precio" name="precio">
            </div>
        

            <button type="submit" name="enviar" class="btn btn-outline-success">Seleccionar</button>
        </form>
        <div class="jumbotron">
         <table class="table table-hover table-bordered">
            <tr class = "btn-primary">
                <th>Marca</th>
                <th>Precio</th>
                <th>Descuento %</th>
                <th>Descuento</th>
                <th>Precio a pagar</th>
            </tr>
            <tr>
                <td><?php echo $marca?></td>
                <td>$<?php echo number_format($precio,2)?></td>
                <td><?php echo $mensaje?></td>
                <td>$<?php echo number_format($descuento,2)?></td>
                <td>$<?php echo number_format($total,2)?></td>
            </tr>
         </table>
        </div>
    </div>
</body>

</html>