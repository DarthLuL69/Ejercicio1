<?php

class persona {
    private $nombre;
    private $apellido;
    private $altura;
    private $edad;
    
    public function __construct($nombre, $apellido, $altura, $edad) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->altura = $altura;
    $this->edad = $edad;
    }
    
    public function getNombre() {
    return $this->nombre;
    }
    
    public function setNombre($nombre) {
    $this->nombre = $nombre;
    }
    
    public function getApellido() {
    return $this->apellido;
    }
    
    public function setApellido($apellido) {
    $this->apellido = $apellido;
    }
    
    public function getAltura() {
    return $this->altura;
    }
    
    public function setAltura($altura) {
    $this->altura = $altura;
    }
    
    public function getEdad() {
    return $this->edad;
    }
    
    public function setEdad($edad) {
    $this->edad = $edad;
    }
    
    public function hablar() {
    echo "Hola soy  ". $this->nombre. " ". $this->apellido. "
    ";
    }
    
    public function caminar() {
    echo "Estoy caminando como  ". $this->nombre. " ". $this->apellido. "
    ";
    }
    }

?>