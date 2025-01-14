<?php

    // Incluimos la clase Producto
    require_once '../modelo/Producto.php';

    // Incluimos el controlador para obtener los productos y la lógica del carrito
    require_once '../controlador/controlador.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de la compra</title>
</head>
<body>
    <?php

    // Mensaje por si el carrito está vacío
    if(empty($_SESSION['carrito'])) {
        echo "<p>El carrito está vacío</p>";

    } else {

        // Mostramos el carrito
        echo "<h1>Carrito de Productos:</h1>";
        echo "<ul>";
        foreach($_SESSION['carrito'] as $producto) {
            echo "<li>{$producto->getNombre()} - {$producto->getPrecio()}&euro;</li>";
        }

        // Botón para confirmar la compra
        echo "</ul>";
        echo '<p><a href="realizar_pago.php">Comprar</a></p>';
    }

    ?>

    <!-- Botón para volver a la lista de productos -->
    <p><a href="productos.php">Volver a la lista de productos</a></p>

</body>
</html>