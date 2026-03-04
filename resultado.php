<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>
<body>

<?php

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];

echo "Nome: " . $nome . "<br>";

if ($idade > 18) {
echo "Minha idade é: " . $idade . "<br>";
echo "Sexo: " . $sexo . "<br>";
echo "Endereço: " . $endereco;

} else {
echo "Menor de idade";
}

?>
</body>
</html>