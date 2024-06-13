<!DOCTYPE html>
<html>
<head>
    <title>Formulario de monto</title>
</head>
<body>
    <form method="post" action="floppy.php">
        Ingresa tu nombre:
        <input type="text" name="nombre">
        <br>
        Selecciona el monto adeudado:
        <br>
        <select name="monto">
            <option value="1-1000">1-1000</option>
            <option value="1001-10000">1001-10.000</option>
            <option value=">10000">>10.000</option>
        </select>
        <br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado del monto</title>
</head>
<body>
<?php
$nombre = $_REQUEST['nombre'];
$monto = $_REQUEST['monto'];

echo "Nombre: " . ($nombre) . "<br>";
echo "Monto adeudado: " . ($monto) . "<br>";

if ($monto == ">10000") {
    echo "tenes que pagar un recargo.";
} else {
    echo "no tenes que pagar un recargo.";
}
?>
</body>
</html>
