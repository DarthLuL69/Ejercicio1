<?php
require_once 'Persona.php';

class Informatico extends Persona {
    private $lenguajes;
    private $experienciaProgramador;

    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador) {
        parent::__construct($nombre, $apellido, $altura, $edad);
        $this->lenguajes = $lenguajes;
        $this->experienciaProgramador = $experienciaProgramador;
    }

    public function getLenguajes() {
        return $this->lenguajes;
    }

    public function setLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;
    }

    public function getExperienciaProgramador() {
        return $this->experienciaProgramador;
    }

    public function setExperienciaProgramador($experienciaProgramador) {
        $this->experienciaProgramador = $experienciaProgramador;
    }

    public function programar() {
        echo "Programando..." .$this->lenguajes. " siendo".$this->getNombre(). " ".$this->getApellido();
    }

    public function repararOrdenador() {
        echo "Arreglando ordenadores siendo..." .$this->getNombre(). " ".$this->getApellido();
    }

    public function hacerOfimatica() {
        echo "Ofimatica siendo... " .$this->getNombre().$this->getApellido();
    }
}

?>
