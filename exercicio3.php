<?php
class Carro{
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velocidademaxima;

    public function exibirInformacoes($marca, $modelo, $ano, $cor, $velocidademaxima){
        echo "Marca: $marca <br>";
        echo "Modelo: $modelo <br>";
        echo "Ano: $ano <br>";
        echo "Cor: $cor <br>";
        echo "Velocidade Máxima: $velocidademaxima km/h <br><br>";
    }

    public function acelerar(){
        echo "Acelerando<br>";
    }

    public function frear(){
        echo "Freando<br>";
    }
}

$carrodopai = new Carro;
$carrodotio = new Carro;
$carrodoprimo = new Carro;

$carrodopai->marca = "Toyota";
$carrodopai->modelo = "Corolla";
$carrodopai->ano = "2020";
$carrodopai->cor = "prata";
$carrodopai->velocidademaxima = "180";

$carrodotio->marca = "Honda";
$carrodotio->modelo = "Civic";
$carrodotio->ano = "2018";
$carrodotio->cor = "Preto";
$carrodotio->velocidademaxima = "200";

$carrodoprimo->marca = "Ford";
$carrodoprimo->modelo = "Focus";
$carrodoprimo->ano = 2016;
$carrodoprimo->cor = "Amarelo";
$carrodoprimo->velocidademaxima = "190";

$carrodopai->exibirInformacoes(
    $carrodopai->marca,
    $carrodopai->modelo,
    $carrodopai->ano,
    $carrodopai->cor,
    $carrodopai->velocidademaxima
);
$carrodopai->acelerar();
$carrodopai->frear();

echo "<br>";

$carrodotio->exibirInformacoes(
    $carrodotio->marca,
    $carrodotio->modelo,
    $carrodotio->ano,
    $carrodotio->cor,
    $carrodotio->velocidademaxima
);
$carrodotio->acelerar();
$carrodotio->frear();

echo "<br>";

$carrodoprimo->exibirInformacoes(
    $carrodoprimo->marca,
    $carrodoprimo->modelo,
    $carrodoprimo->ano,
    $carrodoprimo->cor,
    $carrodoprimo->velocidademaxima
);
$carrodoprimo->acelerar();
$carrodoprimo->frear();
?>