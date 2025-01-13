<?php

    // Clase Persona
    class Persona {

        // Atributos
        private $DNI;
        private $nombre;
        private $apellido;

        // Constructor
        function __construct($DNI, $nombre, $apellido) {
            $this->DNI = $DNI;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

        // Getters y Setters
        public function getNombre() {
            return $this->nombre;
        }

        public function getApellido() {
            return $this->apellido;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setApellido($apellido) {
            $this->apellido = $apellido;
        }

        // Método toString
        public function __tostring() {
            return "Persona: " . $this->nombre . " " . $this->apellido;
        }
    }

    // Clase Cliente que hereda de Persona
    class Cliente extends Persona {

        // Atributos
        private $saldo = 0;

        // Constructor
        function __construct($DNI, $nombre, $apellido, $saldo) {
            parent::__construct($DNI, $nombre, $apellido);
            $this->saldo = $saldo;
        }

        // Getters y Setters
        public function getSaldo() {
            return $this->saldo;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        // Método toString
        public function toString() {
            return "Cliente: " . $this->getNombre();
        }
    }

    // Creamos una Persona
    $per = new Persona("11111111A", "Ana", "Puertas");

    // La mostramos usando el método toString
    echo $per . "<br>";

    // Cambiamos su apellido
    $per->setApellido("Montes");

    // Volvemos a mostrarla
    echo $per . "<br>";

    // Creamos un cliente
    $cli = new Cliente("22222245A", "Pedro", "Sales", 100);

    // Lo mostramos
    echo $cli;

?>