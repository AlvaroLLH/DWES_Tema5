<?php

    // Incluimos la clase empleadoConstructor
    include_once("empleadoConstructor.php");

    // Creamos 2 empleados
    $empleado1 = new Empleado("Luis", "López", 2000);
    $empleado2 = new Empleado("Ana", "Martínez");

    // Mostramos los datos del empleado1
    echo "Datos completos (empleado 1): " . $empleado1->getDatosCompleto() . "<br>";
    echo "Sueldo (empleado 1): " . $empleado1->getSueldo() . "<br>";
    echo "Debe pagar impuestos (empleado 1): " . ($empleado1->debePagarImpuestos() ? "Sí" : "No") . "<br><br>";

    // Mostramos los datos del empleado2
    echo "Datos completos (empleado 2): " . $empleado2->getDatosCompleto() . "<br>";
    echo "Sueldo (empleado 2): " . $empleado2->getSueldo() . "<br>";
    echo "Debe pagar impuestos (empleado 2): " . ($empleado2->debePagarImpuestos() ? "Sí" : "No") . "<br>";

    // Añadimos un teléfono al empleado2 y lo mostramos
    $empleado2->anadirTelefono(612345678);
    echo "Teléfonos (empleado 2): " . $empleado2->listarTelefonos();

?>