<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galería</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Foto: <?php if (!empty($foto['titulo'])) {
              echo $foto['titulo'];
            } else {
              echo $foto['imagen'];
            } ?></h1>
        </div>
    </header>

    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
            <p class="texto"><?php echo $foto['texto']; ?></p>
            <a href="index.php" class="regresar"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
        </div>
    </div>

    <footer>
        <p class="copyright">
            Galería creada por Maximiliano Cóppola
        </p>
    </footer>
</body>
</html>
