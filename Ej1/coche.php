<?php
class Coche {
    private $color;
    private $marca;
    private $modelo;
    private $velocidad;
    private $caballaje;
    private $plazas;
    
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
    $this->color = $color;
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->velocidad = $velocidad;
    $this->caballaje = $caballaje;
    $this->plazas = $plazas;
    }
    
    public function getColor() {
    return $this->color;
    }
    
    public function getMarca() {
    return $this->marca;
    }
    
    public function getModel () {
    return $this->modelo;
    }
    
    public function getVelocidad() {
    return $this->velocidad;
    }
    
    public function getCaballaje() {
    return $this->caballaje;
    }
    
    public function getPlazas() {
    return $this->plazas;
    }
    
    public function setColor($nuevoColor) {
    $this->color = $nuevoColor;
    }
    
    public function setMarca($nuevaMarca) {
    $this->marca = $nuevaMarca;
    }
    
    public function setModelo($nuevoModelo) {
    $this->modelo = $nuevoModelo;
    }
    
    public function acelerar() {
    $this->velocidad++;
    echo "Acelerando... ";
    }
    
    public function frenar() {
    $this->velocidad--;
    echo "Frenando... ";
    }
    
    public function getVelocidadActual() {
    return $this->velocidad;
    }
    
    public function mostrarInformacion($mensaje = '') {
    if (get_class($this) == 'Coche') {
    echo $mensaje. "Información del coche:\n";
    echo "-_-_-_-_-_-_-_-_-_-_-_-_-_-_-\n";
    echo "Color: ". $this->color. "\n";
    echo "Marca: ". $this->marca. "\n";
    echo "Modelo: ". $this->modelo. "\n";
    echo "Velocidad: ". $this->velocidad. " km/h\n";
    echo "Caballaje: ". $this->caballaje. "\n";
    echo "Plazas: ". $this->plazas. "\n";
    } else {
    echo "";
    }
    }
    }
    
?>
