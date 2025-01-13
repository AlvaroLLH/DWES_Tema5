<?php

    // Incluimos la clase empleadoSueldo
    include_once("empleadoSueldo.php");

    // Creamos un empleado con un sueldo de 2000
    $empleado1 = new Empleado("Juan", "Pérez", 2000);
        
    // Mostrar si el empleado debe pagar impuestos
    echo $empleado1->getDatosCompleto() . "<br>";

    if ($empleado1->debePagarImpuestos()) {
        echo "El empleado debe pagar impuestos.<br>";
    } else {
        echo "El empleado no debe pagar impuestos.<br>";
    }
        
    // Cambiamos el sueldoTope a 1800
    Empleado::setSueldoTope(1800);

?>