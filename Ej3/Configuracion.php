<?php
class Configuracion {
public static $color = "Azul";
public static $newsletter = true;
public static $entorno = "Desarrollo";

public static function getColor() {
return self::$color;
}

public static function getNewsletter() {
return self::$newsletter;
}

public static function getEntorno() {
return self::$entorno;
}

public static function setColor($color) {
self::$color = $color;
}

public static function setNewsletter($newsletter) {
self::$newsletter = $newsletter;
}

public static function setEntorno($entorno) {
self::$entorno = $entorno;
}
}
?>