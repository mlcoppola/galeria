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
            <h1 class="titulo">Subir Foto</h1>
        </div>
    </header>

    <div class="contenedor">
        <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <label for="foto">Seleccioná tu foto</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Título de la foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Descripción:</label>
            <textarea name="texto" id="texto" placeholder="Ingresá una descripción"></textarea>

            <?php if (isset($error)): ?>
              <p class="$error"><?php echo $error; ?></p>
            <?php endif; ?>

            <input type="submit" class="submit" value="Subir Foto">
        </form>
    </div>

    <footer>
        <p class="copyright">
            Galería creada por Maximiliano Cóppola
        </p>
    </footer>
</body>
</html>
