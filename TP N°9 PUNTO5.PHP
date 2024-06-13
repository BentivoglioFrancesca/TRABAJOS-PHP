<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Suscripción</title>
    <link rel="stylesheet" type="text/css" href="franchu.css">
</head>
<body>
    <h2>Formulario de suscripción</h2>
    <form method="post" action="hola.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br>

        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br>

        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
            <option value="prefiero_no_decirlo">Prefiero no decirlo</option>
        </select><br>

        <label for="lugar_nacimiento">Lugar de Nacimiento:</label>
        <input type="text" id="lugar_nacimiento" name="lugar_nacimiento" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <label>Intereses y/o Hobbies:</label><br>
        <input type="checkbox" id="deportes" name="deportes" value="deportes">
        <label for="deportes">Deportes</label><br>
        <input type="checkbox" id="musica" name="musica" value="musica">
        <label for="musica">Música</label><br>
        <input type="checkbox" id="lectura" name="lectura" value="lectura">
        <label for="lectura">Lectura</label><br>
        <input type="checkbox" id="viajes" name="viajes" value="viajes">
        <label for="viajes">Viajes</label><br>

        <label for="comentarios">Comentarios:</label><br>
        <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea><br>

        <input type="submit" value="Suscribirse">
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Datos de Suscripción</title>
</head>
<body>
    <h2>Datos de Suscripción</h2>
    <?php
    $nombre = ($_REQUEST['nombre']);
    $apellido = ($_REQUEST['apellido']);
    $edad = ($_REQUEST['edad']);
    $dni = ($_REQUEST['dni']);
    $fecha_nacimiento = ($_REQUEST['fecha_nacimiento']);
    $genero = ($_REQUEST['genero']);
    $lugar_nacimiento = ($_REQUEST['lugar_nacimiento']);
    $direccion = ($_REQUEST['direccion']);
    $intereses = ($_REQUEST['intereses']) ? $_REQUEST['intereses'] : [];
    $comentarios = ($_REQUEST['comentarios']);

    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
    echo "Edad: " . $edad . "<br>";
    echo "DNI: " . $dni . "<br>";
    echo "Fecha de Nacimiento: " . $fecha_nacimiento . "<br>";
    echo "Género: " . $genero . "<br>";
    echo "Lugar de Nacimiento: " . $lugar_nacimiento . "<br>";
    echo "Dirección: " . $direccion . "<br>";
    echo "Intereses y/o Hobbies: " . implode(", ", array_map('htmlspecialchars', $intereses)) . "<br>";
    echo "Comentarios: " . $comentarios . "<br>";
    ?>
</body>
</html>
