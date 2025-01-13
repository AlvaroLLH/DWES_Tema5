<?php

    // Incluimos la clase personaS
    require_once 'personaS.php';

    // Creamos un empleado
    $empleado = new Empleado("Ana", "López", 30, 2500);

    // Añadimos 2 teléfonos
    $empleado->anadirTelefono(612345678);
    $empleado->anadirTelefono(689654321);

    // Llamamos al método toString
    echo $empleado . "<br>";

    // Cambiamos la edad y el sueldo
    $empleado->setEdad(22);
    $empleado->setSueldo(1500);
    echo "Datos actualizados: " . "<br>";
    echo $empleado . "<br>";

    // Comprobamos si debe pagar impuestos con los datos actualizados
    echo "Debe pagar impuestos: " . ($empleado->debePagarImpuestos() ? "Sí" : "No");

?>