<?php

class Triangulo {

    public $base;
    public $altura;
    public $lado1;
    public $lado2;
    public $lado3;

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }

    public function tipoTriangulo() {
        if ($this->lado1 == $this->lado2 && $this->lado2 == $this->lado3) {
            return "Equilátero";
        } elseif ($this->lado1 == $this->lado2 || $this->lado1 == $this->lado3 || $this->lado2 == $this->lado3) {
            return "Isósceles";
        } else {
            return "Escaleno";
        }
    }
}

$tri1 = new Triangulo();
$tri2 = new Triangulo();

$tri1->base = 10;
$tri1->altura = 6;
$tri1->lado1 = 5;
$tri1->lado2 = 5;
$tri1->lado3 = 5;

$tri2->base = 8;
$tri2->altura = 4;
$tri2->lado1 = 3;
$tri2->lado2 = 4;
$tri2->lado3 = 5;

echo "Triângulo 1:<br>";
echo "Área: " . $tri1->calcularArea() . "<br>";
echo "Tipo: " . $tri1->tipoTriangulo() . "<br><br>";

echo "Triângulo 2:<br>";
echo "Área: " . $tri2->calcularArea() . "<br>";
echo "Tipo: " . $tri2->tipoTriangulo() . "<br>";

?>