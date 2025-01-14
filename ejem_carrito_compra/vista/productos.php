<?php

    // Incluimos el controlador
    require_once '../controlador/controlador.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>

    <h1>Productos:</h1>
    <ul>
        <?php foreach ($productos as $indice => $producto) { ?>
            <li>
                <?= $producto->getNombre() ?> - <?= $producto->getPrecio() ?>&euro;
                <form action="controlador.php" method="post">
                <input type="hidden" name="indice" value="<?= $indice ?>">
                <input type="submit" name="agregar" value="Agregar al carrito">
                </form>
            </li>
        <?php } ?>
    </ul>
    <p><a href="carrito.php">Ver carrito</a></p>
</body>
</html>