<?php
session_start();
require("Auth.php");
$userId = Authorize();
?>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="José">
    
    <title>Alumnos</title>
</head>

<body>
    <h1>Web privada Paula</h1>
    <a href="index.php?logout=1">Log Out</a>
    <h2>"esta pagina ejemplo!"</h2>
   <h2>Formulario:</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Nombre:
    <input type="text" name="nombre" maxlength="50"><br>
    Contraseña:
    <input type="password" name="password"><br>
    Educacion:
    <select name="educacion">
        <option value="sin-estudios">Sin estudios</option>
        <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
        <option value="formacion-profesional">Formación profesional</option>
        <option value="universidad">Universidad</option>
    </select> <br>
    Nacionalidad:
    <input type="radio" name="nacionalidad" value="hispana">Hispana</input>
    <input type="radio" name="nacionalidad" value="otra">Otra</input><br>
    Idiomas:
    <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input>
    <input type="checkbox" name="idiomas[]" value="inglés">Inglés</input>
    <input type="checkbox" name="idiomas[]" value="francés">Francés</input>
    <input type="checkbox" name="idiomas[]" value="aleman">Alemán</input><br>
    Email:
    <input type="text" name="email"><br>
    Sitio Web:
    <input type="text" name="sitioweb"><br>
    // Botón de enviar
    <input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>
</body>

</html>