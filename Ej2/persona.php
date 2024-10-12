<?php

class persona {
    public $nombre;
    public $apellido;
    public $altura;
    public $edad;
    
    public function __construct($nombre, $apellido, $altura, $edad) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->altura = $altura;
    $this->edad = $edad;
    }
    
    public function hablar() {
    echo "Hola, soy $this->nombre $this->apellido\n";
    }
    
    public function caminar() {
    echo "Estoy caminando como $this->nombre $this->apellido\n";
    }
}


?>