<?php

// Incluimos el archivo que contiene la clase Persona
include_once("persona.php");

// Creamos un objeto
$lolo = new Persona("Lolo", "García");
$lola = new Persona("Lola", "Lopez");
$jose = new Persona('Jose', 'Perico');

//$lolo->setNombre("Lolo");
//$lolo->setApellido("García");

// Llamamos a la funcion imprimirNombreCompleto para mostrar a lolo y lola
$lolo->imprimirNombreCompleto();
echo "<br>";
$lola->imprimirNombreCompleto();
echo "<br>" . $lolo;

// Serializamos a lola
$serializadaPersona = serialize($lola);

echo "<br>" . $serializadaPersona;

// Deserializamos a jose
$deserializadaPersona = unserialize($serializadaPersona);

echo "<br>" . $deserializadaPersona->nombre;
echo "<br>" . $deserializadaPersona->apellido;

?>