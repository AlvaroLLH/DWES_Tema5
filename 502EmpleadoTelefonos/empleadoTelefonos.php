<?php

    /*
    Copia la clase del ejercicio anterior y modifícala. Añade una propiedad privada que almacene un array de números de teléfonos. Añade los siguientes métodos:

    - public function anadirTelefono(int $telefono) : void → Añade un teléfono al array
    - public function listarTelefonos(): string → Muestra los teléfonos separados por comas
    - public function vaciarTelefonos(): void → Elimina todos los teléfonos
    */

    // Cñase Empleado
    class Empleado {

        // Atributos
        private string $nombre;
        private string $apellidos;
        private float $sueldo;
        private array $telefonos = [];

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

        // Métodos para mostrar los datos
        public function getDatosCompleto(): string {
            return "{$this->nombre} {$this->apellidos}";
        }

        // Método para saber si el empleado paga o no impuestos
        public function debePagarImpuestos(): bool {
            return $this->sueldo > 1500;
        }

        // Método para añadir telefono
        public function anadirTelefono(int $telefono): void {
            $this->telefonos[] = $telefono;
        }

        // Método para listar los telefonos
        public function listarTelefonos(): string {
            return implode(", ", $this->telefonos);
        }

        // Método para vaciar el array de telefonos
        public function vaciarTelefonos(): void {
            $this->telefonos = [];
        }
    }

?>