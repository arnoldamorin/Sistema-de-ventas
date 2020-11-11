<?php
    class clientes{
        private $idusuario;
        private $usuario;
        private $clave;
        private $nombre;        
        private $apellido;
        private $telefono;
        private $correo;
        
        public function __construct(){

        }
        public function __get($atributo){
            return $this->$atributo;
        }
        public function __set($atributo, $valor){
            return $this->$atributo = $valor;
            return this;
        }    

        public function encriptarClave($clave){
            $claveEncriptada = password_hash($clave,PASSWORD_DEFAULT);
            return $claveEncriptada;
        }

        public function verificarClave($claveIngresada, $claveEnBBDD){
            return password_verify($claveIngresada,$claveEnBBDD);
        }
    }    


?>