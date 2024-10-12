<?php
require_once 'Persona.php';

class Tecnicoredes extends Persona {
    private $auditarRedes;
    private $experienciaRedes;

    public function __construct($nombre, $apellido, $altura, $edad, $auditarRedes, $experienciaRedes) {
        parent::__construct($nombre, $apellido, $altura, $edad);
        $this->auditarRedes = $auditarRedes;
        $this->experienciaRedes = $experienciaRedes;
    }

    public function getAuditarRedes() {
        return $this->auditarRedes;
    }

    public function setAuditarRedes($auditarRedes) {
        $this->auditarRedes = $auditarRedes;
    }

    public function getExperienciaRedes() {
        return $this->experienciaRedes;
    }

    public function setExperienciaRedes($experienciaRedes) {
        $this->experienciaRedes = $experienciaRedes;
    }

    public function auditRedes() {
        echo "Estoy auditando redes como " . $this->getNombre() . " " . $this->getApellido() . "\n";
    }
}
?>
