<?php

    // Incluimos la clase empleadoTelefonos
    require_once 'empleadoTelefonos.php';

    // Creamos un empleado
    $empleado = new Empleado();
    $empleado->setNombre("María");
    $empleado->setApellidos("García");
    $empleado->setSueldo(1400);

    // Mostramos sus datos y si debe o no pagar impuestos
    echo "Datos completos: " . $empleado->getDatosCompleto() . "<br>";
    echo "Debe pagar impuestos: " . ($empleado->debePagarImpuestos() ? "Sí" : "No") . "<br>";

    // Añadimos 2 teléfonos y los mostramos
    $empleado->anadirTelefono(654123456);
    $empleado->anadirTelefono(687987654);
    echo "Teléfonos: " . $empleado->listarTelefonos() . "<br>";

    // Vaciamos los teléfonos
    $empleado->vaciarTelefonos();
    echo "Teléfonos después de vaciar: " . $empleado->listarTelefonos();

?>