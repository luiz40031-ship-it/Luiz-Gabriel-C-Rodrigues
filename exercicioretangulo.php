<?php

class Retangulo {

    public $comprimento;
    public $largura;

    public function calcularArea() {
        return $this->comprimento * $this->largura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->comprimento + $this->largura);
    }
}

$ret1 = new Retangulo();
$ret2 = new Retangulo();

$ret1->comprimento = 10;
$ret1->largura = 5;

$ret2->comprimento = 7;
$ret2->largura = 3;

echo "Retângulo 1:<br>";
echo "Área: " . $ret1->calcularArea() . "<br>";
echo "Perímetro: " . $ret1->calcularPerimetro() . "<br><br>";

echo "Retângulo 2:<br>";
echo "Área: " . $ret2->calcularArea() . "<br>";
echo "Perímetro: " . $ret2->calcularPerimetro() . "<br>";

?>