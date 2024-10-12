<?php

require_once 'persona.php';
require_once 'informatico.php';
require_once 'Tecnicoredes.php';

$persona = new Persona("Alexandro", "Suciu", 188, 22);
$informatico = new Informatico("Miguel", "asdfsadf", 4, 21, "Java", 1);
$Tecnicoredes = new Tecnicoredes("Rufus", "fsdgsaag", 300, 45, "Yea", "20 años");

echo "Ancestros". $Tecnicoredes->getNombre(). " ". $Tecnicoredes->getApellido(). "
";
$informatico->hacerOfimatica();
$Tecnicoredes->auditRedes();

echo "abuelo:";
$informatico->hacerOfimatica();
$Tecnicoredes->auditRedes();
$persona->caminar();

?>