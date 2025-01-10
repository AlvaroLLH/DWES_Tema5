<?php

// Clase Persona
class Persona {

    // Atributos del objeto
    private string $nombre;
    private string $apellido;

    // Método set para el nombre
    public function setNombre(string $nom) {
        $this->nombre=$nom;
    }

    // Método set para el apellido
    public function setApellido(string $ape) {
        $this->apellido=$ape;
    }

    // Método get para el nombre
    public function getNombre() : string {
        return $this->nombre;
    }

    // Método get para el apellido
    public function getApellido() : string {
        return $this->apellido;
    }

    // Función que imprime el nombre completo
    public function imprimirNombreCompleto() {
        echo "Me llamo " . $this->nombre . " " . $this->apellido;
    }

    // Constructor
    public function __construct(string $nom, string $ape) {
        $this->nombre=$nom;
        $this->apellido=$ape;
    }

    // Método toString
    public function __tostring() {
        return "Persona: " . $this->nombre . " " . $this->apellido;
    }
}

?>