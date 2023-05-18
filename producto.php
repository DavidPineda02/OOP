<?php 
    class Producto {
        private $categoria;
        private $nombre;
        private $precio;
        private $color;
        private $cantidad;
        private $marca;
        private $serial;


        // Metodo Constructor 
        public function __construct($categoria, $nombre, $precio, $color, $cantidad, $marca, $serial)
        {
            $this-> categoria = $categoria;
            $this-> nombre = $nombre;
            $this-> precio = $precio;
            $this-> color = $color;
            $this-> cantidad = $cantidad;
            $this-> marca = $marca;
            $this-> serial = $serial;
        }

        // Metodo Get
        public function getCategoria(){
            return $this-> categoria;
        }

        public function getNombre(){
            return $this-> nombre;
        }

        public function getPrecio(){
            return $this-> precio;
        }

        public function getColor(){
            return $this-> color;
        }

        public function getCantidad(){
            return $this-> cantidad;
        }

        public function getMarca(){
            return $this-> marca;
        }

        public function getSerial(){
            return $this-> serial;
        }


        //Metodo Set
        public function setCategoria($categoria){
            return $this-> categoria;
        }

        public function setNombre($nombre){
            return $this-> nombre;
        }

        public function setPrecio($precio){
            return $this-> precio;
        }

        public function setColor($color){
            return $this-> color;
        }

        public function setCantidad($cantidad){
            return $this-> cantidad;
        }

        public function setMarca($marca){
            return $this-> marca;
        }

        public function setSerial($serial){
            return $this-> serial;
        }
    }

    // Instanciar clases
    $producto = new Producto("Telefonos", "Apple iPhone 14", "5.000.000", "Negro - Amarillo - Violeta - Azul", 200, "Apple", "1H3433J");

    $producto-> setCategoria("");
    $producto-> setNombre("");
    $producto-> setPrecio("");
    $producto-> setColor("");
    $producto-> setCantidad("");
    $producto-> setMarca("");
    $producto-> setSerial("");

    echo "<strong>Categoria:</strong> ". $producto-> getCategoria(). "<br><br>";
    echo "<strong>Nombre:</strong> ". $producto-> getNombre(). "<br><br>";
    echo "<strong>Precio:</strong> ". $producto-> getPrecio(). "<br><br>";
    echo "<strong>Color:</strong> ". $producto-> getColor(). "<br><br>";
    echo "<strong>Cantidad:</strong> ". $producto-> getCantidad(). "<br><br>";
    echo "<strong>Marca:</strong> ". $producto-> getMarca(). "<br><br>";
    echo "<strong>Serial:</strong> ". $producto-> getSerial(). "<br><br>";
?>