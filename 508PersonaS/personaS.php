<?php

    // Clase Persona
    class Persona {

        // Atributos
        protected string $nombre;
        protected string $apellidos;
        protected int $edad;

        // Constructor
        public function __construct(string $nombre, string $apellidos, int $edad) {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->edad = $edad;
        }

        // Método toString
        public function __toString(): string {
            return "Nombre: {$this->nombre}, Apellidos: {$this->apellidos}, Edad: {$this->edad}";
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

        public function getEdad(): int {
            return $this->edad;
        }

        public function setEdad(int $edad): void {
            $this->edad = $edad;
        }
    }

    // Clase Empleado (hereda de Persona)
    class Empleado extends Persona {

        // Atributos
        private float $sueldo;
        private array $telefonos = [];
        private static float $sueldoTope = 1500;

        // Constructor
        public function __construct(string $nombre, string $apellidos, int $edad, float $sueldo = 1000.0) {
            parent::__construct($nombre, $apellidos, $edad);
            $this->sueldo = $sueldo;
        }

        // Getters y Setters
        public function getSueldo(): float {
            return $this->sueldo;
        }

        public function setSueldo(float $sueldo): void {
            $this->sueldo = $sueldo;
        }

        public static function getSueldoTope(): float {
            return self::$sueldoTope;
        }

        public static function setSueldoTope(float $sueldoTope): void {
            self::$sueldoTope = $sueldoTope;
        }

        // Método toString
        public function __toString(): string {
            $telefonos = $this->listarTelefonos();
            return parent::__toString() . ", Sueldo: {$this->sueldo}, Teléfonos: {$telefonos}";
        }

        // Método para saber si el empleado paga o no impuestos
        public function debePagarImpuestos(): bool {
            return $this->edad > 21 && $this->sueldo > self::$sueldoTope;
        }

        // Método para añadir un teléfono
        public function anadirTelefono(int $telefono): void {
            $this->telefonos[] = $telefono;
        }

        // Método para listar los teléfonos
        public function listarTelefonos(): string {
            return implode(", ", $this->telefonos);
        }

        // Método para vaciar la lista de teléfonos
        public function vaciarTelefonos(): void {
            $this->telefonos = [];
        }
    }

?>