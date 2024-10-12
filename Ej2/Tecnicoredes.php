<?php

class TécnicoRedes extends persona {
    public $auditarRedes;
    public $experienciaRedes;
    
    public function __construct($nombre, $apellido, $altura, $edad, $auditarRedes, $experienciaRedes) {
    parent::__construct($nombre, $apellido, $altura, $edad);
    $this->auditarRedes = $auditarRedes;
    $this->experienciaRedes = $experienciaRedes;
    }
    
    public function aRedes() {
    echo "Estoy auditando redes como técnico de redes\n";
    }
    }
    
    $informatico = new Informático("Juan", "Pérez", 175, 30, ["PHP", "JavaScript"], 5);
    $informatico->programar();
    $informatico->repararOrdenador();
    $informatico->hacerOfimática();
    
    $técnicoRedes = new TécnicoRedes("María", "González", 165, 28, ["Cisco", "Juniper"], 3);
    $técnicoRedes->aRedes();

?>