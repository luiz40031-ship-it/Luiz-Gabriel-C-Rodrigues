<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>
<body>

<?php

$media = $_POST["media"];
echo "Média Final: " . $media . "<br><br>";
if ($media <= 1.7) {
echo "Você não pode realizar o exame. Tenta no próximo ano";

} elseif ($media >= 7.0) {
echo "Você está APROVADO! COMEMOREEEEEEEEE";

} else {

$NE = (50 - ($media * 6)) / 4;
echo "Você está em exame.<br>";
echo "Precisa tirar no mínimo: " . number_format($NE, 2);

}

?>
</body>
</html>