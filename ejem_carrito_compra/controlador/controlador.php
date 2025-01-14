<?php

    // Arrancamos la sesión
    session_start();

    // Incluimos el modelo
    require_once '../modelo/Producto.php';

    // Lista de productos (simulando una BD)
    $productos = [
        new Producto("Champú", 10),
        new Producto("Jabón", 5),
        new Producto("Pasta de dientes", 3)
    ];

    // Creamos la sesión carrito si no existe
    if(!isset($_SESSION['carrito'])) {

        // Variable de sesión carrito de tipo array
        $_SESSION['carrito'] = [];
    }

    // Agregamos el producto al carrito si se ha enviado el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar'])) {

        // Guardamos el índice
        $indice = $_POST['indice'];

        // Guardamos el objeto producto correspondiente al índice
        $_SESSION['carrito'][] = $productos[$indice];

        // Redirige de vuelta a la lista de productos
        header('Location: ../vista/productos.php');
        exit;
        
    }

?>