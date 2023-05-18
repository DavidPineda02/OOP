<?php
    class Camper {
        // 1. Declaracion de propiedades con modificadores de acceso
        private $nombre;
        private $email;
        private $celular;

        // 2. Metodo Constructor (metodo magico)
        /* Alternativamente puedo inicializar con valores patametrizados al constructor */
        public function __construct($nombre, $email, $celular)
        {
            $this-> nombre = $nombre;
            $this-> email = $email;
            $this-> celular = $celular;
        }

        // 3. Metodos (Getters and Setters)
            // Get --> Se obtienen valores de propiedades 
            // Set --> Se modifican, Setean valores de atributos - propiedades
        public function getNombre(){
            return $this-> nombre;
        }

        public function getEmail(){
            return $this-> email;
        }

        public function getCelular(){
            return $this-> celular;
        }

        // Metodos con parametros 
        public function getSaludo($saludo){
            return $saludo . " campus";
        }

        // Metodos Setters
        public function setNombre($nombre){
            $this-> nombre = $nombre;
        }

        public function setEmail($email){
            $this-> email = $email;
        }

        public function setCelular($celular){
            $this-> celular = $celular;
        }
    }

    // Instanciar clases --> variables de instancias 
    $camper = new Camper ("David Pineda", "David02@gmail.com", 3173289632);

    $camper-> setNombre("Paula");
    $camper-> setEmail("Paula30@gmail.com");
    $camper-> setCelular(3176489265);

    echo $camper-> getNombre() . "<br>";
    echo $camper-> getEmail() . "<br>";
    echo $camper-> getCelular() . "<br>";
    echo $camper-> getSaludo("Hello") . "<br>";
?>
