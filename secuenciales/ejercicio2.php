<?php
$base = 0;
$altura = 0;
$area = 0;
$perimetro = 0;
$mensaje = "";
if (isset($_POST['enviar'])) {
    $base = floatval ($_POST['base']);
    $altura = floatval ($_POST['altura']);
    $area = $base * $altura;
    $perimetro = ($base + $altura) + ($base + $altura);

 $mensaje = "<div class='alert alert-success' role='alert'> Datos procesados </div>";
 

    
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejemplo 2</title>
</head>

<body>
    <div class="alert alert-success" role="alert">
        EJEMPLO 2
    </div>
    <div class="container">
        <form method="POST" action="ejercicio2.php">
            <div class="form-group">
                <label for="">Base:</label>
                <input type="number" class="form-control" placeholder="ingrese la base.." step="0.1" name="base">
            </div>
            <div class="form-group">
                <label for="">Altura:</label>
                <input type="number" class="form-control" placeholder="ingrese la altura..." step="0.1" name="altura">
            </div>

            <button type="submit" name="enviar" class="btn btn-primary">calcular</button>
        </form>
        <div class="jumbotron">
                <h3>Area: <?php echo $area; ?></h3>
                <h3>Perimetro: <?php echo $perimetro; ?></h3>
        </div>
        <?php echo $mensaje; ?>
    </div>
</body>

</html>