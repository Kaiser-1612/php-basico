<?php
 function formatarPreco(float $valor): string {
    return "R$ " . number_format($valor, 2, ",", ".");
}
$produtos = [
    ["nome" => "Teclado mecânico", "preco" => 249.90, "estoque" => 12],
    ["nome" => "Mouse sem fio",    "preco" => 79.50,  "estoque" => 30],
    ["nome" => "Album ARIRANG",    "preco" => 159.99,  "estoque" => 7],
    ["nome" => "Vinil CALL ME BY YOUR NAME", "preco" => 155.57,  "estoque" => 3],
];
   $total = 0;
    foreach ($produtos as $item) {
    $total += $item["preco"] * $item["estoque"];
}
    $quantidade = count($produtos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Calculadora de IMC</title>
</head>
<body>
<table border="1">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Situação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item["nome"]) ?></td>
                <td><?= formatarPreco($item["preco"]) ?></td>
                <td><?= $item["estoque"] ?></td>
                <td><?= $item["estoque"] > 0 ? "Disponível" : "Esgotado" ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p><?= $quantidade ?> produtos cadastrados. Valor total em estoque: <?= formatarPreco($total) ?>
</body>
</html>