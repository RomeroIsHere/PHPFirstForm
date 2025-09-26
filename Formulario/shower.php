<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="./styles/Style.css" rel="stylesheet" >
</head>
<body>

    

<div class="mainDiv">
    <div class="titleDiv">Prueba de PHP</div>

    <?php
    include 'datos.php';
    include 'register.php';
    ?>
    <div style="display: flex; flex-direction: row;">
        <a href="./formulario.html"><button type="button" id="start">Formulario</button></a>
        <button type="button" id="identify">Reiniciar</button>
    </div>
</div>

</body>
</html>