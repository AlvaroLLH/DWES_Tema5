<?php

    // Clase Empleado
    class Empleado {
        
        // Atributos
        private string $nombre;
        private string $apellidos;
        private int $sueldo;

        // Método set para el nombre
        public function setNombre(string $nom) {
            $this->nombre=$nom;
        }

        // Método set para los apellidos
        public function setApellidos(string $ape) {
            $this->apellidos=$ape;
        }

        // Método set para el nombre
        public function setSueldo(int $sue) {
            $this->sueldo=$sue;
        }

        // Método get para el nombre
        public function getNombre(): string {
            return $this->nombre;
        }

        // Método get para los apellidos
        public function getApellidos(): string {
            return $this->apellidos;
        }

        // Método get para el sueldo
        public function getSueldo() : int {
            return $this->sueldo;
        }

        // Método para obtener los datos completos
        public function getDatosCompleto() : string {
            return "Empleado " . $this->nombre . " " . $this->apellidos . "Sueldo: " . $this->sueldo;
        }

        // Método para indicar si debe pagar o no impuestos
        public function debePagarImpuestos() : bool {

            // Declaración de variables
            $pagaImpuestos = false;

            if($this->sueldo > 1500) {
                $pagaImpuestos = true;
                
            } else {
                $pagaImpuestos = false;
            }
        }
    }

?>