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
    <link rel="stylesheet" href="css/estiloCarrito.css">
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

        // Recorremos el carrito
        foreach($_SESSION['carrito'] as $productoSerializado) {

            // Deserializamos el producto y lo mostramos
            $producto = unserialize($productoSerializado);
            echo "<li>{$producto->getNombre()} - {$producto->getPrecio()}&euro;</li>";

        }

    }

    ?>

    <!-- Contenedor con los botones del carrito -->
    <div class="botones-carrito">

    <!-- Botón para realizar la compra -->
    <p><a href="realizar_pago.php" class="boton-comprar">Comprar</a></p>

    <!-- Botón para vaciar el carrito -->
    <form action="../controlador/controlador.php" method="post">
        <button type="submit" name="vaciar">Vaciar carrito</button>
    </form>
    
    </div>

    <!-- Botón para volver a la lista de productos -->
    <p><a href="productos.php">Volver a la lista de productos</a></p>

</body>
</html>