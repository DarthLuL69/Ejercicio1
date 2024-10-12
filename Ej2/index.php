<?php
require_once 'Persona.php';
require_once 'Informatico.php';
require_once 'Tecnicoredes.php';

$persona = new Persona("Alexandro", "Suciu", 188, 22);
$informatico = new Informatico("Miguel", "orslok", 102.3, 21, "Java", 2);
$tecnicoRedes = new Tecnicoredes("Rufus", "yupi", 180, 45, true, 20);

echo "Nieto/abuelo PRUEBA:\n";
$tecnicoRedes->hablar();
$tecnicoRedes->caminar();

//Todos los metodos
$informatico->programar();
$informatico->repararOrdenador();
$informatico->hacerOfimatica();
$tecnicoRedes->auditRedes();

?>