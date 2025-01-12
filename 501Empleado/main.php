<?php

    // Incluimos la clase empleado
    include_once 'empleado.php';

    // Creamos un empleado
    $empleado = new Empleado();
    $empleado->setNombre("Juan");
    $empleado->setApellidos("Peréz");
    $empleado->setSueldo(1600);

    // Mostramos los datos y si debe o no pagar impuestos
    echo "Datos completos: " . $empleado->getDatosCompleto() . "<br>";
    echo "Debe pagar impuestos: " . ($empleado->debePagarImpuestos() ? "Sí" : "No");

?>