<?php
$peso = (float) str_replace(",", ".", $_GET["peso"] ?? "0");
$altura = (float) str_replace(",", ".", $_GET["altura"] ?? "0");
$pesoExibicao = htmlspecialchars($_GET["peso"] ?? "0");
$alturaExibicao = htmlspecialchars($_GET["altura"] ?? "0");

if ($peso <= 0 || $altura <= 0) {
    $erro = "Informe peso e altura maiores que zero.";
     $imcFormatado = "---";
    $classe = "Não calculável";
}else{
    $erro = null;
    $imc = $peso / ($altura * $altura);
   $imcFormatado = number_format($imc, 1, ",", ".");


if ($imc < 18.5) {
    $classe = "Abaixo do peso";
} elseif ($imc < 25) {
    $classe = "Peso normal";
} elseif ($imc < 24.9) {
    $classe = "Sobrepeso";
} elseif ($imc < 29.9) {
    $classe = "Obesidade Grau I";
} elseif ($imc < 39.9){
    $classe = "Obesidade Grau II";
} elseif ($imc < 40){
     $classe = "Obesidade Grau III";
}

}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Calculadora de IMC</title>
</head>
<body>
  <h1>Calculadora de IMC</h1>
    <form method="get" action="">
        <p>
            <label>Peso (kg): </label>
            <input type="text" name="peso" value="<?= $pesoExibicao ?>">
        </p>
        <p>
            <label>Altura (m): </label>
            <input type="text" name="altura" value="<?= $alturaExibicao ?>">
        </p>
        <button type="submit">Calcular</button>
    </form>
    
    <hr>
  <p>Peso: <?= $peso ?> kg</p>
  <p>Altura: <?= $altura ?> m</p>
  <p>IMC: <strong><?= $imcFormatado ?></strong></p>
  <p>Classificação: <strong><?= $classe ?></strong></p>
</body>
</html>
