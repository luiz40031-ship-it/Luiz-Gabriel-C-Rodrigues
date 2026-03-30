<?php

class Pessoa {

    public $nome;
    public $idade; 
    public $genero;

    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . " anos<br>";
        echo "Gênero: " . $this->genero . "<br>";
    }

    public function calcularIdadeCompleta() {
        $anos = $this->idade;
        $meses = $anos * 12;
        $dias = $anos * 365;

        echo "Idade completa:<br>";
        echo "$anos anos<br>";
        echo "$meses meses<br>";
        echo "$dias dias<br>";
    }
}

$p1 = new Pessoa();
$p2 = new Pessoa();

$p1->nome = "Carlos";
$p1->idade = 20;
$p1->genero = "Masculino";

$p2->nome = "Ana";
$p2->idade = 25;
$p2->genero = "Feminino";

echo "Pessoa 1:<br>";
$p1->exibirInformacoes();
$p1->calcularIdadeCompleta();

echo "<br>";

echo "Pessoa 2:<br>";
$p2->exibirInformacoes();
$p2->calcularIdadeCompleta();

?>