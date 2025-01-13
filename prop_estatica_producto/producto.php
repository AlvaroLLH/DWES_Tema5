<?php

    /*
    Los atributos estáticos de una clase se utilizan para guardar información general sobre la misma,
    como puede ser el número de objetos que se han instanciado. Sólo existe un valor del atributo,
    que se almacena a nivel de clase.

    Se declaran con static y se referencian con ::. Si desde un método queremos
    acceder a una propiedad estática de la misma clase, se utiliza
    la referencia self:    self::$numProductos
    */

    // Clase Producto
    class Producto {

        // Atributos
        const IVA = 0.23;
        private static $numProductos = 0;
        private $codigo;

        // Constructor
        public function __construct(string $cod) {
            self::$numProductos++;
            $this->codigo = $cod;
        }

        // Método que muestra el resumen del Producto
        public function mostrarResumen(): string {
            return "El producto " . $this->codigo . " es el número " . self::$numProductos . "<br>";
        }
    }

    // Creamos 3 productos y mostramos su resumen
    $prod1 = new Producto("PS5");
    echo $prod1->mostrarResumen();
    $prod2 = new Producto("Xbox Series X");
    echo $prod2->mostrarResumen();
    $prod3 = new Producto("Nintendo Switch");
    echo $prod3->mostrarResumen();

?>