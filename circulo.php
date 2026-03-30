<?php

class Circulo {

    public $raio;

    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->raio;
    }
}

$c1 = new Circulo();
$c2 = new Circulo();

$c1->raio = 5;
$c2->raio = 10;

echo "Círculo 1:<br>";
echo "Raio: " . $c1->raio . "<br>";
echo "Área: " . $c1->calcularArea() . "<br>";
echo "Perímetro: " . $c1->calcularPerimetro() . "<br><br>";

echo "Círculo 2:<br>";
echo "Raio: " . $c2->raio . "<br>";
echo "Área: " . $c2->calcularArea() . "<br>";
echo "Perímetro: " . $c2->calcularPerimetro() . "<br>";

?>