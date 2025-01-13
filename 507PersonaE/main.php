<?php

    // Incluimos la clase personaE
    require_once 'personaE.php';

    // Creamos 2 empleados
    $empleado1 = new Empleado("Laura", "Martínez", 25, 2000);
    $empleado2 = new Empleado("Pedro", "Sánchez", 19, 1400);

    // Mostramos los datos del empleado 1
    echo "Datos completo (Empleado 1): " . $empleado1->getDatosCompleto() . "<br>";
    echo "Sueldo: " . $empleado1->getSueldo() . "€" . "<br>";
    echo "Debe pagar impuestos: " . ($empleado1->debePagarImpuestos() ? "Sí" : "No") . "<br>";

    // Mostramos los datos del empleado 2
    echo "Datos completo (Empleado 2): " . $empleado2->getDatosCompleto() . "<br>";
    echo "Sueldo: " . $empleado2->getSueldo() . "€" . "<br>";
    echo "Debe pagar impuestos: " . ($empleado2->debePagarImpuestos() ? "Sí" : "No") . "<br>";

    // Modificamos el sueldo tope
    Empleado::setSueldoTope(1800);
    echo "Nuevo sueldo tope: " . Empleado::getSueldoTope() . "€" . "<br>";

    // Mostramos si ahora el empleado 1 paga o no impuestos
    echo "Empleado 1 ahora debe pagar impuestos: " . ($empleado1->debePagarImpuestos() ? "Sí" : "No");

?>