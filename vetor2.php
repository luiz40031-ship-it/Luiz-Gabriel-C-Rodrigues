<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Vetor de Números</title>
</head>
<body>

<?php

$numeros = [10, 20, 30, 40, 50];

unset($numeros[2]);

foreach ($numeros as $num) {
    echo $num . "<br>";
}

?>
</body>
</html>