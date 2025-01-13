<?php

    /*
    Podemos utilizar las siguientes funciones para averiguar si hay relación entre dos clases:

    - get_parent_class(object): string
    - is_subclass_of(object, string): bool
    */

    // Incluimos la clase Producto y Tv
    include_once("producto_tv.php");

    // Creamos una Tv y le asignamos un código
    $t = new Tv("33", "Lucky Goldstar", "LG", "100.00", "20", "4K");

    // Si la Tv pertenece a la clase Producto, muestra su resumen
    if($t instanceof Producto) {
        echo $t->mostrarResumen();
    }

    // Guardamos la clase padre de la Tv
    $padre = get_parent_class($t);
    echo "<br>La clase padre es: " . $padre;

    // Creamos objetoPadre a partir de la variable padre
    $objetoPadre = new $padre("33", "Lucky Goldstar", "LG", "100.00");

    // Mostramos el resumen del objetoPadre
    echo $objetoPadre->mostrarResumen();

    // Si la tv es subclase de Producto, lo dice
    if(is_subclass_of($t, 'Producto')) {
        echo "<br>" . "Soy un hijo de Producto";
    }

?>