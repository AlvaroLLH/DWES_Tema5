<?php

    // Incluimos el controlador
    require_once '../controlador/controlador.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloProductos.css">
    <title>Productos</title>
</head>
<body>

    <h1>Productos:</h1>
    <ul>

        <!-- Recorremos el array y mostramos los productos disponibles -->
        <?php foreach ($productos as $indice => $producto) { ?>
            <li>
                <?= $producto->getNombre() ?> - <?= $producto->getPrecio() ?>&euro;
                <form action="../controlador/controlador.php" method="post">
                <input type="hidden" name="indice" value="<?= $indice ?>">
                <input type="submit" name="agregar" value="Agregar al carrito">
                </form>
            </li>
        <?php } ?>

    </ul>

    <!-- Botón para ver el carrito -->
    <p><a href="carrito.php">Ver carrito</a></p>

</body>
</html>