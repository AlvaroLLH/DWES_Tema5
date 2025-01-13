<?php

    // Clase Persona
    class Persona {

        // Atributos
        protected string $nombre;
        protected string $apellidos;

        // Constructor
        public function __construct(string $nombre, string $apellidos) {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
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

        public function getDatosCompleto(): string {
            return "{$this->nombre} {$this->apellidos}";
        }
    }

    // Clase Empleado (hereda de Persona)
    class Empleado extends Persona {

        // Atributos
        private float $sueldo;
        private array $telefonos = [];
        private static float $sueldoTope = 1500;

        // Constructor
        public function __construct(string $nombre, string $apellidos, float $sueldo = 1000.0) {
            parent::__construct($nombre, $apellidos);
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

        // Método para saber si el empleado paga o no impuestos
        public function debePagarImpuestos(): bool {
            return $this->sueldo > self::$sueldoTope;
        }

        // Método para añadir un teléfono
        public function anadirTelefono(int $telefono): void {
            $this->telefonos[] = $telefono;
        }

        // Método para listar los teléfonos
        public function listarTelefonos(): string {
            return implode(", ", $this->telefonos);
        }

        // Método para vaciar los teléfonos
        public function vaciarTelefonos(): void {
            $this->telefonos = [];
        }
    }

?>