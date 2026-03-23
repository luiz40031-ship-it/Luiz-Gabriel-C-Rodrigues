<?php
class Aluno {
    public $nome;
    public $matricula;
    public $notas = [];
    public $situacao;

    public static function calcularMedia($aluno) {
        if (count($aluno->notas) > 0) {
            $soma = array_sum($aluno->notas);
            $media = $soma / count($aluno->notas);
            return $media;
        } else {
            return 0;
        }
    }

    public static function definirSituacao($aluno) {
        $media = Aluno::calcularMedia($aluno);
        if ($media >= 7) {
            $aluno->situacao = "Aprovado";
        } else {
            $aluno->situacao = "Reprovado";
        }
    }

    public static function exibirAluno($aluno) {
        echo "Nome: " . $aluno->nome . "<br>";
        echo "Matrícula: " . $aluno->matricula . "<br>";
        echo "Média: " . Aluno::calcularMedia($aluno) . "<br>";
        echo "Situação: " . $aluno->situacao . "<br><br>";
    }
}

$joao = new Aluno;
$joao->nome = "João";
$joao->matricula = "202301";
$joao->notas = [8, 7, 9];

$maria = new Aluno;
$maria->nome = "Maria";
$maria->matricula = "202302";
$maria->notas = [6, 5, 7];

Aluno::definirSituacao($joao);
Aluno::definirSituacao($maria);

Aluno::exibirAluno($joao);
Aluno::exibirAluno($maria);
?>