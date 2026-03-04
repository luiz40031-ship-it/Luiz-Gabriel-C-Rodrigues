<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Página Protegida</title>
</head>
<body>

<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario == "adm" && $senha == "1234") {
echo "Bem-vindo, $usuario!<br>";
echo "Seu cargo é: Administrador";

} elseif ($usuario == "Luiz" && $senha == "abcd") {
echo "Bem-vindo, $usuario!<br>";
echo "Seu cargo é: Funcionário";

} else {
echo "Erro: Nome de usuário ou senha incorretos.";
}

?>
</body>
</html>