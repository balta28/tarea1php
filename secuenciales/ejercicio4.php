<?php
$suma = 0;
$resta = 0;
$divi = 0;
$multi = 0;
$n1 = 0;
$n2 = 0;
$mensaje = "";
 if (isset($_POST['enviar'])) {
$n1 = floatval ($_POST["n1"]);
 
$n2 = floatval ($_POST["n2"]);
 
$suma = $n1 + $n2;
$resta = $n1 - $n2;
$divi = $n1 / $n2;
$multi = $n1 * $n2;
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
    <title>Ejemplo 4</title>
</head>

<body>
    <div class="alert alert-success" role="alert">
        EJEMPLO 4
    </div>
    <div class="container">
        <form method="POST" action="ejercicio4.php">
            <div class="form-group">
                <label for="">Numero 1:</label>
                <input type="number" class="form-control" placeholder="ingrese un numero.." step="0.1" name="n1">
            </div>
            <div class="form-group">
                <label for="">Numero 2:</label>
                <input type="number" class="form-control" placeholder="ingrese un numero..." step="0.1" name="n2">
            </div>

            <button type="submit" name="enviar" class="btn btn-primary">calcular</button>
        </form>
        <div class="jumbotron">
            <table class = "table table-hover ">
                <tr class="btn-primary">
                    <th>Suma +</th>
                    <th>Resta -</th>
                    <th>Division /</th>
                    <th>Multiplicacion *</th>
                </tr>
                <tr>
                <td><?php echo number_format($suma, 2); ?></td>
                <td><?php echo number_format($resta, 2); ?></td>
                <td><?php echo number_format($divi, 2); ?></td>
                <td><?php echo number_format($multi, 2); ?></td>
                    </tr>
                    
            </table>
                
        </div>
        <?php echo $mensaje; ?>
    </div>
</body>

</html>