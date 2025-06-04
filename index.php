<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Datos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dive">
        <h1>Captura de Datos Personales</h1>
        <br>
        <h2>Ingresa los Datos que se te piden</h2>
        <br>
        <p>Mi primera encuesta</p>
        <hr>
        <form action="resultados.php" method="post">
            <label for="Name">Nombre</label>
            <input type="text" id="Name" name="Name" value="Ingresar tu nombre"/>
            <hr>
            <label for="Age">Edad</label>
            <input type="Number" id="Age" name="Age" value="Ingresar tu edad"/>
            <hr>
            <label for="City">Ciudad</label>
            <input type="Text" id="City" name="City" value="Ingresar tu ciudad"/>
            <hr>
            <label for="Hobby">Pasatiempo</label>
            <input type="Text" id="Hobby" name="Hobby" value="Ingresar tu pasatiempo"/>
            <hr>
            <button type="submit">¡Ingresamos Datos!</button>
        </form>
    </div>

</body>
</html>