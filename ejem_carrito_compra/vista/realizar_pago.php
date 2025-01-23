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
    <link rel="stylesheet" href="css/estiloPago.css">
    <title>Realizar Pago de Productos</title>
</head>
<body>
    <?php

    if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {

        $total = 0;

        echo "<h1>Detalle del Pago:</h1>";
        echo "<ul>";

        // Iteramos por los productos en el carrito
        foreach ($_SESSION['carrito'] as $item) {
            
            // Verificamos que el producto esté serializado y lo deserializamos
            if (isset($item['producto']) && is_string($item['producto'])) {
                $producto = unserialize($item['producto']);

                $cantidad = $item['cantidad'];
                $subtotal = $producto->getPrecio() * $cantidad;
                $total += $subtotal;

                // Mostramos el detalle del producto
                echo "<li>{$producto->getNombre()} - {$cantidad} unidad(es) - {$subtotal}€</li>";

            } else {
                echo "<li>Producto no válido en el carrito.</li>";
            }
        }

        echo "</ul>";
        echo "<p><strong>Total a pagar:</strong> {$total}€</p>";

        // Vaciamos el carrito después de completar el pago
        unset($_SESSION['carrito']);
        echo "<p>Pago completado. El carrito ha sido vaciado.</p>";

    } else {
        echo "<p>No hay productos en el carrito para realizar el pago.</p>";
    }

    ?>

    <!-- Botón para volver al listado de productos -->
    <p><a href="productos.php">Volver a la lista de productos</a></p>
    
</body>
</html>