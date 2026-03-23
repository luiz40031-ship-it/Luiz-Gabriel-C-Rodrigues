<?php
class Funcionario{
    public $nome;
    public $cargo;
    public $salario;
    public $dataadmissao;
}
    $Luiz = new Funcionario;
    $Bob = new Funcionario;
    $Marco = new Funcionario;

   $Luiz->nome = "Luiz";
$Luiz->cargo = "Desenvolvedor";
$Luiz->salario = 3000;
$Luiz->dataadmissao = "2022";

$Bob->nome = "Bob";
$Bob->cargo = "Designer";
$Bob->salario = 2500;
$Bob->dataadmissao = "2021";

$Marco->nome = "Marco";
$Marco->cargo = "Gerente";
$Marco->salario = 4000;
$Marco->dataadmissao = "2020";

echo "Nome: " . $Luiz->nome . "<br>";
echo "Cargo: " . $Luiz->cargo . "<br>";
echo "Salário anual: R$ " . ($Luiz->salario * 12) . "<br><br>";

echo "Nome: " . $Bob->nome . "<br>";
echo "Cargo: " . $Bob->cargo . "<br>";
echo "Salário anual: R$ " . ($Bob->salario * 12) . "<br><br>";

echo "Nome: " . $Marco->nome . "<br>";
echo "Cargo: " . $Marco->cargo . "<br>";
echo "Salário anual: R$ " . ($Marco->salario * 12) . "<br>";
?>