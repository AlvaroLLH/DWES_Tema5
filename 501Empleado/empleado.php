<?php

    /*
    Crea una clase Empleado con su nombre, apellidos y sueldo. Encapsula las propiedades mediante getters/setters y añade métodos para:

    - Obtener datos completos → getDatosCompleto(): string
    - Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando el sueldo es superior a 1500€) → debePagarImpuestos(): bool
    */

    // Clase Empleado
    class Empleado {
        
        // Atributos
        private string $nombre;
        private string $apellidos;
        private int $sueldo;

        // Constructor
        public function __construct() {
            $this->nombre = '';
            $this->apellidos = '';
            $this->sueldo = 0.0;
        }

        // Getters y Setters
        public function getNombre(): string {
            return $this->nombre;
        }

        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }

        public function getApellidos(): string {
            return $this->apellidos;
        }

        public function setApellidos(string $apellidos): void {
            $this->apellidos = $apellidos;
        }

        public function getSueldo(): float {
            return $this->sueldo;
        }

        public function setSueldo(float $sueldo): void {
            $this->sueldo = $sueldo;
        }

        // Método para obtener los datos completos
        public function getDatosCompleto() : string {
            return "{$this->nombre} {$this->apellidos}";
        }

        // Método para indicar si debe pagar o no impuestos
        public function debePagarImpuestos(): bool {
            return $this->sueldo > 1500;
        }
    }

?>