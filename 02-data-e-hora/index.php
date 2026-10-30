<?php
date_default_timezone_set("America/Sao_Paulo");
$data = date("d/m/Y");
$hora = date("H:i:s");

$horaAtual = (int) date("H");  
if ($horaAtual < 12) {
    $saudacao = "Bom dia";
} elseif ($horaAtual < 18) {
    $saudacao = "Boa tarde";
} else {
    $saudacao = "Boa Noite";
}
$diaNumero = (int)date("w");

switch ($diaNumero) {
    case 0: $diaExtenso = "Domingo"; break;
    case 1: $diaExtenso = "Segunda-feira"; break;
    case 2: $diaExtenso = "Terça-feira"; break;
    case 3: $diaExtenso = "Quarta-feira"; break;
    case 4: $diaExtenso = "Quinta-feira"; break;
    case 5: $diaExtenso = "Sexta-feira"; break;
    case 6: $diaExtenso = "Sábado"; break;
    default: $diaExtenso = "Dia inválido";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Data e hora</title>
</head>
<body>
  <h1>Data e hora do servidor</h1>
     <p>Hoje é <?= $data ?> (<?= $diaExtenso ?>) e agora são <?= $hora ?>.</p>
    <h2><?= $saudacao ?></h2>
</body>
</html>