<?php

    // Arrancamos la sesión
    session_start();

    // Incluimos el modelo de Producto (asegurándonos de que la clase esté disponible)
    if (!class_exists('Producto')) {
        require_once '../modelo/Producto.php';
    }

    // Lista de productos usando un Array (simulando una BD)
    $productos = [
        new Producto("Champú", 10),
        new Producto("Jabón", 5),
        new Producto("Pasta de dientes", 3)
    ];

    // Creamos la sesión carrito si no existe
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    // Manejamos las acciones del carrito
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Agregamos el producto al carrito
        if (isset($_POST['agregar'])) {

            // Convertimos el índice a entero y validamos
            $indice = intval($_POST['indice']);

            if (!isset($productos[$indice])) {
                header('Location: ../vista/productos.php?error=producto_no_encontrado');
                exit;
            }

            // Obtenemos el producto correspondiente
            $productoAgregado = $productos[$indice];
            $encontrado = false;

            // Verificamos si el producto ya está en el carrito
            foreach ($_SESSION['carrito'] as &$item) {

                // Validamos si el producto está serializado antes de deserializar
                if (isset($item['producto']) && is_string($item['producto'])) {
                    $producto = unserialize($item['producto']);

                    if ($producto->getNombre() === $productoAgregado->getNombre()) {
                        $item['cantidad'] += 1; // Aumentamos en 1 la cantidad
                        $encontrado = true;
                        break;
                    }
                }
            }

            // Si no se encuentra, añadimos el producto con cantidad inicial 1
            if (!$encontrado) {
                $_SESSION['carrito'][] = [
                    'producto' => serialize($productoAgregado),
                    'cantidad' => 1
                ];
            }

            // Redirigimos de vuelta a la lista de productos
            header('Location: ../vista/productos.php');
            exit;
        }

        // Vaciamos el carrito
        if (isset($_POST['vaciar'])) {
            $_SESSION['carrito'] = [];
            header("Location: ../vista/productos.php");
            exit;
        }

        // Eliminamos un producto específico del carrito
        if (isset($_POST['eliminar'])) {
            $indiceEliminar = intval($_POST['eliminar']);

            if (isset($_SESSION['carrito'][$indiceEliminar])) {
                unset($_SESSION['carrito'][$indiceEliminar]);
                $_SESSION['carrito'] = array_values($_SESSION['carrito']); // Reindexamos el array
            }

            header("Location: ../vista/carrito.php");
            exit;
    }
    }

?>