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
            <h1 class="titulo">Galería</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <?php foreach ($fotos as $foto): ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id']; ?>">
                      <img src="fotos/<?php echo $foto['imagen']; ?>">
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="paginacion">
                <?php if ($pagina_actual > 1): ?>
                  <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"> <i class="fas fa-arrow-circle-left"></i> Página Anterior</a>
                <?php endif; ?>

                <?php if ($total_paginas != $pagina_actual): ?>
                  <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Página Siguiente <i class="fas fa-arrow-circle-right"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">
            Galería creada por Maximiliano Cóppola
        </p>
    </footer>
</body>
</html>
