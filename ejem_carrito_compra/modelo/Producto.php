<?php

    // Clase Producto
    class Producto {

        // Atributos
        private $nombre;
        private $precio;

        // Getters y Setters
        public function getNombre(): string {
            return $this->nombre;
        }

        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }

        public function getPrecio(): float {
            return $this->precio;
        }

        public function setPrecio(float $precio): void {
            $this->precio = $precio;
        }
    }

?>