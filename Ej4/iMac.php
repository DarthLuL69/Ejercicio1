<?php
class iMac implements iMacinterface {
    public $Marca;
    public $software;

    const BRAND = "Apple";

    public function __construct($software) {
        $this->Marca = self::BRAND;
        $this->software = $software;
    }

    public function getSoftware() {
        return $this->software;
    }

    public function setSoftware($software) {
        $this->software = $software;
    }
}

//Uso
$miMac = new iMac("macOS Monterey");
echo "Marca: " . $miMac->Marca . "\n"; // Salida: Marca: Apple
echo "Software: " . $miMac->getSoftware() . "\n"; // Salida: Software: macOS Monterey
?>
