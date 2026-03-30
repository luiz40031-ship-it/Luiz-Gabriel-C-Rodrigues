<?php

class Produtos {

    public $nome;
    public $preco;
    public $quantidade;

    public function adicionarEstoque($qtd) {
        $this->quantidade += $qtd;
    }

    public function removerEstoque($qtd) {
        if ($qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
        } else {
            echo "Estoque insuficiente!<br>";
        }
    }

    public function exibirProduto() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: R$ " . $this->preco . "<br>";
        echo "Quantidade em estoque: " . $this->quantidade . "<br>";
    }
}

$p1 = new Produtos();
$p2 = new Produtos();

$p1->nome = "Notebook";
$p1->preco = 3500;
$p1->quantidade = 10;

$p2->nome = "Mouse";
$p2->preco = 50;
$p2->quantidade = 100;

echo "Produto 1:<br>";
$p1->adicionarEstoque(5);
$p1->removerEstoque(3);
$p1->exibirProduto();

echo "<br>";

echo "Produto 2:<br>";
$p2->adicionarEstoque(20);
$p2->removerEstoque(150); 
$p2->exibirProduto();

?>