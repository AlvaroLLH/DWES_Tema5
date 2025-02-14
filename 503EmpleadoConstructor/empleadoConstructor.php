<?php

    /*
    Copia la clase del ejercicio anterior y modifícala. Los datos se asignan mediante el constructor. Si el constructor recibe un tercer parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo inicial.
    */

    // Clase Empleado
    class Empleado {

    // Atributos
    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    private array $telefonos = [];

    // Constructor
    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000.0) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    // Getters y Setters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo): void {
        $this->sueldo = $sueldo;
    }

    // Método para obtener los datos
    public function getDatosCompleto(): string {
        return "{$this->nombre} {$this->apellidos}";
    }

    // Método para saber si el empleado paga o no impuestos
    public function debePagarImpuestos(): bool {
        return $this->sueldo > 1500;
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