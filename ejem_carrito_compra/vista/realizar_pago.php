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
    <title>Realizar Pago de Productos</title>
</head>
<body>
    <?php

    if(isset($_SESSION['carrito'])) {

        // Lógica para el proceso de pago...

        // Vaciamos el carrito después de completar el pago
        unset($_SESSION['carrito']);
        echo "<p>Pago completado. El carrito ha sido vaciado</p>";

    } else {
        echo "<p>No hay productos en el carrito para realizar el pago.</p>";
    }

    ?>

    <!-- Botón para volver al listado de productos -->
    <p><a href="productos.php">Volver a la lista de productos</a></p>
    
</body>
</html>