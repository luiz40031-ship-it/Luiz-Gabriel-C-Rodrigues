<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Vetor de Frutas</title>
</head>
<body>

<?php
$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Manga"];
$frutas[] = "Abacaxi";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

?>
</body>
</html>