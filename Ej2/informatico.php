<?php

class Informático extends persona {
    public $lenguajes;
    public $experienciaProgramador;
    
    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador) {
    parent::__construct($nombre, $apellido, $altura, $edad);
    $this->lenguajes = $lenguajes;
    $this->experienciaProgramador = $experienciaProgramador;
    }
    
    public function programar() {
    echo "Estoy programando como informático\n";
    }
    
    public function repararOrdenador() {
    echo "Estoy reparando ordenadores como informático\n";
    }
    
    public function hacerOfimática() {
    echo "Estoy haciendo ofimática como informático\n";
    }
    }

?>