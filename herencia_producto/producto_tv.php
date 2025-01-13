<?php

    // Clase Producto
    class Producto {

        // Atributos
        public $codigo;
        public $nombre;
        public $nombreCorto;
        public $PVP;

        // Constructor
        public function __construct(string $cod, string $nom, string $nomC, string $pvp) {
            $this->codigo = $cod;
            $this->nombre = $nom;
            $this->nombreCorto = $nomC;
            $this->pvp = $pvp;
        }

        // Método para mostrar el resumen
        public function mostrarResumen() {
            echo "<p>Prod: " . $this->codigo . "</p>";
        }
    }

    // Clase Tv que hereda de la clase Producto
    class Tv extends Producto {

        // Atributos
        public $pulgadas;
        public $tecnologia;

        // Constructor
        public function __construct(string $cod, string $nom, string $nomC, string $pvp, string $pul, string $tec) {
        
        // Llamar al constructor de la clase padre (Producto)
        parent::__construct($cod, $nom, $nomC, $pvp);

        // Inicializamos los atributos de la clase Tv
        $this->pulgadas = $pul;
        $this->tecnologia = $tec;
    }

        // Método para mostrar el resumen
        public function mostrarResumen() {
            echo "<p>Prod: " . $this->codigo . "</p><p>Pulgadas: " . $this->pulgadas . "</p><p>Tecnología: " . $this->tecnologia;
        }
    }

?>