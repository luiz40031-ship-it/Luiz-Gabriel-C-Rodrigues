<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro de Alunos</title>
</head>
<body>
<?php

$alunos = [

["nome" => "Luiz", "nota" => 8.5],
["nome" => "Heitor", "nota" => 6.0],
["nome" => "Lorenzo", "nota" => 9.2]

];

$soma = 0;
$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $aluno) {

echo "Nome: " . $aluno["nome"] . "<br>";
echo "Nota: " . $aluno["nota"] . "<br><br>";

$soma += $aluno["nota"];

if ($aluno["nota"] > $maiorNota) {
$maiorNota = $aluno["nota"];
$melhorAluno = $aluno["nome"];
}
}
$media = $soma / count($alunos);

echo "Média da turma: " . number_format($media, 2) . "<br><br>";
echo "Maior nota: " . $maiorNota . "<br>";
echo "Aluno com maior nota: " . $melhorAluno;
?>
</body>
</html>