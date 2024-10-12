<?php
require_once 'Persona.php';

class informatico extends persona {
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
echo "Estoy programando con  ". $this->lenguajes. " como ". $this->getNombre(). " ". $this->getApellido(). "
";
}

public function repararOrdenador() {
echo "Estoy reparando ordenadores como  ". $this->getNombre(). " ". $this->getApellido(). "
";
}

public function hacerOfimatica() {
echo "Estoy haciendo ofimatica como ". $this->getNombre(). " ". $this->getApellido(). "
";
}
}

?>