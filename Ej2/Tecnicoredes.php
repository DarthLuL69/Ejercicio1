<?php
require_once 'Persona.php';
class Tecnicoredes extends persona {
    private $auditoriaRedes;
    private $experienciaRedes;
    
    public function __construct($nombre, $apellido, $altura, $edad, $auditoriaRedes, $experienciaRedes) {
    parent::__construct($nombre, $apellido, $altura, $edad);
    $this->auditoriaRedes = $auditoriaRedes;
    $this->experienciaRedes = $experienciaRedes;
    }
    
    public function getAuditoriaRedes() {
    return $this->auditoriaRedes;
    }
    
    public function setAuditoriaRedes($auditoriaRedes) {
    $this->auditoriaRedes = $auditoriaRedes;
    }
    
    public function getExperienciaRedes() {
    return $this->experienciaRedes;
    }
    
    public function setExperienciaRedes($experienciaRedes) {
    $this->experienciaRedes = $experienciaRedes;
    }
    
    public function auditRedes() {
    echo "Estoy auditando redes como  ". $this->getNombre(). " ". $this->getApellido(). "
    ";
    }
    }

?>