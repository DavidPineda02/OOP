<?php
    class Jugador 
    {
        private static $goles = 5;

        public static function info() 
        {
            /* return $this-> goles; */
            return self :: $goles;
        }
    }

    /* $jugador = new Jugador();
    echo $jugador-> info(); */

    echo Jugador :: info();
?>