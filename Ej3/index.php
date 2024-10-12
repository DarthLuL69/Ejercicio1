<?php

require_once 'Configuracion.php';

echo Configuracion::getColor(). "\n";
echo Configuracion::getNewsletter(). "\n";
echo Configuracion::getEntorno(). "\n";

Configuracion::setColor("Verde");
Configuracion::setNewsletter(false);
Configuracion::setEntorno("Producción");
echo Configuracion::getColor(). "\n";
echo Configuracion::getNewsletter(). "\n";
echo Configuracion::getEntorno(). "\n";

?>