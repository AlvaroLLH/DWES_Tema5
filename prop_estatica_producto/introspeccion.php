<?php

    /*
    Al trabajar con clases y objetos, existen un conjunto de funciones ya definidas por el lenguaje
    que permiten obtener información sobre los objetos:

    - instanceof: permite comprobar si un objeto es de una determinada clase
    - get_class: devuelve el nombre de la clase
    - get_declared_class: devuelve un array con los nombres de las clases definidas
    - class_alias: crea un alias
    - class_exists/method_exists/property_exists:true: si la clase/método/propiedad está definida
    - get_class_methods / get_class_vars / get_object_vars: Devuelve un array con los
    nombres de los métodos / valores inciales de las propiedades (si los tiene) no protegidas
    de una clase / propiedades de un objeto que son accesibles desde dónde se hace la llamada.
    */

    // Incluimos la clase producto
    include_once("producto.php");

    // Creamos un producto
    $p = new Producto("PS4");

    // Comprobamos si el producto es de la clase Producto
    if($p instanceof Producto) {

        // Mostramos el nombre de la clase
        echo "Es un producto" . "<br>";
        echo "La clase es " . get_class($p) . "<br>";

        // Creamos un alias
        class_alias("Producto", "Articulo");

        // Creamos un artículo y mostramos el nombre de la clase
        $c = new Articulo("Nintendo Switch");
        echo "Un artículo es un " . get_class($c) . "<br>";

        // Array que contiene los método de la clase Producto
        print_r(get_class_methods("Producto"));
        echo "<br>";

        // Array que contiene las iniciales de las propiedades
        print_r(get_class_vars("Producto"));
        echo "<br>";

        // Array que contiene las propiedades de un objeto que son accesibles
        print_r(get_object_vars($p));

        // Si el método mostrarResumen existe, lo llamamos
        if(method_exists($p, "mostrarResumen")) {
            $p->mostrarResumen();
        }
    }

?>