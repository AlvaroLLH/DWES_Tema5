<?php

    // Incluimos la clase empleadoConstante
    include_once("empleadoConstante.php");

    // Creamos un empleado
    $empleado = new Empleado("Carlos", "Ruiz", 1500);

    // Mostramos sus datos
    echo "Datos completos: " . $empleado->getDatosCompleto();
    echo "Sueldo: " . $empleado->getSueldo();
    echo "Debe pagar impuestos: " . ($empleado->debePagarImpuestos() ? "Sí" : "No");

    // Le añadimos dos teléfonos y los mostramos
    $empleado->anadirTelefono(678901234);
    $empleado->anadirTelefono(610987654);
    echo "Teléfonos: " . $empleado->listarTelefonos();

    // Vaciamos los dos teléfonos y mostramos la lista vacía
    $empleado->vaciarTelefonos();
    echo "Teléfonos después de vaciar: " . $empleado->listarTelefonos();

    // Mostramos el sueldo tope para pagar impuestos
    echo "Sueldo tope para pagar impuestos: " . Empleado::SUELDO_TOPE . "€";

?>