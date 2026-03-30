<?php

class Conta {

    public $numero;
    public $titular;
    public $saldo;
    public $taxaJuros;

    public function depositar($valor) {
        $this->saldo += $valor;
    }


    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente!<br>";
        }
    }

    public function exibirSaldo() {
        echo "Saldo atual: R$ " . $this->saldo . "<br>";
    }
}

$conta1 = new Conta();
$conta2 = new Conta();

$conta1->numero = 1;
$conta1->titular = "João";
$conta1->saldo = 1000;
$conta1->taxaJuros = 0.05;

$conta2->numero = 2;
$conta2->titular = "Maria";
$conta2->saldo = 500;
$conta2->taxaJuros = 0.03;

echo "Conta 1 - Titular: " . $conta1->titular . "<br>";
$conta1->depositar(200);
$conta1->sacar(150);
$conta1->exibirSaldo();

echo "<br>";

echo "Conta 2 - Titular: " . $conta2->titular . "<br>";
$conta2->depositar(100);
$conta2->sacar(700); 
$conta2->exibirSaldo();

?>