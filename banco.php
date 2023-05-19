<?php
    abstract class Banco 
    {
        public $nombre = "Davivienda";

        public function getNombre()
        {
            return $this-> nombre;
        }
    }

    /* $banco = new Banco();
    echo $banco-> getNombre(); */

    class Sucursal extends Banco 
    {
        public $direccion = "Calle 48 #12-90";

        public function getDireccion()
        {
            return $this-> direccion;
        }
    }

    $sucursal = new Sucursal;
    echo $sucursal-> getNombre(). "<br>";
    echo $sucursal-> getDireccion(). "<br>";
?>