<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Imprimindo com Foreach</title>
</head>
<body>

<?php

$produto = [
"nome" => "Ps5",
"preco" => 3000,
"estoque" => 20
];

foreach ($produto as $chave => $valor) {
echo $chave . ": " . $valor . "<br>";
}

?>
</body>
</html>