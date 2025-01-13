<?php

    // Incluimos la clase persona
    include_once("persona.php");

    // Creamos un empleado
    $empleado = new Empleado("Carlos", "Gómez", 1800);

    // Mostramos sus datos
    echo "Nombre completo: " . $empleado->getDatosCompleto() . "<br>";
    echo "Sueldo: " . $empleado->getSueldo() . "€" . "<br>";
    echo "Debe pagar impuestos: " . ($empleado->debePagarImpuestos() ? "Sí" : "No") . "<br>";

    // Añadimos 2 teléfonos
    $empleado->anadirTelefono(678123456);
    $empleado->anadirTelefono(654987321);
    echo "Teléfonos: " . $empleado->listarTelefonos() . "<br>";

    // Vaciamos los teléfonos
    $empleado->vaciarTelefonos();
    echo "Teléfonos después de vaciar: " . $empleado->listarTelefonos();

?>